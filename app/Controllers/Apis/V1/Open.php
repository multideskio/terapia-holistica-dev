<?php

namespace App\Controllers\Apis\V1;

use App\Libraries\EmailsLibraries;
use App\Models\AnamnesesModel;
use App\Models\LogsModel;
use App\Models\UsersModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Open extends ResourceController
{
    use ResponseTrait;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    protected $modelUser;
    protected $modelAnamnese;

    public function __construct()
    {

        $this->modelUser = new UsersModel();
        $this->modelAnamnese = new AnamnesesModel();
    }
    public function index()
    {
        //
    }

    public function searchAnamnese($slug)
    {
        try {
            $data = $this->modelAnamnese->searchOpen($slug);
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    public function recoverPass()
    {

        if (!$this->request->isAJAX()) {
            return $this->failUnauthorized();
        }

        $input   = $this->request->getPost();
        //VERIFICA SE EXISTE CADASTRO DO USUÁRIO
        $build   = $this->modelUser->where('email', $input['email'])->first();

        if ($build) {
            //Envio de e-mail
            $sendEmail = [
                'token' => $build['token']
            ];
            $email   = new EmailsLibraries;
            $message = view('emails/recover', $build);
            $email->send($input['email'], 'Recuperação de conta', $message);

            $modelLogs = new LogsModel();
            $modelLogs->insert([
                'platformId' => 1,
                'idUser' => $build['id'],
                'type' => 'user_recover',
                'description' => 'Pedido de recuperação de conta'
            ]);

            return $this->respond($build);
        }

        return $this->failNotFound();
    }

    public function newpass()
    {
        /*if (!$this->request->isAJAX()) {
            return $this->failUnauthorized();
        }*/

        $input   = $this->request->getPost();

        //VERIFICA SE EXISTE CADASTRO DO USUÁRIO
        $build   = $this->modelUser->where('token', $input['token'])->first();

        if ($build) {
            $data = [
                'password' => $input['senha']
            ];
            $update = $this->modelUser->update($build['id'], $data);
            return $this->respondUpdated($update);
        }

        return $this->failNotFound();
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
