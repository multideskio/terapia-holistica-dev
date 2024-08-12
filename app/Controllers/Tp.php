<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Tp extends BaseController
{
    protected $lastSegment;
    public function __construct()
    {
        $request           = service('request');
        $uri               = $request->getUri();
        $totalSegments     = $uri->getTotalSegments(); // Obtém o número total de segmentos
        $this->lastSegment = ucfirst($uri->getSegment($totalSegments)); // Obtém o último segmento
    }
    public function index(): string
    {
        $data['titlePage'] = $this->lastSegment;;
        return view('dashboard/tp/pages/dashboard', $data);
    }

    public function clientes($id=null)
    {

        $data['titlePage'] = $this->lastSegment;;
        return view('dashboard/tp/pages/listaClientes', $data);
    }

    public function agendados()
    {
        //$modelAnamnese = new AnamnesesModel();
        $data['titlePage'] = $this->lastSegment;
        return view('dashboard/tp/pages/listAgendamentos', $data);

    }

    public function gerarAnamnese($id = null)
    {
        //$modelAnamnese = new AnamnesesModel();
        $data['idPatientControl'] = $id;
        $data['titlePage'] = $this->lastSegment;

       
        
        return view('dashboard/tp/pages/anamnese', $data);;
    }

}
