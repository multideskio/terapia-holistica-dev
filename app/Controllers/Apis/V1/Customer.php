<?php

namespace App\Controllers\Apis\V1;

use App\Models\CustomersModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

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
