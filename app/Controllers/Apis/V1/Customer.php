<?php

namespace App\Controllers\Apis\V1;

use App\Models\CustomersModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Customer extends ResourceController
{
    use ResponseTrait;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    protected $modelCustomer;
    public function __construct()
    {
        $this->modelCustomer = new CustomersModel();
    }
    public function index()
    {
        //
        $data = $this->modelCustomer->custumerList($this->request->getGet());
        return $this->respond($data);
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

    public function searchCustomer($id = null){
        try{
            $data = $this->modelCustomer->searchCustomer($id);
            return $this->respond($data);
        }catch(\Exception $e){
            return $this->fail($e->getMessage());
        }
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
        $input = $this->request->getPost();

        try{

        //Verifica se endereço de e-mail está no banco de dados relacionado ao usuário atual
        $row = $this->modelCustomer->where(['email' => $input['email']])->countAllResults();
        
        if($row > 0){
            throw new Exception('Esse e-mail já está cadastrado</br>Verifique na sua tabela de clientes.');
        }

        //dados para cadastro
        $data = [
            'idUser' => session('data')['id'],
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'birthDate' => $input['date'],
            'doc' => $input['doc'],
            'generous' => $input['genero']
        ];

        $id = $this->modelCustomer->insert($data);

        if ($id === false) {
            return $this->fail($this->modelCustomer->errors());
        }

        return $this->respond($data);

    }catch(\Exception $e){
        return $this->fail($e->getMessage());
    }


        return $this->respond($input);
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
}
