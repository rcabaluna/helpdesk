<?php

namespace App\Controllers;

use App\Models\CredentialsModel;

class Credentials extends BaseController
{

    private $credentialsModel;

    public function __construct()
    {
        $this->credentialsModel = new CredentialsModel();

        parent::__construct();
    }


    public function index()
    {
        $data['msgstatus'] = '';

        return view('login',$data);
    }

    public function login()
    {
        $data['msgstatus'] = '';
        if ($_POST) {
            $input = $this->request->getPost();

            $userdetails = $this->credentialsModel->get_single_data_where('tblusers',array('username' => $input['username']));

            if ($userdetails) {
                $verifyuser = password_verify($input['password'],$userdetails['password']);
                if(!$verifyuser) {
                    $data['msgstatus'] = 'error';
                }
                else {
                    unset($userdetails['password']);

                    $newdata = [
                        'username'  => 'johndoe',
                        'email'     => 'johndoe@some-site.com',
                        'logged_in' => TRUE
                    ];
                    $this->session->set($newdata);

                    var_dump($this->session->get());
                    exit();

                    return redirect()->to(base_url('my-requests/list')); 
                }
            }else{
                $data['msgstatus'] = 'error';
            }
        }
        
        return view('login',$data);
    }

    public function register()
    {
        $data['division'] = $this->credentialsModel->get_all('tbldivision');
        $data['location'] = $this->credentialsModel->get_all('tbllocation');
        return view('register',$data);
    }
}
