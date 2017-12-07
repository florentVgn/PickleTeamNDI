<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 07/12/17
 * Time: 21:23
 */

class User_model extends CI_Model
{
    protected $table = 'user';

    public function get($id){

        return $this->db->get_where($this->table, array('id'=>$id))->row();
    }


}