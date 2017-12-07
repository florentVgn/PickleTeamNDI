<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 07/12/17
 * Time: 17:59
 */

class Accueil extends CI_Controller
{
    public function index(){
        $this->load->view('accueil');
    }
}