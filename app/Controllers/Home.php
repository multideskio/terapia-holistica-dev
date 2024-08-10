<?php

namespace App\Controllers;

use App\Libraries\EmailsLibraries;
use App\Models\AnamnesesModel;

class Home extends BaseController
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

    public function clientes()
    {
        $modelAnamnese = new AnamnesesModel();

        $data['titlePage'] = $this->lastSegment;;

        return view('dashboard/tp/pages/listaClientes', $data);
    }

    public function anamnese($slug = null)
    {
        $modelAnamnese = new AnamnesesModel();

        return view('anamnese/ficha');
    }



    public function teste()
    {
        $email = new EmailsLibraries;

        return $email->testarEnvioEmail('igrsysten@gmail.com', 'Assunto teste', 'Isso é um teste');
    }
}
