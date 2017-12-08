<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Evenement_model extends CI_Model{


    protected $table = "adresse";

    public function insert($eventData)
    {
        return $this->db->insert($this->table, $eventData);
    }

    public function get($id)
    {
        return $this->db->get_where($this->table,array('id'=>$id))->row();
    }

    public function getAll()
    {
        return $this->db->get($this->table)->results();
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