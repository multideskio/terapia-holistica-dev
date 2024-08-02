<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index(): string
    {
        //
        $data['redirect'] = $this->request->getGet('redirect');
        return view('login/login', $data);
    }

    public function recover()
    {
        $data['titlePage'] = "";
        return view('login/recover', $data);
    }


    public function password($token = null)
    {
        if ($token) {
            $modelUser = new UsersModel();
            $row = $modelUser->where('token', $token)->first();
            if ($row) {
                $data['titlePage'] = 'Nova senha';
                $data['token'] = $token;
                return view('login/new-password', $data);
            }
        }

        $data['titlePage'] = 'Erro';
        return view('login/erro', $data);
    }



    public function auth()
    {
        try {
            $modelUser = new UsersModel();
            return $modelUser->auth($this->request->getPost());
        } catch (\Exception $e) {
            session()->setFlashdata("error", $e->getMessage());
            echo "<pre>";
            print_r($e);
        }
    }
    public function logout()
    {
        session_destroy();
        return redirect()->to('/');
    }
}
