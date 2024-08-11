<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class CustomersModel extends Model
{
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['idUser', 'name', 'photo', 'phone', 'email', 'phone', 'birthDate', 'doc', 'generous'];

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
    protected $validationRules      = [
        'email' => 'required|max_length[254]|valid_email',
        'name'  => 'required',
        'birthDate' => 'required|date'
    ];
    protected $validationMessages   = [

    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['init'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected function init(array $data): array{

        if (!array_key_exists('photo', $data['data'])) {
            $data['data']['photo'] = '/assets/images/users/user-dummy-img.jpg';
        }

        return $data;
    }

    public function searchCustomer(int $id): array
    {
        $data = $this->where('idUser', session('data')['id'])->find($id);
        if (!isset($data)) {
            throw new Exception('Paciente não encontrado');
        }
        return $data;
    }

    public function custumerList($input = false, $limit = 10, $order = 'DESC'): array
    {
        $data = [];

        // Define o termo de busca, se houver
        $search = $input['search'] ?? false;
        $page   = $input['page'] ?? false;

        // Busca dados com join e contagem de anamneses
        $this->select('customers.*, COUNT(anamneses.id) as anamneses_count')
            ->join('anamneses', 'anamneses.id_customer = customers.id', 'left')
            ->where('customers.idUser', session('data')['id'])
            ->groupBy('customers.id')
            ->orderBy('customers.id', $order);

        if ($search) {
            $this->groupStart()
                ->like('customers.name', $search)
                ->orLike('customers.id', $search)
                ->orLike('customers.email', $search)
                ->orLike('customers.birthDate', $search)
                ->groupEnd();
        }

        // Paginação dos resultados
        $customers    = $this->paginate($limit, 'group3');
        $totalResults = $this->where('customers.idUser', session('data')['id'])->countAllResults();
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
            'pager' => $this->pager->links('group3', 'paginate'), // Links de paginação
            'num'   => $numMessage
        ];

        return $data;
    }
}
