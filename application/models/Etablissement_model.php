<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Etablissement_model extends CI_Model{


    protected $table = "etablissment";

    public function create($etablissementInfos)
    {
        return $this->db->set($etablissementInfos)
            ->insert($this->table);
    }

    public function read($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id))->row();
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