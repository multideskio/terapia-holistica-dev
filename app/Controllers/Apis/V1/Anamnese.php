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
    protected $modelAnamnese;
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
        // Obtenha os dados da solicitação
        $input = $this->request->getPost();

        // Defina as regras de validação
        $rules = [
            'idPatient' => 'required|integer',
            'mentalDesequilibrio' => 'required|in_list[sim,não]',
            'mentalPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'emocionalDesequilibrio' => 'required|in_list[sim,não]',
            'emocionalPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'espiritualDesequilibrio' => 'required|in_list[sim,não]',
            'espiritualPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'fisicoDesequilibrio' => 'required|in_list[sim,não]',
            'fisicoPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraCoronarioDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraCoronarioPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraCoronarioAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraCoronarioOrgao' => 'required|in_list[sim,não]',
            'chakraFrontalDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraFrontalPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraFrontalAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraFrontalOrgao' => 'required|in_list[sim,não]',
            'chakraLaringeoDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraLaringeoPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraLaringeoAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraLaringeoOrgao' => 'required|in_list[sim,não]',
            'chakraCardiacoDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraCardiacoPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraCardiacoAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraCardiacoOrgao' => 'required|in_list[sim,não]',
            'chakraPlexoSolarDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraPlexoSolarPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraPlexoSolarAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraPlexoSolarOrgao' => 'required|in_list[sim,não]',
            'chakraSacroDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraSacroPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraSacroAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraSacroOrgao' => 'required|in_list[sim,não]',
            'chakraBasicoDesiquilibrio' => 'required|in_list[sim,não]',
            'chakraBasicoPercentual' => 'required|integer|greater_than_equal_to[0]|less_than_equal_to[100]',
            'chakraBasicoAtividade' => 'required|in_list[HIPO, HIPER]',
            'chakraBasicoOrgao' => 'required|in_list[sim,não]',
            'tamanhoAura' => 'required|integer|greater_than_equal_to[0]',
            'tamanhoAbertura' => 'required|integer|greater_than_equal_to[0]',
            'corFalta' => 'required',
            'corExcesso' => 'required',
            'energia' => 'required|integer|greater_than_equal_to[0]',
            'areasFamiliar' => 'required|in_list[pessimo,muito mal,mal,regular,bom,muito bom,excelente]',
            'areasAfetivo' => 'required|in_list[pessimo,muito mal,mal,regular,bom,muito bom,excelente]',
            'areasProfissional' => 'required|in_list[pessimo,muito mal,mal,regular,bom,muito bom,excelente]',
            'areasFinanceiro' => 'required|in_list[pessimo,muito mal,mal,regular,bom,muito bom,excelente]',
            'areasMissao' => 'required|in_list[pessimo,muito mal,mal,regular,bom,muito bom,excelente]',
        ];

        // Configura as mensagens de erro personalizadas
        $messages = [
            'required' => 'O campo {field} é obrigatório.',
            'in_list' => 'O valor para o campo {field} deve ser um dos seguintes: {param}.',
            'integer' => 'O campo {field} deve ser um número inteiro.',
            'greater_than_equal_to' => 'O campo {field} deve ser maior ou igual a {param}.',
            'less_than_equal_to' => 'O campo {field} deve ser menor ou igual a {param}.',
            'array' => 'O campo {field} deve ser uma lista.'
        ];

        // Configura a validação
        $validation = \Config\Services::validation();

        // Verifica se a validação falha
        if (!$validation->setRules($rules, $messages)->run($input)) {
            // Obtenha os erros de validação
            $errors = $validation->getErrors();
            // Retorna os erros como uma resposta de erro
            return $this->failValidationErrors([$errors, $input]);
        }

        // Prepara os dados para inserção
        $data = [
            'id_user' => $input['idPatient'],
            'id_customer' => $input['idPatient'],
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
            'frontal_chakra_imbalance' => $input['chakraFrontalDesiquilibrio'],
            'frontal_chakra_percentage' => $input['chakraFrontalPercentual'],
            'frontal_chakra_activity' => $input['chakraFrontalAtividade'],
            'frontal_chakra_affects_organ' => $input['chakraFrontalOrgao'],
            'laryngeal_chakra_imbalance' => $input['chakraLaringeoDesiquilibrio'],
            'laryngeal_chakra_percentage' => $input['chakraLaringeoPercentual'],
            'laryngeal_chakra_activity' => $input['chakraLaringeoAtividade'],
            'laryngeal_chakra_affects_organ' => $input['chakraLaringeoOrgao'],
            'cardiac_chakra_imbalance' => $input['chakraCardiacoDesiquilibrio'],
            'cardiac_chakra_percentage' => $input['chakraCardiacoPercentual'],
            'cardiac_chakra_activity' => $input['chakraCardiacoAtividade'],
            'cardiac_chakra_affects_organ' => $input['chakraCardiacoOrgao'],
            'solar_plexus_chakra_imbalance' => $input['chakraPlexoSolarDesiquilibrio'],
            'solar_plexus_chakra_percentage' => $input['chakraPlexoSolarPercentual'],
            'solar_plexus_chakra_activity' => $input['chakraPlexoSolarAtividade'],
            'solar_plexus_chakra_affects_organ' => $input['chakraPlexoSolarOrgao'],
            'sacral_chakra_imbalance' => $input['chakraSacroDesiquilibrio'],
            'sacral_chakra_percentage' => $input['chakraSacroPercentual'],
            'sacral_chakra_activity' => $input['chakraSacroAtividade'],
            'sacral_chakra_affects_organ' => $input['chakraSacroOrgao'],
            'base_chakra_imbalance' => $input['chakraBasicoDesiquilibrio'],
            'base_chakra_percentage' => $input['chakraBasicoPercentual'],
            'base_chakra_activity' => $input['chakraBasicoAtividade'],
            'base_chakra_affects_organ' => $input['chakraBasicoOrgao'],
            'aura_size' => $input['tamanhoAura'],
            'aura_size_comments' => $input['tamanhoAuraComments'] ?? '',
            'opening_size' => $input['tamanhoAbertura'],
            'opening_size_comments' => $input['tamanhoAberturaComments'] ?? '',
            'color_lack' => implode(', ', $input['corFalta']),
            'color_excess' => implode(', ', $input['corExcesso']),
            'health_energy' => $input['energia'],
            'energy_comments' => $input['energiaComments'] ?? '',
            'family_area' => $input['areasFamiliar'],
            'affective_area' => $input['areasAfetivo'],
            'professional_area' => $input['areasProfissional'],
            'financial_area' => $input['areasFinanceiro'],
            'mission_area' => $input['areasMissao']
        ];


        $this->modelAnamnese->insert($data);

        // Aqui você pode inserir os dados no banco de dados

        // Retorna uma resposta de sucesso
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
