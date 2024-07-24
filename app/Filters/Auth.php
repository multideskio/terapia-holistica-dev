<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!isset(session('data')['isConnected'])) {
            helper('url');
            // Se não estiver conectado, defina uma mensagem de erro na sessão flash
            session()->setFlashdata("error", 'Conect-se novamente');
            // Obtenha a URL atual
            $href = current_url();
            // Redirecione para a página de login com o parâmetro de consulta 'redirect' contendo a URL atual
            return redirect()->to(site_url("?redirect={$href}"));
        }

        // Se o usuário estiver conectado, continue com a execução normal
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
