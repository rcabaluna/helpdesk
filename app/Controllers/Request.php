<?php

namespace App\Controllers;

use App\Models\RequestModel;



class Request extends BaseController
{
    private $requestModel;

    public function __construct()
    {
        $this->requestModel = new RequestModel();

        parent::__construct();
    }


    public function index()
    {
        $data['division'] = $this->requestModel->get_all('tbldivision');
        $data['location'] = $this->requestModel->get_all('tbllocation');

        return view('request/main',$data);
    }

    public function getUnits()
    {
        $division = $this->request->getPost('divisionval');
        $data['unit'] = $this->requestModel->get_all_where('tblunit',array('divisioncode'=>$division));

        return view('request/get-units',$data);   
    }

    public function showStepTwo()
    {
        $data['reqtypes'] = $this->requestModel->get_all('tblrequest_types');

        return view('request/step-2',$data); 
    }    

    public function showStepThree()
    {   
        $data['requesttype'] = $this->requestModel->get_single_data_where('tblrequest_types',array('requestcode' => $this->request->getPost('requesttype')));

        return view('request/step-3',$data); 
    }    

    public function saveRequest(){

        parse_str($_POST['reqsummary'], $reqsummary);
        if ($_POST['reqdetails']) {
            parse_str($_POST['reqdetails'],$reqdetails);
        }
        if ($_POST['description']) {
            $reqdetails['description'] = $_POST['description'];
        }

     

        $countSummary = count($this->requestModel->get_all('tblrequest_summary'))+1;
        $reqsummary['documentnumber'] = date('Y').'-'.str_pad($countSummary, 4, '0', STR_PAD_LEFT);

        $insertSummary = $this->requestModel->save_request_summary('tblrequest_summary',$reqsummary);

        unset($reqdetails['photochoice']);
        $reqdetails['reqsummaryid'] = $insertSummary;

        $insertDetails = $this->requestModel->save_request_details('tblrequest_details',$reqdetails);

           var_dump($reqdetails);
        exit();     

        
        


    }
    
}
