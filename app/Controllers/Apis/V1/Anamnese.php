<?php

namespace App\Controllers\Apis\V1;

use App\Models\AnamnesesModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Anamnese extends ResourceController
{
    use ResponseTrait;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    protected $modelAnamnese ;
    protected $request;

    public function __construct()
    {
        $this->request = service('request');

        $this->modelAnamnese = new AnamnesesModel();
    }
    public function index()
    {
        //
        return $this->respond([]);
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
        $input = $this->request->getPost();


        $data = [
            'id_user' => $input['idPatient'],
            'mental_imbalance' => $input['mentalDesequilibrio'],
            'mental_percentage' => $input['mentalPercentual'],
            'emotional_imbalance' => $input['emocionalDesequilibrio'],
            'emotional_percentage' => $input['emocionalPercentual'],
            'spiritual_imbalance' => $input['espiritualDesequilibrio'],
            'spiritual_percentage' => $input['espiritualPercentual'],
            'physical_imbalance' => $input['fisicoDesequilibrio'],
            'physical_percentage' => $input['fisicoPercentual'],
            'coronary_chakra_imbalance' => $input['chakraCoronarioDesiquilibrio'],
            'coronary_chakra_percentage' => $input['chakraCoronarioPercentual'],
            'coronary_chakra_activity' => $input['chakraCoronarioAtividade'],
            'coronary_chakra_affects_organ' => $input['chakraCoronarioOrgao'],
            'frontal_chakra_imbalance' => $input['chakraFrontalDesiquilobrio'],
            'frontal_chakra_percentage' => $input['chakraFrontalPercentual'],
            'frontal_chakra_activity' => $input['chakraFrontalAtividade'],
            'frontal_chakra_affects_organ' => $input['chakraFrontalOrgao'],
            'laryngeal_chakra_imbalance' => $input['chakraLaringeoDesiquilobrio'],
            'laryngeal_chakra_percentage' => $input['chakraLaringeoPercentual'],
            'laryngeal_chakra_activity' => $input['chakraLaringeoAtividade'],
            'laryngeal_chakra_affects_organ' => $input['chakraLaringeoOrgao'],
            'cardiac_chakra_imbalance' => $input['chakraCardiacoDesiquilobrio'],
            'cardiac_chakra_percentage' => $input['chakraCardiacoPercentual'],
            'cardiac_chakra_activity' => $input['chakraCardiacoAtividade'],
            'cardiac_chakra_affects_organ' => $input['chakraCardiacoOrgao'],
            'solar_plexus_chakra_imbalance' => $input['chakraPlexoSolarDesiquilobrio'],
            'solar_plexus_chakra_percentage' => $input['chakraPlexoSolarPercentual'],
            'solar_plexus_chakra_activity' => $input['chakraPlexoSolarAtividade'],
            'solar_plexus_chakra_affects_organ' => $input['chakraPlexoSolarOrgao'],
            'sacral_chakra_imbalance' => $input['chakraSacroDesiquilobrio'],
            'sacral_chakra_percentage' => $input['chakraSacroPercentual'],
            'sacral_chakra_activity' => $input['chakraSacroAtividade'],
            'sacral_chakra_affects_organ' => $input['chakraSacroOrgao'],
            'base_chakra_imbalance' => $input['chakraBasicoDesiquilobrio'],
            'base_chakra_percentage' => $input['chakraBasicoPercentual'],
            'base_chakra_activity' => $input['chakraBasicoAtividade'],
            'base_chakra_affects_organ' => $input['chakraBasicoOrgao'],
            'aura_size' => $input['tamanhoAura'],
            'aura_size_comments' => $input['tamanhoAuraComments'],
            'opening_size' => $input['tamanhoAbertura'],
            'opening_size_comments' => $input['tamanhoAberturaComments'],
            'color_lack' => implode(', ', $input['corFalta']),
            'color_excess' => implode(', ', $input['corExcesso']),
            'health_energy' => $input['energia'],
            'energy_comments' => $input['energiaComments'],
            'family_area' => $input['areasFamiliar'],
            'affective_area' => $input['areasAfetivo'],
            'professional_area' => $input['areasProfissional'],
            'financial_area' => $input['areasFinanceiro'],
            'mission_area' => $input['areasMissao']
        ];
        

        return $this->respond($data);
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
