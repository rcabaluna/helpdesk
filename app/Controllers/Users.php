<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();

        parent::__construct();
    }


    public function index()
    {
        $data['users'] = $this->usersModel->get_all_users('tblusers');
        
        return view('users/list', $data);
    }

    public function editUser(){
        $userid = $this->request->getPost('userid');
        $data['division'] = $this->usersModel->get_all('tbldivision');
        $data['location'] = $this->usersModel->get_all('tbllocation');

        $data['userdetails'] = $this->usersModel->get_single_data_where('tblusers',array('userid' => $userid));
        
        return view('users/edit-user-form', $data);
    }

    public function updateUser(){
        $userdata = $param = [];
        $input = $this->request->getPost('userdata');

        parse_str($_POST['userdata'], $userdata);
        $param['userid'] = $userdata['userid'];
        unset($userdata['userid']);

        
        
        $updateuser = $this->usersModel->update_data('tblusers',$userdata,$param);

        echo $updateuser;
    }

    public function getUnits()
    {
        $division = $this->request->getPost('divisionid');

        $data['unit'] = $this->usersModel->get_all_where('tblunit',array('divisioncode'=>$division));

        return view('users/get-units',$data);   
    }
}
