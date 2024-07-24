<?php

namespace App\Libraries;

use App\Models\PlansModel;
use App\Models\SubscriptionsModel;
use App\Models\UsersModel;

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

    public function execute($request)
    {


        $currentStatus = $request->getJsonVar('currentStatus');


        if ($currentStatus == 'paid') {
            return $this->dataUser($request);
            $this->paid($request);
        }

        if ($currentStatus == 'refunded') {
            $this->paid($request);
        }

        if ($currentStatus == 'chargedback') {
            $this->paid($request);
        }
    }

    protected function paid(array $data)
    {
    }

    protected function reembolsado(array $data)
    {
    }
    protected function extorno(array $data)
    {
    }
    protected function dataUser($request)
    {
        $dataReturn = [];

        //Verifica se já existe usuário com esse e-mail
        $email = $request->getJsonVar('client.email');

        $rowUser = $this->modelUser->where('email', $email)->first();

        if ($rowUser) {
            //retorna dados do usuário
            $dataReturn = $rowUser;
        } else {

            //Dados para cadastro
            $data = [
                'platformId' => 1,
                'name'     => $request->getJsonVar('client.name'),
                'email'    => $email,
                'password' => 'mudar@123',
                'token'    => gera_token()
            ];

            //Cadastra usuário
            $this->modelUser->insert($data);

            //Executa dataUser de novo para retornar os dados do usuário cadastrado
            return $this->dataUser($request);
        }

        return $dataReturn;
    }
}
