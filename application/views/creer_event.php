<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

<div id="title">
	<h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
	<button class="dl" style="pointer-events: none">Créer un événement</button>
</div>
<div id="content">
	<div id="main">

		<?= form_open('creer-un-evenement', ['class' => "form-vertical"]); ?>


		<div class="form-group col-md-6 col-xs-12">
			<?= form_label("Nom événement*", "nom_event", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('nom_event'))?'':'has-error' ?>"></div>
			<?= form_input(['name' => "nom_event", 'class' => "form-control"], set_value("nom_event")); ?>
			<span class="help-block"><?= form_error('nom_event'); ?></span>
		</div>

		<div class="form-group col-md-6 col-xs-12">
			<?= form_label("Date de l'événement*", "date_event", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('date_event'))?'':'has-error' ?>"></div>
			<?= form_input(['readonly' => "readonly", 'name' => "date_event", 'class' => "form-control datepicker"], set_value("date_event")); ?>
			<span class="help-block"><?= form_error('date_event'); ?></span>
		</div>

		<div class="form-group col-md-6 col-xs-12">
			<?= form_label("Adresse de l'événement*", "rue_adresse_event", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('rue_adresse_event'))?'':'has-error' ?>"></div>
			<?= form_input(['name' => "rue_adresse_event", 'class' => "form-control"], set_value("rue_adresse_event")); ?>
			<span class="help-block"><?= form_error('rue_adresse_event'); ?></span>
		</div>

		<div class="form-group col-md-2 col-xs-12">
			<?= form_label("Code postal*", "cp_adresse_event", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('cp_adresse_event'))?'':'has-error' ?>"></div>
			<?= form_input(['name' => "cp_adresse_event", 'class' => "form-control"], set_value("cp_adresse_event")); ?>
			<span class="help-block"><?= form_error('cp_adresse_event'); ?></span>
		</div>

		<div class="form-group col-md-4 col-xs-12">
			<?= form_label("Ville*", "ville_adresse_event", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('ville_adresse_event'))?'':'has-error' ?>"></div>
			<?= form_input(['name' => "ville_adresse_event", 'class' => "form-control"], set_value("ville_adresse_event")); ?>
			<span class="help-block"><?= form_error('ville_adresse_event'); ?></span>
		</div>

		<div class="form-group col-md-12 col-xs-12">
			<?= form_label("Adresse e-mail (pour recevoir le code d'accès de l'événement)*", "mail", ['class' => "col-md-12 control-label"]) ?>
			<div class="col-md-4 <?= empty(form_error('mail'))?'':'has-error' ?>"></div>
			<?= form_input(['name' => "mail", 'class' => "form-control"], set_value("mail")); ?>
			<span class="help-block"><?= form_error('mail'); ?></span>
		</div>

		<div class="form-group col-md-12 col-xs-12">
			<?= form_submit("create_event", "Envoyer", ['class'=>"article-btn", "style" => "float: unset !important;"]); ?>
		</div>



		<?= form_close(); ?>

	</div>
</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>