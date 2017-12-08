$(function() {

	$( ".select2" ).select2();

	$( ".datepicker" ).datepicker({
		altField: "#datepicker",
		closeText: 'Fermer',
		prevText: 'Précédent',
		nextText: 'Suivant',
		currentText: 'Aujourd\'hui',
		monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
		monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
		dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
		dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
		dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
		weekHeader: 'Sem.',
		dateFormat: 'dd/mm/yy'
	});

});


function write(text, div){
	texteToType = text.split('');
	type(texteToType,div)
}

function reset(div){
	div.html('');
	setTimeout(writeAllTextes, 400);
}

function type(text, div){
	var longeur = text.length;
	if(longeur >= 1){
		div.append(text[0]);				
		text = text.slice(1,longeur);
		setTimeout(type, randomNumber(8,50), text, div);
	}
	else{
		setTimeout(reset, 4000 ,div, div);
	}
}

function rand(min, max) {
	var result = Math.round(Math.random() * (max) + min);
	return result;
}

var phrases = ['Pour un piéton, un choc à 60km/h est mortel dans 85% des cas.', 'Pour un piéton, un choc à 130 km/h est équivalent à une chute de 22 étages.', 'Le champ de vision diminue (beaucoup) avec la vitesse.', '43% des accidents mortels ont lieu la nuit.', 'Sécurité routière tous responsables.'];

var currentPhrase = 0;

function writeAllTextes(){
	if(currentPhrase < phrases.length){
		write(phrases[currentPhrase], $('.carroussel'));
		currentPhrase++;
	}
	else{
		currentPhrase = 0;
	}
}

writeAllTextes();

function randomNumber(min, max){ return Math.floor(Math.random() * (max - min + 1)) + min; }

