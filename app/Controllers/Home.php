<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $lastSegment ;
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
        return view('dashboard/pages/home', $data);
    }
}
