<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class User_model extends CI_Model
{
    protected $table = 'user';

    public function get($id){

        return $this->db->get_where($this->table, array('id'=>$id))->row();
    }


}