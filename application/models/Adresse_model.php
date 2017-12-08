<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adresse_model extends CI_Model{


    protected $table = "adresse";

    public function insert($adresseData)
    {
        $this->db->insert($this->table, $adresseData);
        return $this->db->insert_id();
    }

    public function get($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id));
    }

    public function getAllVilles()
    {
        return $this->db->select("ville")->group_by("ville")->get($this->table)->result();
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