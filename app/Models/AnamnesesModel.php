<?php

namespace App\Models;

use CodeIgniter\Model;

class AnamnesesModel extends Model
{
    protected $table            = 'anamneses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idUser', 'idPatient', 'slug', 'campo_mental_desequilibrio', 'campo_mental_percentual', 'campo_emocional_desequilibrio', 'campo_emocional_percentual', 'campo_espiritual_desequilibrio', 'campo_espiritual_percentual', 'campo_fisico_desequilibrio', 'campo_fisico_percentual', 'chakra_coronario_desequilibrio', 'chakra_coronario_percentual', 'chakra_coronario_atividade', 'chakra_coronario_afeta_glandula', 'chakra_frontal_desequilibrio', 'chakra_frontal_percentual', 'chakra_frontal_atividade', 'chakra_frontal_afeta_glandula', 'chakra_laringeo_desequilibrio', 'chakra_laringeo_percentual', 'chakra_laringeo_atividade', 'chakra_laringeo_afeta_glandula', 'chakra_cadiaco_desequilibrio', 'chakra_cadiaco_percentual', 'chakra_cadiaco_atividade', 'chakra_cadiaco_afeta_glandula', 'chakra_plexo_solar_desequilibrio', 'chakra_plexo_solar_percentual', 'chakra_plexo_solar_atividade', 'chakra_plexo_solar_afeta_glandula', 'chakra_sacro_desequilibrio', 'chakra_sacro_percentual', 'chakra_sacro_atividade', 'chakra_sacro_afeta_glandula', 'chakra_basico_desequilibrio', 'chakra_basico_percentual', 'chakra_basico_atividade', 'chakra_basico_afeta_glandula', 'campo_aurico_aberto', 'campo_aurico_media', 'campo_aurico_fechado', 'campo_aurico_comentarios', 'campo_aurico2_expandido', 'campo_aurico2_media', 'campo_aurico2_encolhido', 'campo_aurico2_comentarios', 'cor_falta', 'cor_excesso', 'energia_saude'
    ];

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
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
