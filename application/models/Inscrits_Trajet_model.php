<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Inscrits_Trajet_model extends CI_Model{


    protected $table = "adresse";

    public function create($inscritsTrajetInfos)
    {
        return $this->db->set($inscritsTrajetInfos)
            ->insert($this->table);
    }

    public function get($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id));
    }

    public function update($champs,$donnee)
    {
        return $this->db->set($donnee)
            ->where($champs)
            ->update($this->table);
    }

    public function delete($id)
    {
        return $this->db->where($id)
            ->delete($this->table);
    }

}