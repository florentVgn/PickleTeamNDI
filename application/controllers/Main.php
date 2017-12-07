<?php

class Main extends CI_Controller
{
    public function index(){
        $this->load->view('accueil');
    }

    public function test(){
        $this->load->model('user_model');
        var_dump($this->user_model->get(0)->id);
        die;
    }
}