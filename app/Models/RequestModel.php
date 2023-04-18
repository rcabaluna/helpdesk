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

    public function get_all_where($tablename,$param){
        $builder = $this->db->table($tablename);
        $builder->where($param);
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
                return $last_inserted_id;

        } catch (\Exception $e) {
            $this->db->transRollback();
            die($e->getMessage());
        }
        
    }
}