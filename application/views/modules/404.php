<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

	<script src="<?= base_url('/assets/js/404Game/p5.js') ?>"></script>
	<script src="<?= base_url('/assets/js/404Game/p5.dom.js') ?>"></script>
	<script src="<?= base_url('/assets/js/404Game/p5.sound.js') ?>"></script>
	<script src="<?= base_url('/assets/js/404Game/Car.js') ?>"></script>
	<script src="<?= base_url('/assets/js/404Game/Beer.js') ?>"></script>
	<script src="<?= base_url('/assets/js/404Game/carGame.js') ?>"></script>

<div id="title">
	<h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
	<button class="dl" style="pointer-events: none">Erreur 404</button>
</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>
