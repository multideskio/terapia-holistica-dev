<?php

namespace App\Controllers\Apis\V1;

use App\Models\PlansModel;
use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Webhook extends ResourceController
{
    use ResponseTrait;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    protected $request;
    public function __construct()
    {
        helper('auxiliar');
        $this->request = service('request');
    }
    public function index()
    {
        //
        return $this->respond(['start']);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }

    public function createUser($product = null)
    {
        try {

            //Verifica a key enviada no header
            if ($this->request->getHeaderLine('Key') != 'key') {
                throw new Exception('Sem permissão para executar');
            }

            if (!$product) {
                throw new Exception('Sem permissão para executar');
            }

            $modelPlan = new PlansModel();
            $rowPlan   = $modelPlan->where('idPlan', $product)->first();

            //Plano não encontrado
            if (!$rowPlan) {
                throw new Exception('Entrega não encontrada');
            }

            //Verifica se já existe usuário com esse e-mail
            $email = $this->request->getJsonVar('email');
            $modelUser = new UsersModel();
            $rowUser = $modelUser->where('email', $email)->first();

            $data = [
                'name'     => $this->request->getJsonVar('name'),
                'email'    => $email,
                'password' => 'mudar@123',
                'token'    => gera_token()
            ];

            $sanitize = esc($data);

            if ($rowUser) {
                //Usuário já existe
                //Cancela a assinatura anterior e cria uma nova

            } else {
                //Usuário não existe
                //Cria um novo usuário e relaciona a um plano

            }

            return $this->respondCreated($sanitize);
        } catch (\Exception $e) {

            return $this->failForbidden($e->getMessage());
        }
    }
}
