<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class TimeLinesModel extends Model
{
    protected $table            = 'timelines';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['idUser', 'idCustomer', 'type', 'description', 'url', 'ico', 'observation'];

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
    protected $beforeInsert   = ['create'];
    protected $afterInsert    = ['updateCache'];
    protected $beforeUpdate   = ['updateCache'];
    protected $afterUpdate    = ['updateCache'];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = ['updateCache'];

    protected function updateCache()
    {
        $cache     = service('cache');
        $nameCache = session('data')['customer'] . '_story';
        if ($cache->get($nameCache)) {
            $cache->delete($nameCache);
        }
    }

    protected function create(array $data)
    {
        if ($data["data"]["type"] == 'create_customer') {
            $data["data"]["description"] = "Cliente criado";
            $data["data"]["url"]         = site_url();
            $data["data"]["ico"]         = "ri-user-smile-line";
            $data["data"]["observation"] = "Novo cliente criado";
        }

        if ($data["data"]["type"] == 'create_anamnese') {
            $data["data"]["description"] = "Anamnese gerada";
            $data["data"]["ico"]         = "ri-fire-line";
            $data["data"]["observation"] = "Nova anamnese criada";
        }

        return $data;
    }


    public function getTimelineDataTs(): array
    {
        helper('auxiliar');
        $data = array();
        
        $rows = $this
            ->select('timelines.*, customers.name as name, customers.email as email')
            ->join('customers', 'customers.id = timelines.idCustomer')
            ->orderBy('timelines.created_at', 'DESC')
            ->where('timelines.idCustomer', session('data')['customer'])
            ->findAll();

        foreach ($rows as $row) {
            $time = Time::parse($row['created_at']);
            if ($row['type'] == 'create_customer') {
                $data[] = [
                    'id'      => $row['id'],
                    'type'    => $row['type'],
                    'desc'    => $row['description'],
                    'url'     => $row['url'],
                    'ico'     => $row['ico'],
                    'obs'     => $row['observation'] . " " . $row['name'],
                    'date'    => $time->toLocalizedString('dd MMM yyyy'),
                    'timeAgo' => $time->humanize(),
                    'name'    => $row['name'],
                    'email'   => $row['email']
                ];
            } elseif ($row['type'] == 'create_anamnese') {
                $data[] = [
                    'id'      => $row['id'],
                    'type'    => $row['type'],
                    'desc'    => $row['description'],
                    'url'     => $row['url'],
                    'slug'    => explode('/', $row['url'])[3],
                    'ico'     => $row['ico'],
                    'obs'     => $row['observation'] . " " . $row['name'],
                    'date'    => $time->toLocalizedString('dd MMM yyyy'),
                    'timeAgo' => $time->humanize(),
                    'name'    => $row['name'],
                    'email'   => $row['email']
                ];
            } else {
                $data[] = [
                    'id'      => $row['id'],
                    'type'    => $row['type'],
                    'desc'    => $row['description'],
                    'url'     => $row['url'],
                    'ico'     => $row['ico'],
                    'obs'     => $row['observation'],
                    'date'    => $time->toLocalizedString('dd MMM yyyy'),
                    'timeAgo' => $time->humanize(),
                    'name'    => $row['name'],
                    'email'   => $row['email']
                ];
            }
        }
        return $data;
    }
}
