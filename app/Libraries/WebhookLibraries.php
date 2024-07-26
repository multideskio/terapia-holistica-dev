<?php

namespace App\Libraries;

use App\Models\LogsModel;
use App\Models\PlansModel;
use App\Models\SubscriptionsModel;
use App\Models\UsersModel;
use Exception;

class WebhookLibraries
{
    protected $modelUser;
    protected $modelPlan;
    protected $modelSubscriptions;

    public function __construct()
    {
        helper('auxiliar');

        $this->modelUser = new UsersModel();
        $this->modelPlan = new PlansModel();
        $this->modelSubscriptions = new SubscriptionsModel();
    }

    /**
     * Processa a transação baseada no status atual.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request Requisição contendo os dados do webhook.
     * @return array Resultado da execução.
     */
    public function processTransaction($request): array
    {
        $request = service('request');
        // Obtém o status atual da transação
        $currentStatus = $request->getJsonVar('currentStatus');

        // Ações para transação paga
        if ($currentStatus == 'paid') {
            $user = $this->getUserData($request);
            return $this->processPaidTransaction($request, $user);
        }

        // Ações para transação reembolsada
        if ($currentStatus == 'refunded') {
            $user = $this->getUserData($request);
            return $this->processRefundedTransaction($request, $user);
        }

        // Ações para transação devolvida (chargeback)
        if ($currentStatus == 'chargedback') {
            $user = $this->getUserData($request);
            return $this->processChargebackTransaction($request, $user);
        }

        throw new Exception("Status desconhecido");
    }

    /**
     * Processa uma transação paga.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request Requisição contendo os dados do webhook.
     * @param array $user Dados do usuário.
     * @return array Resultado da operação.
     * @throws Exception Se o plano não for encontrado.
     */
    protected function processPaidTransaction($request, array $user): array
    {
        $request = service('request');
        $modelLogs = new LogsModel();

        $resp = [];
        $modelPlan = new PlansModel();
        $idProduto = $request->getJsonVar('product.id') == 0 ? "" : $request->getJsonVar('product.id');
        $rowPlan = $modelPlan->where('idPlan', $idProduto)->first();

        if (empty($rowPlan)) {
            throw new Exception('O plano não foi encontrado');
        }

        $searchUpdate = $this->modelSubscriptions->where(['idUser' => $user['id']])->findAll();

        // Atualiza ou cria inscrição
        if (count($searchUpdate)) {
            foreach ($searchUpdate as $row) {
                $this->modelSubscriptions->delete($row['id']);
            }
            $this->modelSubscriptions->insert([
                'idPlan' => $rowPlan['id'],
                'idUser' => $user['id']
            ]);
            $resp = ['message' => 'Inscrição atualizada'];
            $modelLogs->insert([
                'platformId' => 1,
                'idUser' => $user['id'],
                'type' => 'subscription_updated',
                'description' => 'Inscrição atualizada'
            ]);
        } else {
            $this->modelSubscriptions->insert([
                'idPlan' => $rowPlan['id'],
                'idUser' => $user['id']
            ]);
            $modelLogs->insert([
                'platformId' => 1,
                'idUser' => $user['id'],
                'type' => 'subscription_created',
                'description' => 'Inscrição criada'
            ]);
            $resp = ['message' => 'Inscrição criada'];
        }

        $email = new EmailsLibraries;
        $email->send($user['email'], 'Seu acesso chegou', view('emails/subscription', $user));

        return $resp;
    }

    /**
     * Processa uma transação reembolsada.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request Requisição contendo os dados do webhook.
     * @param array $user Dados do usuário.
     * @return array Resultado da operação.
     */
    protected function processRefundedTransaction($request, array $user): array
    {
        $searchUpdate = $this->modelSubscriptions->select('id')->where(['idUser' => $user['id']])->findAll();
        foreach ($searchUpdate as $row) {
            $this->modelSubscriptions->delete($row['id']);
        }
        return ['status' => 'Inscrição cancelada'];
    }

    /**
     * Processa uma transação devolvida (chargeback).
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request Requisição contendo os dados do webhook.
     * @param array $user Dados do usuário.
     * @return array Resultado da operação.
     */
    protected function processChargebackTransaction($request, array $user): array
    {
        $searchUpdate = $this->modelSubscriptions->select('id')->where(['idUser' => $user['id']])->findAll();
        foreach ($searchUpdate as $row) {
            $this->modelSubscriptions->delete($row['id']);
        }
        return ['status' => 'Inscrição cancelada por extorno'];
    }

    /**
     * Obtém ou cria os dados do usuário.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request Requisição contendo os dados do webhook.
     * @return array Dados do usuário.
     */
    protected function getUserData($request): array
    {
        $request = service('request');
        $dataReturn = [];

        // Verifica se já existe usuário com esse e-mail
        $email = $request->getJsonVar('client.email');
        $rowUser = $this->modelUser->where('email', $email)->first();

        if ($rowUser) {
            // Retorna dados do usuário existente
            return $rowUser;
        } else {
            // Dados para cadastro de novo usuário
            $data = [
                'platformId' => 1,
                'name'     => $request->getJsonVar('client.name'),
                'email'    => $email,
                'password' => 'mudar@123', // Senha temporária
                'token'    => gera_token() // Gera um token para o usuário
            ];

            // Cadastra novo usuário
            $this->modelUser->insert($data);

            // Obtém o usuário recém-criado
            $newUser = $this->modelUser->where('email', $email)->first();

            if ($newUser) {
                $modelLogs = new LogsModel();
                $modelLogs->insert([
                    'platformId' => 1,
                    'idUser' => $newUser['id'],
                    'type' => 'user_created',
                    'description' => 'Criou uma conta através de uma assinatura.'
                ]);
                return $newUser;
            } else {
                throw new Exception('Erro ao criar novo usuário');
            }
        }
    }
}
