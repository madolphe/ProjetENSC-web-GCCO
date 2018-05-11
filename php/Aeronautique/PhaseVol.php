<?php
session_start();
$_SESSION['page']="aeronautique";
include_once "../header.php";
?>
<html>
<body>
<main class="page landing-page">
<div class='container'>
        <div class='row'>
            <div class='col-md-1'></div>
            <div class='col-md-10'>
            <br/><br/>
            <h1>- Phases de vol -</h1>
            <hr/>
            </div>
        </div>
        <div class='col-md-1'></div>

        <div class='row'>
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <ol>
            <h4><li>Le roulage</li></h4>
            <p>Cette phase est relativement simple pour le pilote et ne nécessite que peu de ressources cognitives. 
                En effet, elle consiste à rouler du hangar, où l’avion était entreposé, jusqu’à la piste de décollage. 
                Le pilote doit alors maintenir une vitesse constante et faible. Cette partie ne nécessite pas l'utilisation d’instruments particuliers. 
                Avant de décoller, le pilote communique avec la tour de contrôle (s’il y en a une) ou bien annonce sur la fréquence radio de l’aérodrome, sa venue sur la piste de décollage. 
                Pour éviter tout accident, le départ d’un avion doit être annoncé.</p>
            <hr/>
            <h4><li>Le décollage</li></h4>
            <p>Une fois sur la piste de décollage, le pilote peut mettre les gaz, relâcher les freins et ainsi mettre en accélération l’aéronef. 
                Une fois qu’une vitesse précise est atteinte, l’avion obtiendra une portance suffisante pour pouvoir décoller. 
                Le pilote doit alors vérifier principalement son altitude et sa vitesse. L’angle d’attaque est d’approximativement 45° à vitesse constante. 
                C’est l’angle optimal permettant de prendre de l’altitude sans décrocher. 
                Cette phase peut être critique si une panne survient ou si un objet volant vient sur la trajectoire de l’aéronef. 
                Dans cette situation d’urgence, le pilote doit réagir au plus vite afin d’éviter tout dommage.
                Durant sa formation, un pilote apprend la liste des procédures à appliquer en cas d’urgence, afin de réagir au mieux. </p>
                <hr/>
            <h4><li>Le vol</li></h4>
            <p>La phase suivante comprend tout le vol jusqu’à la phase d’approche de l’aérodrome. 
                Durant cette période et suivant la météo, le pilote doit regarder régulièrement ses instruments afin d’adapter son pilotage. 
                Les instruments sont une prise d’information nécessaire car le système nerveux central n’étant pas sans failles, de fausses perceptions peuvent induire en erreur le pilote. 
                Cela est particulièrement vrai dans le vol aux instruments (sans visibilité). 
                Quatre instruments de bases doivent être constamment surveillés : l'horizon artificiel au centre, l'anémomètre à gauche, l'altimètre à droite, le gyro directionnel en dessous. </p>
                <img src="../../images/Instruments.jpg" alt="Card image"/>
            <p>Cette disposition permet d'optimiser le circuit visuel au cours du vol. 
                La disposition des autres instruments est variable mais respecte certains standards.
                Durant cette phase, de nombreuses pannes peuvent nuire à la qualité du vol et entraîner un accident. En effet, en considérant que le “risque zéro” n’existe pas, ces incidents techniques peuvent survenir à tout moment, mettant à l’épreuve les compétences du pilote.</p>       
            <hr/>
            <h4><li>L'attérissage</li></h4>
            <p>La phase d'atterrissage est une phase critique qui nécessite une grande concentration. 
                Le pilote doit, dans un premier temps, s’annoncer à la radio afin d’avertir les autres appareils en vol de sa volonté de se poser. 
                 Par la suite, le pilote devra gérer sa descente, en fonction des vents, de sa vitesse et de son inclinaison. 
                Il sera alors focalisé sur les informations données par ses instruments, notamment la vitesse et l’altitude car il ne doit ni descendre trop vite sous peine de dégrader l’aéronef, ni descendre trop lentement sous peine de décrocher. 
                La survenue d’une panne serait particulièrement dangereuse  durant cette phase d'atterrissage.</p>
            </ol>
        </div>
        </div>
</main>
</body>
</html>
<?php include_once "../footer.php"; ?>
