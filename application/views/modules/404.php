<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

<div id="title">
	<h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
	<button class="dl" style="pointer-events: none">Erreur 404</button>
</div>
<div id="content">
	<div id="main">
	</div>
</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>