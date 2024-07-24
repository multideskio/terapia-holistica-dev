<?php

namespace App\Models;

use CodeIgniter\Model;

class StoriesModel extends Model
{
    protected $table            = 'stories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
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
    protected $afterInsert    = ['updateCache'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = ['updateCache'];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = ['updateCache'];


    protected function updateCache()
    {
        $cache     = service('cache');
        $nameCache = session('data')['id'].'_story';
        $cache->delete($nameCache);
    }


    public function getTimelineDataTs(): array{
        helper('auxiliar');
        $data = array();
        $nameCache = session('data')['id'].'_story';
        $cache = service('cache');

        if (!$cache->get($nameCache)) {
            $data = $this->findAll();
            $cache->save($nameCache, $data, getCacheExpirationTimeInSeconds(30));
        }else{
            $data = $cache->get($nameCache);
        }

        return $data;
    }
}
