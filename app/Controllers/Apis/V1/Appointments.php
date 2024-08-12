<?php

namespace App\Controllers\Apis\V1;

use App\Models\AppointmentsModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use DateTime;
use Exception;

class Appointments extends ResourceController
{
    use ResponseTrait;

    protected $modelAppoin;
    protected $request;

    public function __construct()
    {
        $this->request     = service('request');
        $this->modelAppoin = new AppointmentsModel();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
        $data = $this->modelAppoin->list($this->request->getGet());
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
        // Manipulação dos Dados
        try {
            $input = $this->request->getPost();

            // Converte a data para o formato MySQL
            $dateString = $input['dataAgendamento'];
            $date = DateTime::createFromFormat('d/m/Y H:i', $dateString);

            if (!$date) {
                throw new Exception('Formato de data inválido');
            }

            $formattedDate = $date->format('Y-m-d H:i:s');

            // Verifica se a data já está disponível
            $verifica = $this->modelAppoin->where(
                [
                    'date' => $formattedDate
                ]
            )->countAllResults();

            if ($verifica > 0) {
                throw new Exception('Data não disponível');
            }

            // Dados para inserção
            $data = [
                'id_user'     => session('data')['id'],
                'date'        => $formattedDate,
                'id_customer' => $input['idCustumer']
            ];

            if (!$this->modelAppoin->insert($data)) {
                return $this->fail($this->modelAppoin->errors());
            }

            return $this->respond($input);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
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
