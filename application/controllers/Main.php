<?php

class Main extends CI_Controller
{
    public function index(){
    	$data['head']['seo']['title'] = "Adopte un SAM by THE PICKLE TEAM";
    	$data['head']['seo']['description'] = "Le moyen sûr de rentrer après une soirée";
    	$data['head']['seo']['keywords'] = "soirée, sam";
    	$data['head']['title'] = "Accueil";

        $this->load->view('accueil', $data);
    }

    public function proposer_trajet(){
        $data['head']['seo']['title'] = "Adopte un SAM by THE PICKLE TEAM";
        $data['head']['seo']['description'] = "Le moyen sûr de rentrer après une soirée";
        $data['head']['seo']['keywords'] = "soirée, sam";
        $data['head']['title'] = "Accueil";

        $this->load->view('proposer_trajet', $data);
    }

    public function creer_event(){
        $this->load->helper("form");
        $this->load->library("form_validation");
        $data['head']['seo']['title'] = "Adopte un SAM - Création d'un événement";
        $data['head']['seo']['description'] = "Créer un événement permettant aux personnes responsables de rentrer en sécurité";
        $data['head']['seo']['keywords'] = "soirée, sam, creer, événement";
        $data['head']['title'] = "Création d'un événement";

        if($this->form_validation->run()) {

            var_dump($this->input->post());die;

            $this->load->model(['evenement_model', 'adresse_model']);

            $newAdresse = array( 
                'rue' => $this->input->post("rue_adresse_event"),
                'cp' => $this->input->post("cp_adresse_event"),
                'ville' => $this->input->post("ville_adresse_event")
            );

            $code_acces = strtoupper(substr(md5(microtime()),rand(0,26),5));

            $idAdresse = $this->adresse_model->insert($newAdresse);

            $newEvent = array(
                'nom' => $this->input->post("nom_event"),
                'date' => DateTime::createFromFormat("d/m/Y", $this->input->post("date_event"))->format("Y-m-d"),
                'adresse' => $idAdresse,
                'code_acces' => $code_acces
            );

            $this->evenement_model->insert($newEvent);

            // envoi du mail et affichage retour success du code;


        } else {
            $this->load->view('creer_event', $data);
        }
    }

    public function test(){
        $this->load->model('user_model');
        var_dump($this->user_model->get(0)->id);
        die;
    }
}