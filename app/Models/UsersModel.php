<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['platformId', 'name', 'photo', 'email', 'phone', 'password', 'token', 'checked'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['beforeIn'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['beforeIn'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function beforeIn(array $data)
    {
        //Busca functions auxiliar
        helper("auxiliar");

        //Gera novo token
        $data["data"]["token"] = gera_token();

        //Verifica se password está preenchido
        if (array_key_exists("password", $data["data"])) {
            $data["data"]["password"] = password_hash($data["data"]["password"], PASSWORD_BCRYPT);
        }

        if (!array_key_exists("photo", $data["data"])) {
            $data["data"]["photo"] = '/assets/images/users/user-dummy-img.jpg';
        }

        return $data;
    }


    /**
     * Método de autenticação do usuário.
     *
     * @param array $input Dados de entrada contendo e-mail e senha.
     * @return mixed Redireciona o usuário após a autenticação ou retorna mensagem de erro.
     */
    public function auth(array $input)
    {
        try {
            // Verifica o login (e-mail e senha)
            $rowLogin = $this->verifyLogin($input['email'], $input['pass']);

            // Verifica se o usuário possui uma inscrição ativa
            $this->verifySubscription($rowLogin['id']);

            // Verifica se o usuário possui um plano ativo
            $rowPlan = $this->verifyPlan($rowLogin['id']);

            // Gerencia os dados do paciente (criação ou verificação)
            $idCustumer = $this->manageCustumer($rowLogin);

            // Configura os dados da sessão do usuário
            $this->setSessionData($rowLogin, $rowPlan, $idCustumer);

            // Cria um log de login
            $this->createLoginLog();

            // Redireciona o usuário para a página apropriada
            return $this->redirectUser($input);
        } catch (\Exception $e) {
            // Loga a mensagem de erro e retorna a mensagem
            log_message('info', "Erro ao tentar fazer o login: {$e->getMessage()}");
            return $e->getMessage();
        }
    }

    /**
     * Verifica o login do usuário.
     *
     * @param string $email E-mail do usuário.
     * @param string $pass Senha do usuário.
     * @return array Dados do usuário.
     * @throws Exception Se o e-mail ou a senha forem inválidos.
     */
    private function verifyLogin($email, $pass)
    {
        $rowLogin = $this->where('email', $email)->first();
        if (!$rowLogin) {
            throw new Exception('E-mail não encontrado');
        }
        if (!password_verify($pass, $rowLogin['password'])) {
            throw new Exception('Senha inválida');
        }
        return $rowLogin;
    }

    /**
     * Verifica se o usuário possui uma inscrição ativa.
     *
     * @param int $userId ID do usuário.
     * @throws Exception Se o usuário não tiver uma inscrição ativa.
     */
    private function verifySubscription($userId)
    {
        $modelSubscription = new SubscriptionsModel();
        $rowSubscription = $modelSubscription->where('idUser', $userId)->first();
        if (!$rowSubscription) {
            throw new Exception('Você não tem uma inscrição ativa.');
        }
    }

    /**
     * Verifica se o usuário possui um plano ativo.
     *
     * @param int $userId ID do usuário.
     * @return array Dados do plano.
     * @throws Exception Se o usuário não tiver um plano ativo.
     */
    private function verifyPlan($userId)
    {
        $modelSubscription = new SubscriptionsModel();
        $rowSubscription = $modelSubscription->where('idUser', $userId)->first();
        $modelPlan = new PlansModel();
        $rowPlan = $modelPlan->where('id', $rowSubscription['idPlan'])->first();
        if (!$rowPlan) {
            throw new Exception('Você não tem um plano ativo.');
        }
        return $rowPlan;
    }

    /**
     * Gerencia os dados do paciente.
     *
     * @param array $rowLogin Dados do login do usuário.
     * @return int ID do paciente.
     */
    private function manageCustumer($rowLogin)
    {
        $modelCustumers = new CustumersModel();
        $rowCustumers = $modelCustumers->where(['idUser' => $rowLogin['id'], 'email' => $rowLogin['email']])->first();
        if ($rowCustumers) {
            return $rowCustumers['id'];
        } else {
            $dataCustumers = [
                'idUser' => $rowLogin['id'],
                'name'   => $rowLogin['name'],
                'email'  => $rowLogin['email'],
                'photo'  => $rowLogin['photo'],
                'phone'  => $rowLogin['phone'],
            ];
            $idCustumers = $modelCustumers->insert($dataCustumers);
            session()->set(['data' => ['custumer' => $idCustumers]]);

            $modelTime = new TimeLinesModel();
            $modelTime->insert(
                [
                    'idUser' => $rowLogin['id'],
                    'idCustumer' => $idCustumers,
                    'type' => 'create_custumer'
                ]
            );
            return $idCustumers;
        }
    }

    /**
     * Configura os dados da sessão do usuário.
     *
     * @param array $rowLogin Dados do login do usuário.
     * @param array $rowPlan Dados do plano do usuário.
     * @param int $idCustumers ID do paciente.
     */
    private function setSessionData($rowLogin, $rowPlan, $idCustumers)
    {
        $data = [
            'id'           => $rowLogin['id'],
            'platform'     => $rowLogin['platformId'],
            'custumer'     => $idCustumers,
            'name'         => $rowLogin['name'],
            'email'        => $rowLogin['email'],
            'plan'         => $rowPlan['namePlan'],
            'planId'       => $rowPlan['id'],
            'subscription' => $rowPlan['id'],
            'photo'        => $rowLogin['photo'],
            'phone'        => $rowLogin['phone'],
            'permission'   => $rowPlan['permissionUser'],
            'isConnected'  => true
        ];
        session()->set(['data' => $data]);
    }

    /**
     * Cria um log de login.
     */
    private function createLoginLog()
    {
        $modelLogs = new LogsModel();
        $modelLogs->createLog('user_login', 'Fez o login na plataforma');
    }

    /**
     * Redireciona o usuário para a página apropriada.
     *
     * @param array $input Dados de entrada contendo URL de recuperação (opcional).
     * @return \CodeIgniter\HTTP\RedirectResponse Redireciona para a URL de recuperação ou para o dashboard.
     */
    private function redirectUser($input)
    {
        if (isset($input['recover'])) {
            return redirect()->to($input['recover']);
        } else {
            return redirect()->to(site_url('dashboard'));
        }
    }
}
