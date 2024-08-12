<?php

namespace App\Models;

use CodeIgniter\Model;
use DateTime;

class AppointmentsModel extends Model
{
    protected $table            = 'appointments';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'id_customer', 'date', 'status'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [
        'id'          => 'int',
        'id_user'     => 'int',
        'id_customer' => 'int'
        //'date'        => '?datetime'
    ];

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
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function list($input = false, $limit = 12, $order = 'ASC'): array
    {
        $data = [];

        // Define o termo de busca, se houver
        $search = $input['search'] ?? false;
        $page   = $input['page'] ?? false;

        $this->select('appointments.id, appointments.date, customers.id As id_customer, customers.name, customers.phone, customers.email, COUNT(anamneses.id) as anamneses_count')
            ->join('customers', 'appointments.id_customer = customers.id')
            ->join('anamneses', 'anamneses.id_customer = customers.id', 'left')
            ->where('appointments.id_user', session('data')['id'])
            ->orderBy('appointments.date', $order)
            ->groupBy('appointments.id, customers.id');

        if ($search) {
            $this->groupStart()
                ->like('customers.name', $search)
                ->orLike('customers.id', $search)
                ->orLike('customers.email', $search)
                ->orLike('customers.birthDate', $search)
                ->orLike('appointments.date', $search)
                ->groupEnd();
        }

        // Paginação dos resultados
        $customers    = $this->paginate($limit);
        $totalResults = $this->where('appointments.id_user', session('data')['id'])->countAllResults();
        $currentPage  = $this->pager->getCurrentPage();
        $start        = ($currentPage - 1) * $limit + 1;
        $end          = min($currentPage * $limit, $totalResults);

        // Lógica para definir a mensagem de resultados
        $resultCount = count($customers);
        if ($search) {
            if ($resultCount === 1) {
                $numMessage = "1 resultado encontrado.";
            } else {
                $numMessage = "{$resultCount} resultados encontrados.";
            }
        } else {
            $numMessage = "Exibindo resultados {$start} a {$end} de {$totalResults}.";
        }

        $data = [
            'rows'  => $customers, // Resultados paginados com contagem de anamneses
            'pager' => $this->pager->links('default', 'paginate'), // Links de paginação
            'num'   => $numMessage
        ];



        /*$this->select('appointments.data AS data')
            ->select('customers.*')
            ->select('COUNT(anamneses.id) as anamneses_count')
            ->join('appointments','appointments.id_customer = customers.id')
            ->join('anamneses', 'anamneses.id_customer = customers.id', 'left')
            ->where('appointments.idUser', session('data')['id']);
*/


        return $data;
    }
}
