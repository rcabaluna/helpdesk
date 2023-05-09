<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    // GET ALL DETAILS WITHOUT CONDITION 
    public function get_all_users($tablename){
        $builder = $this->db->table($tablename);
        $builder->orderBy('userid','DESC');
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

    public function get_all($tablename){
        $builder = $this->db->table($tablename);
        $builder = $builder->get();

        return $builder->getResultArray();
    }

    public function update_data($tablename,$data,$params){

            $builder = $this->db->table($tablename);
            $builder->set($data);
            $builder->where($params);
            $builder->update();

            return "SUCCESS";


    }

}