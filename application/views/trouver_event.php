<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

<div id="title">
	<h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
	<button class="dl" style="pointer-events: none">Trouver un événement</button>
</div>
<div id="content">
	<div id="main">

		<?= form_open('creer-un-evenement', ['class' => "form-vertical"]); ?>


		<div class="form-group col-md-6 col-xs-12">
			<?= form_label("Ville de l'événement", "ville_event", ['class' => "select2 col-md-12 control-label"]) ?>
			<?= form_dropdown(['name' => "ville_event", 'class' => "form-control"], set_value("")); ?>

		</div>

		<?= form_close(); ?>

	</div>
</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>