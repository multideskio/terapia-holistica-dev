<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Ts extends BaseController
{
    protected $lastSegment ;
    public function __construct()
    {
        $request           = service('request');
        $uri               = $request->getUri();
        $totalSegments     = $uri->getTotalSegments(); // Obtém o número total de segmentos
        $this->lastSegment = ucfirst($uri->getSegment($totalSegments)); // Obtém o último segmento
    }

    public function timeLine(){
        $data['titlePage'] = 'Time Line';
        return view('dashboard/ts/pages/timeline', $data);
    }

    public function anamnese($id = null){
        $data['idPatientControl'] = session('data')['patient'];
        $data['titlePage'] = 'ANAMNESE';
        return view('dashboard/ts/pages/anamnese', $data);
    }
}
