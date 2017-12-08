<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
        $this->load->library(["form_validation", 'session']);
        $data['head']['seo']['title'] = "Adopte un SAM - Création d'un événement";
        $data['head']['seo']['description'] = "Créer un événement permettant aux personnes responsables de rentrer en sécurité";
        $data['head']['seo']['keywords'] = "soirée, sam, creer, événement";
        $data['head']['title'] = "Création d'un événement";

        if($this->form_validation->run()) {

            $this->load->model(['evenement_model', 'adresse_model']);

            $newAdresse = array( 
                'adresse' => $this->input->post("rue_adresse_event"),
                'cp' => $this->input->post("cp_adresse_event"),
                'ville' => $this->input->post("ville_adresse_event")
            );

            $code_acces = strtoupper(substr(md5(microtime()),rand(0,26),5));

            $idAdresse = $this->adresse_model->insert($newAdresse);

            $newEvent = array(
                'nom' => $this->input->post("nom_event"),
                'date_deb' => DateTime::createFromFormat("d/m/Y", $this->input->post("date_event"))->format("Y-m-d"),
                'id_adresse' => $idAdresse,
                'code_modif' => $code_acces
            );

            $idEvent = $this->evenement_model->insert($newEvent);

            $this->load->helper("qr_code_helper");
            generate_qrc(base_url("/evenement/".$idEvent), "event-".$idEvent);

            $this->load->library('My_PHPMailer');

            $dataMail = array(
                'qrCode' => 'event-'.$idEvent,
                'nom' => $newEvent['nom'],
                'idEvent' => $idEvent,
                'date_deb' => $this->input->post("date_event"),
                'code_modif' => $newEvent['code_modif'],
            );

            $mailPHP = new PHPMailer;
            $mailPHP->isHTML(true);
            $mailPHP->CharSet = 'UTF-8';
            $mailPHP->setFrom("noreply@adopteunsam.com","AdopteUnSAM");
            $mailPHP->addAddress($this->input->post("mail"));
            $mailPHP->Subject = 'Confirmation de la création de votre événement';  

            $mailPHP->Body = $this->load->view("mail_event", $dataMail, TRUE);

            $this->session->set_flashdata("event_success", "success");

            $newdata['head']['seo']['title'] = "Adopte un SAM - Création d'un événement";
            $newdata['head']['seo']['description'] = "Créer un événement permettant aux personnes responsables de rentrer en sécurité";
            $newdata['head']['seo']['keywords'] = "soirée, sam, creer, événement";
            $newdata['head']['title'] = "Création d'un événement";
            $newdata['code_access'] = $code_acces;
            $this->load->view('creer_event', $newdata);

        } else {
            $this->load->view('creer_event', $data);
        }
    }

    public function trouver_event(){
        $this->load->helper("form");

        $data['head']['seo']['title'] = "Adopte un SAM - Création d'un événement";
        $data['head']['seo']['description'] = "Créer un événement permettant aux personnes responsables de rentrer en sécurité";
        $data['head']['seo']['keywords'] = "soirée, sam, creer, événement";
        $data['head']['title'] = "Création d'un événement";

        $this->load->view('trouver_event', $data);
    }

    public function test(){
        $dataMail = array(
            'qrCode' => 'event-1',
            'nom' => "Nuit de l'info",
            'idEvent' => "1",
            'date' => '17/02/2017',
            'code_modif' => 'E45DZE',
        );

        $this->load->view('mail_event', $dataMail);

    }

    public function my404(){
        $data['head']['seo']['title'] = "Adopte un SAM - Erreur 404";
        $data['head']['seo']['description'] = "Une erreur 404 a surgi.";
        $data['head']['seo']['keywords'] = "";
        $data['head']['title'] = "Erreur 404";

        $data["menu"]["active"] = "none";

        $this->output->set_status_header('404'); 
        $this->load->view('modules/404', $data);
    }
}