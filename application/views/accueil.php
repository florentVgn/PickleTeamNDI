<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>
<div id="title">
    <h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
    <button class="dl">Trouver un covoiturage dès maintenant !</button>
</div>
<div id="content">
    <div id="main">
        <div class="carroussel"><!-- Dynamic Content --></div>
        <div class="mainArticle">
            Nous avons développé cette application web dans le cadre de la <b>Nuit de l'Info 2017</b>.<br><br>

            <h3>L'objectif est simple</h3><br>
            Nous savons que les jeunes sont les plus touchés par les accidents de la route.<br>
            L'un des plus gros facteur de mortalité est la consommation d'alcool avant de prendre le volant.<br><br>

            Ainsi, nous avons décidé d'apporter une solution innovante pour résoudre ce problème.<br>
            Notre application met directement en relation les personnes qui jouent le rôle de sam,
            à ceux qui en ont besoin d'un.<br><br>

            <h3>Le principe est simple : Voici les principales fonctionnalités</h3><br>

            Créer un événement, ce sont les entreprises et les particuliers qui les créent.<br>
            Les événements ont une date, un lieu, un organisateur etc.<br>
            Autour de ces derniers, les gens qui y participent peuvent s'organiser..<br><br>

            Pour créer des trajets, les personnes qui jouent les Sam, sont invités à en créer.<br>
            Ainsi les Sams peuvent proposer un covoiturage depuis l'événement jusqu'à la destination qu'ils souhaitent.<br>
            Pour témoigner de leur capacités à conduire, les Sams se verront imposer une petite épreuve visant à tester leur réactivité.<br>

            Pour rejoindre des trajets, les personnes qui ne peuvent/ veulent pas conduire, peuvent en rejoindre.<br>
            Ainsi, ils ne se mettent pas en danger, et ne mettent personne en danger sur la route.<br>
            Il leur suffit de sélectionner un trajet, pour le rejoindre tant qu'il y a de la place à bord !<br><br>


            <h3>A long terme </h3><br>
            On imagine un partenariat avec les entreprises spécialisées dans l'événementiel.<br>
            Afin de rendre l'application utile au plus grand nombre.<br>
        </div>
    </div>
</div>


<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>
<script>


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


</script>
