<?php

namespace App\Controllers\Apis\V1;

use App\Libraries\WebhookLibraries;
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
    protected $webhookLibraries;
    public function __construct()
    {
        helper('auxiliar');
        $this->request = service('request');
        $this->webhookLibraries = new WebhookLibraries;
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
            /*if ($this->request->getHeaderLine('Key') != 'key') {
                throw new Exception('Sem permissão para executar');
            }*/

            //Verifica o id do webhook interno
            if (!$product) {
                throw new Exception('Sem permissão para executar');
            }

            //Ações class webhookLibraries
            $webhook = $this->webhookLibraries->processTransaction($this->request);

            return $this->respondCreated($webhook);

        } catch (\Exception $e) {

            return $this->failForbidden($e->getMessage());
        }
    }
}
