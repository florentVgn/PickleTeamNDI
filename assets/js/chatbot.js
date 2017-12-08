/*************** EVENT HANDLER ****************/
var open = 0;
var chatPrev = 0;

var database = [
{
	"Nom": "Jon Snow",
	"Contact": "Westeros - Nord",
	"Role": "Roi",
	"Responsable": "Jon Snow",
	"Niveau Hierarchique": 1,
	"Equipe": "Stark",
	"Competences": "Meneur d'hommes",
	"Projets": "Arrêter les marcheurs blancs",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Arya Stark",
	"Contact": "Westeros - Nord",
	"Role": "Combattante",
	"Responsable": "Jon Snow",
	"Niveau Hierarchique": 2,
	"Equipe": "Stark",
	"Competences": "Tueuse, Determinee",
	"Projets": "Se venger",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Sansa Stark",
	"Contact": "Westeros - Nord",
	"Role": "Reine",
	"Responsable": "Jon Snow",
	"Niveau Hierarchique": 2,
	"Equipe": "Stark",
	"Competences": "Determinee",
	"Projets": "Reigner sur le nord",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Bran Stark",
	"Contact": "Westeros - Nord",
	"Role": "Change-peau",
	"Responsable": "Jon Snow",
	"Niveau Hierarchique": 2,
	"Equipe": "Stark",
	"Competences": "Predire le futur",
	"Projets": "Comprendre son passe",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Catelyn Tully",
	"Contact": "Westeros - Nord",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Stark",
	"Competences": "Sagesse",
	"Projets": "Proteger ses enfants",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Daenerys Targaryen",
	"Contact": "Westeros - Essos",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Targaryen",
	"Competences": "Insensible au feu, aura naturelle",
	"Projets": "Reigner sur westeros",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Ramsay Bolton",
	"Contact": "Westeros - Nord",
	"Role": "Roi",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Bolton",
	"Competences": "Pret a tout",
	"Projets": "Reigner sur le nord",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Walder Frey",
	"Contact": "Westeros",
	"Role": "Roi",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Frey",
	"Competences": "Fourbe",
	"Projets": "Se venger des starks",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Theon Greyjoy",
	"Contact": "Westeros",
	"Role": "Bras droit",
	"Responsable": "Yara Greyjoy",
	"Niveau Hierarchique": 2,
	"Equipe": "Greyjoy",
	"Competences": "Peureux",
	"Projets": "Redorer son image",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Yara Greyjoy",
	"Contact": "Westeros",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Greyjoy",
	"Competences": "Forte",
	"Projets": "Defendre les interets de son peuple",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Euron Greyjoy",
	"Contact": "Westeros",
	"Role": "Roi",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Greyjoy",
	"Competences": "Combattant aguerri",
	"Projets": "Se marier avec Cersei",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Tyrion Lannister",
	"Contact": "Westeros - Essos",
	"Role": "Main",
	"Responsable": "Daenerys Targaryen",
	"Niveau Hierarchique": 2,
	"Equipe": "Lannister",
	"Competences": "Intelligent, droit",
	"Projets": "Profiter de la vie",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Jaime Lannister",
	"Contact": "Westeros - Kings Landing",
	"Role": "Main",
	"Responsable": "Cersei Lannister",
	"Niveau Hierarchique": 2,
	"Equipe": "Lannister",
	"Competences": "droit, devoue",
	"Projets": "Defendre Cersei",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Cersei Lannister",
	"Contact": "Westeros - Kings Landing",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Lannister",
	"Competences": "Determinee, pret a tout",
	"Projets": "Conserver son throne",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Tywin Lannister",
	"Contact": "Westeros - Kings Landing",
	"Role": "Roi",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Lannister",
	"Competences": "Meticuleux",
	"Projets": "Conserver son throne",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Oberyn Martell",
	"Contact": "Dorne",
	"Role": "Roi",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Martell",
	"Competences": "Maniement de l'epee",
	"Projets": "Profiter de la vie",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Ellaria Sand",
	"Contact": "Dorne",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Martell",
	"Competences": "Combattante agile",
	"Projets": "Venger son mari",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Hodor",
	"Contact": "Westeros - Nord",
	"Role": "Valet",
	"Responsable": "Bran Stark",
	"Niveau Hierarchique": 3,
	"Equipe": "Peuple de Westeros",
	"Competences": "Force incroyable",
	"Projets": "Defendre Bran",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Jorah Mormont",
	"Contact": "Westeros - Essos",
	"Role": "Conseiller",
	"Responsable": "Daenerys Targaryen",
	"Niveau Hierarchique": 2,
	"Equipe": "Targaryen",
	"Competences": "Courageux",
	"Projets": "Defendre sa reine",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Daario Naharis",
	"Contact": "Essos",
	"Role": "Combattant",
	"Responsable": "Daenerys Targaryen",
	"Niveau Hierarchique": 3,
	"Equipe": "Targaryen",
	"Competences": "Combattant aguerri",
	"Projets": "Defendre sa reine",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Missandei",
	"Contact": "Essos",
	"Role": "Conseiller",
	"Responsable": "Daenerys Targaryen",
	"Niveau Hierarchique": 2,
	"Equipe": "Targaryen",
	"Competences": "Devoue, attentionnee",
	"Projets": "Servir sa reine",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Olenna Tyrell",
	"Contact": "Westeros",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 1,
	"Equipe": "Tyrell",
	"Competences": "Femme d'affaire",
	"Projets": "Proteger ses enfants",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Margaery Tyrell",
	"Contact": "Westeros",
	"Role": "Reine",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Tyrell",
	"Competences": "Manipulatrice",
	"Projets": "Le pouvoir",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Loras Tyrell",
	"Contact": "Westeros",
	"Role": "Prince",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Tyrell",
	"Competences": "Combattant aguerri",
	"Projets": "Profiter de la vie",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Petyr Baelish",
	"Contact": "Westeros",
	"Role": "Conseiller",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Peuple de Westeros",
	"Competences": "Manipulateur",
	"Projets": "Se marier avec Sansa",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Varys",
	"Contact": "Westeros",
	"Role": "Conseiller",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 2,
	"Equipe": "Peuple de Westeros",
	"Competences": "Fin startege",
	"Projets": "Controler le monde",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Le Grand Moineau",
	"Contact": "Westeros",
	"Role": "Religieux",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 3,
	"Equipe": "Peuple de Westeros",
	"Competences": "Persuasif",
	"Projets": "Diffuser sa religion",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Brienne de Torth",
	"Contact": "Westeros",
	"Role": "Chevalier",
	"Responsable": "Sansa Stark",
	"Niveau Hierarchique": 3,
	"Equipe": "Peuple de Westeros",
	"Competences": "Devoue",
	"Projets": "Defendre Sansa",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
},
{
	"Nom": "Bronn",
	"Contact": "Westeros",
	"Role": "Mercenaire",
	"Responsable": "Aucun",
	"Niveau Hierarchique": 3,
	"Equipe": "Peuple de Westeros",
	"Competences": "Combattant aguerri",
	"Projets": "Profiter de la vie",
	"Complements": "https://fr.wikipedia.org/wiki/Personnages_de_Game_of_Thrones"
}
];
var firstwords = ['Le', 'Le', 'Le', 'Le', 'Le', 'L\'', 'Les', 'Les', 'Les'];
var linkwords = ['est', 'est', 'est', 'est', 'est', 'est', 'sont', 'sont', 'sont'];
var keywords = ['nom', 'contact', 'role', 'responsable', 'niveau hierarchique', 'equipe', 'competences', 'projets', 'complements'];
var alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
var mentionSize = 0;


$('#chatHeader').on('click', function(){
	if(open == 0){
		$(this).html('En chat avec [BOT]');
		open = 1;
		$('#chat').animate({
			bottom: '15px'
		}, 300, function() {
					  	// Load content //
					  });

		$('.chatPrev').animate({
			bottom: '13px'
		}, 300, function() {
		});
	}
	else{
		$(this).html('Cliquez pour ouvrir le chat');
		open = 0;
		$('#chat').animate({
			bottom: '-180px'
		}, 300, function() {
					  	// Load content //
					  });

		$('.chatPrev').animate({
			bottom: '-250px'
		}, 300, function() {
		});
	}

});

$('.inputMessage').on('keyup', function(eventKey) {
	if(eventKey.which == 13) {
		messageHandler();
	}

	var content = $('.inputMessage').val().toLowerCase();
	var mention = content.match(/@(\w+)/);
	var value = mention.slice(0, 1);
	var regValue = new RegExp('^'+ mention.slice(1));

	if(mention.length > 0) {
		var allMentions = [];

		for (var i in database) {
			if(database[i]['Nom'].toLowerCase().match(regValue)) { allMentions.push([i, 'Nom', database[i]['Nom']]); }
			if(database[i]['Contact'].toLowerCase().match(regValue)) { allMentions.push([i, 'Contact', database[i]['Contact']]); }
			if(database[i]['Role'].toLowerCase().match(regValue)) { allMentions.push([i, 'Role', database[i]['Role']]); }
			if(database[i]['Responsable'].toLowerCase().match(regValue)) { allMentions.push([i, 'Responsable', database[i]['Responsable']]); }
			if(database[i]['Equipe'].toLowerCase().match(regValue)) { allMentions.push([i, 'Equipe', database[i]['Equipe']]); }
			if(database[i]['Competences'].toLowerCase().match(regValue)) { allMentions.push([i, 'Competences', database[i]['Competences']]); }
			if(database[i]['Projets'].toLowerCase().match(regValue)) { allMentions.push([i, 'Projets', database[i]['Projets']]); }
			if(database[i]['Complements'].toLowerCase().match(regValue)) { allMentions.push([i, 'Complements', database[i]['Complements']]); }
		}

		if(chatPrev < 1) {
			$('#chat').before('<div class="chatPrev">');

			for (var i = 0; i < allMentions.length; i++) {
				$('.chatPrev').append('<button type="button" onclick="writeOutput(\''+ allMentions[i][2] +'\', convertTableResult(\''+ allMentions[i][1] +'\', \''+ content +'\'), \''+ value +'\', \''+ allMentions[i][0] +'\')">@'+ allMentions[i][2] +"</type>");
			};

			$('#chat').before('</div>');
			chatPrev++;	
		}
		else {
			$('.chatPrev').empty();

			for (var i = 0; i < allMentions.length; i++) {
				$('.chatPrev').append('<button type="button" onclick="writeOutput(\''+ allMentions[i][2] +'\', convertTableResult(\''+ allMentions[i][1] +'\', \''+ content +'\'), \''+ value +'\', \''+ allMentions[i][0] +'\')">@'+ allMentions[i][2] +"</type>");
			};
		}
	}
});

$('.sendMessage').on('click', function() {
	messageHandler();
});

/*************** FUNCTION ***************/
function messageHandler() {
	var content = $('.inputMessage').val().toLowerCase();
	var mention = content.match(new RegExp('\@.{'+ mentionSize +'}'));
	var id = $('.mentionId').val();
	var keywordsId = 0;
	var action = '';
	var ret = '';

	$('#chatContent').append('<div class="barre"></div><div class="bulle"><p class="author receiver">VOUS</p><p class="message receiver">'+ content +'</p></div>');

	for (var i = 0; i < keywords.length; i++) {
		var regKeyword = new RegExp(keywords[i]);

		if(content.match(regKeyword)) {
			action = keywords[i];
			keywordsId = i;
		}
	};

	if(action.length > 0) {
		if(mention.length > 0) {
			$('#chatContent').append('<div class="barre"></div><div class="bulle"><p class="author sender">BOT</p><p class="message sender">'
				+ firstwords[keywordsId] + ' '
				+ keywords[keywordsId] + ' de '
				+ database[id]['Nom'] + ' '
				+ linkwords[keywordsId] + ' '
				+ database[id][action.charAt(0).toUpperCase() + action.slice(1)]
				+'</p></div>');
		}
		else {
			$('#chatContent').append('<div class="barre"></div><div class="bulle"><p class="author sender">BOT</p><p class="message sender">Pas de mention detectée, veuillez re-essayer.</p></div>');
		}
	}
	else {
		$('#chatContent').append('<div class="barre"></div><div class="bulle"><p class="author sender">BOT</p><p class="message sender">Votre message ne peux être interprété, veuillez re-essayer.</p></div>');
	}

	mentionSize = 0;
	$('.inputMessage').val('');
}

function convertTableResult(reference, value) {
	var convertedNumber = [];

	convertedNumber.push(reference);
	convertedNumber.push(value);

	return convertedNumber;
}

function writeOutput(string, content, value, id) {
	mentionSize = string.length;
	$('.mentionId').val(id);
	$('.inputMessage').val(content[1].slice(0, -(value.length)) +'@'+ string + ' ');
}
