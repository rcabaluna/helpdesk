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

            if (!$userdetails) {
                $data['msgstatus'] = 'error';
            }else{
                $verifyuser = password_verify($input['password'],$userdetails['password']);
                if(!$verifyuser) {
                    $data['msgstatus'] = 'error';
                }
                else {
                    unset($userdetails['password']);
                    $this->session->set($userdetails);
                    return redirect()->to(base_url('my-requests/list')); 
                }
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
