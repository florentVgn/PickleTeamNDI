<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

	<div id="title">
		<h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
		<button class="dl">Trouver un covoiturage dès maintenant !</button>
	</div>
	<div id="content">
		<div id="main">
			<article class="first">
				<input class="recherche" placeholder="Lieu de départ ?">
				<button class="join">Envoyer</button>
			</article>
			<article>
				<h2>Départ dans 15 minutes<span class="date">proposé par Axelle</span></h2>
				<p>Départ : SEVEN DISCOTHEQUE <br> Arrivée : IUT VALENCE<br>Véhicule: FERRARI</p>
				<button class="join">Rejoindre</button>
			</article>
			<article>
				<h2>Départ dans 15 minutes<span class="date">proposé par Axelle</span></h2>
				<p>Départ : SEVEN DISCOTHEQUE <br> Arrivée : IUT VALENCE<br>Véhicule: FERRARI</p>
				<button class="join">Rejoindre</button>
			</article>
		</div>
		<div id="who">
			<article>
				<h2>Trouvez un véhicule facilement</h2>
				<button class="join big">Scanner un QR CODE</button>
			</article>
		</div>
	</div>

<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>
