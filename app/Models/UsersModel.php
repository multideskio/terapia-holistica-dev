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


    public function auth(array $input)
    {


        try {

            $pass  = $input['pass'];
            $email = $input['email'];
            
            $rowLogin = $this->where('email', $email)->first();

            if (!$rowLogin) {
                throw new Exception('E-mail não encontrado');
            }

            if (!password_verify($pass, $rowLogin['password'])) {
                throw new Exception('Senha invalída');
            };

            $modelSubscription = new SubscriptionsModel();
            $rowSubscription   = $modelSubscription->where('idUser', $rowLogin['id'])->first();

            if (!$rowSubscription) {
                throw new Exception('Você não tem uma inscrição ativo.');
            };

            $modelPlan = new PlansModel();
            $rowPlan   = $modelPlan->where('id', $rowSubscription['idPlan'])->first();

            if(!$rowPlan){
                throw new Exception('Você não tem um plano ativo.');
            }
            

            $data = [
                'id'           => $rowLogin['id'],
                'name'         => $rowLogin['name'],
                'email'        => $rowLogin['email'],
                'plan'         => $rowPlan['namePlan'],
                'planId'       => $rowPlan['id'],
                'subscription' => $rowPlan['id'],
                'photo'        => $rowLogin['photo'],
                'phone'        => $rowLogin['phone'],
                'permission'   => $rowPlan['permissionUser'],
                'isConnected'     => true
            ];

            session()->set(
                [
                    'data' => $data
                ]
            );

            
            if($rowPlan['permissionUser'] === 1){
                return redirect()->to(site_url('dashboard/tp'));
            }else{
                return redirect()->to(site_url('dashboard/ts'));
            }

        } catch (\Exception $e) {
            log_message('info', "Erro ao tentar fazer o login: {$e->getMessage()}");
            return $e->getMessage();
        }
    }
}
