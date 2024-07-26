<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index():string
    {
        //
        $data['redirect'] = $this->request->getGet('redirect');
        return view('login/login', $data);
    }

    public function recover(){
        $data['titlePage'] = "";
        $data['redirect'] = $this->request->getGet('redirect');
        return view('login/recover', $data);
    }

    public function auth(){
        try{
            $modelUser = new UsersModel();
            return $modelUser->auth($this->request->getPost());

        }catch(\Exception $e){
            echo "<pre>";
            print_r($e);
        }
    }
    public function logout(){
        session_destroy();
        return redirect()->to('/');
    }
}
