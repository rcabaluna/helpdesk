<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model
{
    // GET ALL DETAILS WITHOUT CONDITION 
    public function get_all($tablename){
        $builder = $this->db->table($tablename);
        $builder = $builder->get();

        return $builder->getResultArray();
    }

    public function get_all_requests(){
        $builder = $this->db->table('tblrequest_summary a');
        $builder->select('a.*,b.name as reqtypename, c.name as reqcatname,d.*');
        $builder->join('tblrequest_types b', 'b.requestcode = a.requestcode', 'left');
        $builder->join('tblrequest_category c', 'c.name = b.requestcategory', 'left');
        $builder->join('tblusers d', 'd.userid = a.requestedby', 'left');
        $builder->orderBy('date_created','DESC');
        $builder = $builder->get();

        return $builder->getResultArray();
    }

    public function get_all_where($tablename,$param){
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getResultArray();
    }

    public function get_my_requests(){
        $builder = $this->db->table('tblrequest_summary a');
        $builder->select('a.*,b.name as reqtypename, c.name as reqcatname');
        $builder->join('tblrequest_types b', 'b.requestcode = a.requestcode', 'left');
        $builder->join('tblrequest_category c', 'c.name = b.requestcategory', 'left');
        $builder->where(array('a.requestedby' => session()->get('userid')));
        $builder->orderBy('date_created','DESC');
        $builder = $builder->get();

        return $builder->getResultArray();
    }


    public function get_single_data_where($tablename,$param){
        $builder = $this->db->table($tablename);
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getRowArray();
    }

    public function save_request_summary($tablename,$data){
        try {
            $this->db->transStart();
                $builder = $this->db->table($tablename);
                $builder->insert($data);

                $last_inserted_id = $this->db->insertID();
            $this->db->transComplete();
                return $last_inserted_id;

        } catch (\Exception $e) {
            $this->db->transRollback();
            die($e->getMessage());
        }
    }

    public function save_request_details($tablename,$data){
        try {
            $this->db->transStart();
                $builder = $this->db->table($tablename);
                $builder->insert($data);   
                
                $last_inserted_id = $this->db->insertID();        
            $this->db->transComplete();
                return "SUCCESS";

        } catch (\Exception $e) {
            $this->db->transRollback();
            die($e->getMessage());
        }   
    }

    //REQUESTS

    public function get_request_summary($param){
        $builder = $this->db->table('tblrequest_summary a');
        $builder->select('a.*,b.name as reqtypename, c.name as reqcatname,d.*');
        $builder->join('tblrequest_types b', 'b.requestcode = a.requestcode', 'left');
        $builder->join('tblrequest_category c', 'c.name = b.requestcategory', 'left');
        $builder->join('tblusers d', 'd.userid = a.requestedby', 'left');
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getRowArray();
    }

    public function get_request_details($param){
        $builder = $this->db->table('tblrequest_details');
        $builder->where($param);
        $builder = $builder->get();

        return $builder->getRowArray();
    }
}