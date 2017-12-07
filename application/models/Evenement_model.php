<?php

class Evenement_model extends CI_Model{


    protected $table = "adresse";

    public function create($EvenementInfos)
    {
        return $this->db->set($EvenementInfos)
            ->insert($this->table);
    }

    public function get($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id));
    }

    public function getAll()
    {
        return $this->db->get($this->table);
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