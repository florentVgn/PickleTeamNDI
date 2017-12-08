<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

$config = array(
	'Main/creer_event' => array(
		array(
			'field' => 'nom_event',
			'label' => "nom de l'événement",
			'rules' => 'required'
		),
		array(
			'field' => 'date_event',
			'label' => "date de l'événement",
			'rules' => 'required'
		),
		array(
			'field' => 'rue_adresse_event',
			'label' => "rue de l'événement",
			'rules' => 'required'
		),
		array(
			'field' => 'cp_adresse_event',
			'label' => "code postal de l'événement",
			'rules' => array('required', 'regex_match[/^(([0-8][0-9])|(9[0-5])|(2[ab]))[0-9]{3}$/]'),
			'errors' => array(
				'regex_match' => "Le format du code postal n'est pas bon.",
			)
		),
		array(
			'field' => 'ville_adresse_event',
			'label' => "ville de l'événement",
			'rules' => 'required'
		),
		array(
			'field' => 'mail',
			'label' => "mail",
			'rules' => array('required', 'valid_email')
		)
	)
)

?>
