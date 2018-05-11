

<?php session_start();
$_SESSION["page"]="index";
require_once "header.php"?>
    <div class="img-acc text-center">
        <h1 class="titre">Projet transdisciplinaire "Cessna"</h1>
        <p style ="color:black;"> Réalisé par Maxime Adolphe, Raphael Chirac, Valentin Debenay et Lylia Fauvel <p>
    </div>

<div class="presentation-projet">

    <h2>Présentation du projet: </h2><br>
    Il existe des simulateurs dans de nombreux domaines (conduite, bancaire...) qui ont réussi à amener une nouvelle dimension à l’expérimentation ainsi qu’à la prise de décision. En particulier, les simulateurs de vol offrent une réelle plus value à l’enseignement, ou encore à la recherche dans le domaine aéronautique.
    Il est donc intéressant d'étudier les simulateurs d’avions, car :
    <br><br>
    <ul>
        <li>
            Dans le domaine aéronautique, les cours pratiques sont souvent plus formateurs et plus appréciés par les élèves que les cours théoriques. Ils permettent ainsi de relier les connaissances techniques à une réalité pratique.
        </li>
        <li>
            Dans le domaine de la recherche, ce type de simulateur permet de réaliser des expériences plus écologiques (gestion de situations critiques, relevés physiologiques, etc).
        </li>
    </ul>
    <br>
    Pour en savoir plus le projet et la manière dont-il a été géré, cliquez sur le bouton suivant.
    <br>
    <div class="row" >
        <a href="Projet.php" style="margin:auto;"><button type="button" class="btn btn-danger">En savoir plus</button></a>
    </div>
</div>
<div class="img-acc2"></div>

<div class="container arborescence text-center">
    <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
        <h3> Organisation du site : </h3>
        <br>
        <h5> <em>L'objectif de ce site étant en partie la transmission du savoir, en voici l'organisation. Cela vous permettra d'accéder rapidemment à un contenu. </em></h5>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">		<button type="button" class="btn btn-danger">Accueil</button>

        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien1" width="1000" height="70" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/Menu.php"><button type="button" class="btn btn-primary">Aéronautique</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/BonneSimulation.php"><button type="button" class="btn btn-primary">Simulation</button></a>
        </div>
        <div class="col-4 text-center"> <a href="Hardware/MaterielADisposition.php"><button type="button" class="btn btn-primary">Documentation technique</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien2" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/Instrumentation.php"><button type="button" class="btn btn-outline-primary">Instrumentation</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/BonneSimulation.php"><button type="button" class="btn btn-outline-primary">Bonne Simulation</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Hardware/MaterielADisposition.php"><button type="button" class="btn btn-outline-primary">Matériel</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien3" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/PhaseVol.php"><button type="button" class="btn btn-outline-primary">Phase de vol</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/FSX.php"><button type="button" class="btn btn-outline-primary">Flight Simulator X</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Hardware/MethodeMASK.php"><button type="button" class="btn btn-outline-primary">Méthode MASK</button></a>
        </div>
        <div class="row text-center">
            <canvas id="lien4" width="1000" height="50" style="margin-left: 75px;"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href="Aeronautique/NouvelleTechnologie.php"><button type="button" class="btn btn-outline-primary">Développer vos connaissances</button></a>
        </div>
        <div class="col-4 text-center">	<a href="Software/AttributionCommandes.php"><button type="button" class="btn btn-outline-primary">Attribution commandes</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien5" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center"></div>
        <div class="col-4 text-center">	<a href="Software/CreationScenario.php"><button type="button" class="btn btn-outline-primary">Créer un scénario de Vol</button></a>
        </div>
    </div>
    <!--<div class="row text-center">
        <canvas id="lien6" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center"></div>
        <div class="col-4 text-center">	<a href="Software/CreationScenarioPanne.php"><button type="button" class="btn btn-outline-primary">Scénario avec pannes</button></a>
        </div>
    </div> -->
</div>
<?php require_once "footer.php"?>
