<?php

namespace App\Controllers;

use App\Models\RequestModel;


class MyRequests extends BaseController
{
    private $requestModel; 

    public function __construct(){
        $this->requestModel = new RequestModel();

        parent::__construct();
    }


    public function list(){
        $data['reqcategory'] = $this->requestModel->get_all('tblrequest_category');
        $data['myrequests'] = $this->requestModel->get_my_requests();

        return view('my-requests/list',$data);
    }

    public function create(){
        $data['reqcategory'] = $this->requestModel->get_all('tblrequest_category');
        $data['reqtypes'] = $this->requestModel->get_all('tblrequest_types');

        return view('my-requests/create', $data);
    }

    public function getForm(){
        $requestcode = $this->request->getPost('requestcode');

        return view('my-requests/details-form/'.$requestcode);
    }

    public function generateRequestType(){
        $data['reqtypes'] = $this->requestModel->get_all_where('tblrequest_types',array('requestcategory'=>$this->request->getPost('selreqcategory')));
        
        return view('my-requests/request-types',$data);
    }

    public function saveRequest(){

        if ($_POST['reqdetails']) {
            parse_str($_POST['reqdetails'],$reqdetails);
        }
        if ($_POST['description']) {
            $reqdetails['description'] = $_POST['description'];
        }

        $reqsummary = array(
            'requestedby' => $this->session->get('userid'),
            'requestcategory' => $reqdetails['requestcategory'],
            'requestcode' => $reqdetails['requestcode'],
        );

        unset($reqdetails['requestcategory']);
        unset($reqdetails['requestcode']);

        $countSummary = count($this->requestModel->get_all('tblrequest_summary'))+1;
        $reqsummary['documentnumber'] = date('Y').'-'.str_pad($countSummary, 4, '0', STR_PAD_LEFT);
        $insertsummary = $this->requestModel->save_request_summary('tblrequest_summary',$reqsummary);

        unset($reqdetails['photochoice']);
        $reqdetails['reqsummaryid'] = $insertsummary;

        $insertdetails = $this->requestModel->save_request_details('tblrequest_details',$reqdetails);
        
        $this->session->setFlashdata('okstatus', 'true');
        echo "SUCCESS";
    }    
}
