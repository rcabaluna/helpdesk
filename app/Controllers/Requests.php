<?php

namespace App\Controllers;

use App\Models\RequestModel;



class Requests extends BaseController
{
    private $requestModel;

    public function __construct(){
        $this->requestModel = new RequestModel();
        parent::__construct();
    }

    public function index(){
        $data['division'] = $this->requestModel->get_all('tbldivision');
        $data['location'] = $this->requestModel->get_all('tbllocation');
        $data['reqcategory'] = $this->requestModel->get_all('tblrequest_category');
        $data['requests'] = $this->requestModel->get_all_requests();
        
        return view('requests/list',$data);
    }

    public function getRequestDetails(){
        $input['reqsummaryid'] = $this->request->getPost('reqsummaryid');
        $data['reqsummary'] = $this->requestModel->get_request_summary($input);
        $data['reqdetails'] = $this->requestModel->get_request_details($input);
        
        return view('requests/request-details.php',$data);
    }
}
