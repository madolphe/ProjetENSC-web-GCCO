

<?php session_start();
$_SESSION["page"]="index";
require_once "header.php"?>
<div class="img-acc">
	<h1>Projet transdisciplinaire "Cessna"</h1>
</div>
<div class="presentation-projet">
	Ici, on présente tout le sujet.
</div>
<div class="img-acc2"></div>

<div class="container arborescence text-center">
    <div class="row" style="margin-top: 15px;margin-bottom: 15px;">
        <h3> Organisation du site : </h3>
        <br>
        <h5> <em>L'objectif de ce site étant en partie la transmission du savoir, voici l'organisation du site, il permet d'accéder rapidemment à un contenu. </em></h5>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">		<button type="button" class="btn btn-outline-primary">Accueil</button>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien1" width="1000" height="70" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary center-block">Aéronautique</button></a>
        </div>
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Simulation</button></a>
        </div>
        <div class="col-4 text-center"> <a href=""><button type="button" class="btn btn-outline-primary">Matériel</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien2" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Instrumentation</button></a>
        </div>
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Flight Simulator X</button></a>
        </div>
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Notice d'utilisation</button></a>
        </div>
    </div>
    <div class="row text-center">
        <canvas id="lien3" width="1000" height="50" style="margin-left: 75px;"></canvas>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Phase de vol</button></a>
        </div>
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Création d'un scénario</button></a>
        </div>
        <div class="row text-center">
            <canvas id="lien4" width="1000" height="50" style="margin-left: 75px;"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Nouvelle technologie</button></a>
        </div>
        <div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Scénario avec panne</button></a>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>
