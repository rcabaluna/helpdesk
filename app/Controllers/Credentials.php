<?php

namespace App\Controllers;

use App\Models\CredentialsModel;

class Credentials extends BaseController
{

    private $credentialsModel;

    public function __construct(){
        $this->credentialsModel = new CredentialsModel();

        parent::__construct();
    }


    public function index(){

        if ($this->session->get('logged_in') == TRUE ) {
            return redirect()->to(base_url('my-requests/list')); 
        }else{
            return view('login');
        }

    }

    public function login(){
        return view('login');
    }

    public function loginProcess(){

        $input = array(  'username' => $this->request->getPost('username'),
                        'password' => $this->request->getPost('password')                
                );

               

            $userdetails = $this->credentialsModel->get_single_data_where('tblusers',array('username' => $input['username']));


            if ($userdetails['is_active'] == 1) {
                $verifyuser = password_verify($input['password'],$userdetails['password']);
                if($verifyuser) {
                    unset($userdetails['password']);
                    $userdetails['logged_in'] = true;

                    $this->session->set($userdetails);

                    echo "SUCCESS";
                }
                else {
                     //if incorrect password
                    echo "ERROR";
                    exit();
                }
            }else{
                //if account not found
                echo "ERROR";
                exit();
            }
        
    }

    public function register()
    {
        $data['division'] = $this->credentialsModel->get_all('tbldivision');
        $data['location'] = $this->credentialsModel->get_all('tbllocation');
        return view('register',$data);
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url()); 
    }
}
