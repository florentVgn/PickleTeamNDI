<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

<div id="title">
	<h1>Devenir SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
	<button class="dl">Trouver un covoiturage dès maintenant !</button>
</div>
<div id="content">
	<div id="main">
		<article class="first">
			<h2> Proposer un covoiturage en tant que SAM </h2>
				<input class="recherche" placeholder="Lieu de départ ?" ><br>
				<input class="recherche" placeholder="Prénom ?" ><br>
				<input class="recherche" placeholder="Téléphone ?" ><br>
				<input class="recherche" placeholder="Véhicule ?" ><br>
				<button class="join">Envoyer</button>
		</article>
		
	</div>
</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>
