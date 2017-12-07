<?php

class Main extends CI_Controller
{
    public function index(){

    	$data['head']['seo']['title'] = "Adopte un SAM by THE PICKLE TEAM";
    	$data['head']['seo']['description'] = "Le moyen sûr de rentrer après une soirée";
    	$data['head']['seo']['keywords'] = "soirée, sam, ";
    	$data['head']['title'] = "Accueil";

        $this->load->view('accueil', $data);
    }

    public function test(){
        $this->load->model('user_model');
        var_dump($this->user_model->get(0)->id);
        die;
    }
}