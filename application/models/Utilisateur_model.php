<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Utilisateur_model extends CI_Model{


    protected $table = "utilisateur";

    public function create($utilisateurInfos)
    {
        return $this->db->set($utilisateurInfos)
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