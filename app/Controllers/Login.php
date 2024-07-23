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
        return view('login/login');
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
