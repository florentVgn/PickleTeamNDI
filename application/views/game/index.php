<!DOCTYPE html>
<html>
<head>
	<title>TestDeReactivité</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Nunito+Sans|Reenie+Beanie|Roboto|Sue+Ellen+Francisco" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body, html{
			padding:0;
			font-family: 'Montserrat', sans-serif;
			margin:0;

			background-color: red;
			overflow:hidden;
		}

		.main{
			background-color:#1e1f21;
		}

		img{
			width:100px;
			position:absolute;
			cursor:pointer;

			outline:none;
		}

		button{
			cursor: pointer;
			margin-top: 50vh; /* poussé de la moitié de hauteur de viewport */
			transform: translateY(-50%); /* tiré de la moitié de sa propre hauteur */

			font-family: 'Montserrat', sans-serif;
			width:100%;
			font-size:3em;

			outline: 0;

			color:#ED8C2B;

 			border:solid 0px transparent;
 			background-color:transparent;
 			padding:3%;
		}

		header{
			position:fixed;
			top:0;
			left:0;
			padding:1%;
			width:98%;
			height:50px;
			text-align:left;
			color:white;
			font-size:1.4em;
		}

		.heart{
			width:50px;
			position:fixed;
		}

		.score{
			position:fixed;
			top:75px;
			left:10px;
			width:50%;
			color:white;
			text-align:left;
			font-size:1.9em;
		}

		.points{
			color:rgba(0,255,0,0.9);
			position:absolute;
			font-size:2.5em;
			text-shadow:0px 0px 10px rgba(0,255,0,0.5);
		}
	</style>
</head>
<body>
	<header></header>
	<div class="score"></div>
	<div class="main">
		<button class="play"><b>CLIQUEZ</b> POUR JOUER</button>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>	
	<script type="text/javascript">

		// Constantes
		var largeur = $(document).width()-1;
		var longeur = $(document).height()-1;

		var tailleImage = 100;

		var xSpawn = largeur/2 - tailleImage/2;
		var ySpawn = longeur/2 - tailleImage/2;

		var main = $('.main');
		
		// init //

		main.css('height', longeur+'px');
		main.css('width', largeur+'px');

		function rand(min, max) {
    		var result = Math.round(Math.random() * (max) + min);
    		return result;
		}

		function hurt(){
			$('.main').fadeOut(40);
			$('.main').fadeIn(40);
		}

		$(document).on('click', 'img', function(e){
			typeBoisson = $(this).attr('type');
	
			// Time managing //			
			var timeWhenDestructed = new Date().getTime();
			var timeLived = timeWhenDestructed - $(this).attr('born');
			player.tempsReaction.push(timeLived/1000);

			// Type managing //
			if(typeBoisson == 'biere'){
				player.vies--;
				hurt();
			}

			if(typeBoisson == 'eau'){
				// Il a cliqué le champion //
				player.hasToClick = false;
				var x = e.pageX + 20;
    			var y = e.pageY + 20;
    			player.score++;
    			$('.main').append('<div style="left: '+x+'px; top:'+y+'px;" class="points">+1</div>');
			}

			player.render();
			$(this).remove();
		});


		var position = function(){
			this.x = rand(tailleImage, largeur-tailleImage*2);
			this.y = rand(tailleImage, longeur-tailleImage*2);
		}

		var biere = function(){
			this.image = "<?= base_url("/assets/game/pint.png") ?>";
			this.timeWhenCreated = new Date().getTime();
			this.position = new position();
			
			this.render = function(){
				$('.main').html('');
				$('.main').append('<img type="biere" born="'+this.timeWhenCreated+'" style="top:'+this.position.y+'px; left:'+this.position.x+'px;" src="'+this.image+'">');
			}
		}

		var eau = function(){
			this.image = '<?= base_url("/assets/game/glass.png") ?>';
			this.timeWhenCreated = new Date().getTime();
			this.position = new position();

			this.render = function(){
				$('.main').html('');
				$('.main').append('<img type="eau" born="'+this.timeWhenCreated+'" style="top:'+this.position.y+'px; left:'+this.position.x+'px;" src="'+this.image+'">');
			}
		}

		var player = function(){
			this.vies = 3;
			// pur bg
			this.score = 0;
			this.tempsReaction = [];
			this.speed = 1801;
			this.hasToClick = false;
			
			this.renderLife = function(){
				$('header').html('');
				for(var i = 0; i < this.vies; i++){
					$('header').append('<img class="heart" style="left:'+50*i+'px;" src="<?= base_url("/assets/game/heart.svg") ?>">');
				}
			}

			this.renderScore = function(){
				$('.score').html('SCORE: '+this.score);
			}

			this.renderAVGTime = function(){
				$('.score').append("<br>Temps de réaction moyen: "+this.getReactTime()+"s");
			}
			
			this.render = function(){
				this.renderLife();
				this.renderScore();
				this.renderAVGTime();
			}

			this.getReactTime = function(){
				var avgTemps = 0;
				if(this.tempsReaction.length == 0)
					return 0;
				else{
					for(var i = 0; i < this.tempsReaction.length; i++){
						avgTemps+= this.tempsReaction[i];
					}
					return Math.round(avgTemps/this.tempsReaction.length*100)/100;
				}
			}

			this.incrementScore = function(){
				this.score++;
			}
		}

		$('.play').on('click',function(){
			initGame();
			play();
		});

		var player;

		function initGame(){
			$('button').remove();
			player = new player();	
			$('.score').html('0');

		}

		var decrementPlayerSpeed = setInterval(decrementSpeedOfPlayer, 2000);

		function decrementSpeedOfPlayer(){
			if(player.speed > 400){
				// alert(player.speed);
				player.speed = player.speed-40;
			}
			else{
				window.clearInterval(decrementPlayerSpeed);
			}
		}

		// Global : check on it!
		var itemToAppend;

		function play(){
			// False de base : set à false si clic sur eau
			if(player.hasToClick == true){
				player.vies--;
				hurt();
			}

			var randomNumber = Math.random();

			if(randomNumber > 0.6){
				itemToAppend = new biere();
				player.hasToClick = false;
			}
			else{
				itemToAppend = new eau();
				player.hasToClick = true;
			}

			player.render();
			itemToAppend.render();
			
			if(player.vies > 0 && player.score < 10){
				setTimeout(play, player.speed);
			}
			else{
				$('.main').html('');
				window.clearInterval(decrementPlayerSpeed);
				if(player.score >= 10){
					reactTime = player.getReactTime();
					if(reactTime <= 0.9)
						alert('Vous semblez en pleine forme! ;)');
					else if(reactTime > 0.9)
						alert('Vous êtes en forme mais vous pouvez mieux faire! :)');
					window.location.replace("/main/proposer_trajet/winGame")
				}
				else{
					alert('Vous semblez fatigué.. Ne devriez vous pas faire une pause?');
					window.location.replace("/main/proposer_trajet")
				}
			}
		} 
	</script>
</body>
</html>
