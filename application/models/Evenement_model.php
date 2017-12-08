<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Evenement_model extends CI_Model{


    protected $table = "evenement";

    public function insert($eventData)
    {
        return $this->db->insert($this->table, $eventData);
        return $this->db->insert_id();
    }

    public function get($id)
    {
        return $this->db->join("adresse", 'evenement.id_adresse = adresse.id_adresse')->get_where($this->table,array('id'=>$id))->row();
    }

    public function getAll()
    {
        return $this->db->select("*")->join("adresse", 'evenement.id_adresse = adresse.id_adresse')->get($this->table)->result();
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