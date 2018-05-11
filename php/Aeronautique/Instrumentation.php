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
            <h1>- Instrumentation -</h1>
            <hr/>
            </div>
        </div>
        <div class='col-md-1'></div>

        <div class='row'>
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <ol>
            <h4><li>Le variomètre</li></h4>
            <p>Le variomètre est un indicateur de perte ou de gain d’altitude. Appelée “vitesse verticale” et exprimée en pieds.minute-1, elle permet de savoir à quelle vitesse l'aéronef gagne ou perd de l’altitude</p>
            <img src="../../images/Variometre.jpg" alt="Card image"/>
            <hr/>

            <h4><li>L'altimètre'</li></h4>
            <p>L’altimètre est également un indicateur d’altitude mais exprimé uniquement en pieds. Il représente l’altitude relative (par rapport au niveau de la mer) de l'aéronef et peut être un indicateur de perte ou de gain d’altitude.</p>
            <img src="../../images/Altimètre.jpg" alt="Card image"/>
                <hr/>
            <h4><li>Le gyroscope directionnel</li></h4>
            <p>Le gyroscope directionnel permet de connaître l’orientation de l’aéronef dans l’espace à l’aide des points cardinaux N, S, E, O.</p>
                <img src="../../images/Gyroscope.jpg" alt="Card image"/>
            <hr/>

            <h4><li>L'horizon artificiel</li></h4>
            <p>L’horizon artificiel est également un indicateur de l’orientation de l'aéronef, mais par rapport au sol : La partie brune représente le sol et la partie bleue, le ciel. De ce fait, si l’avion pique, l’indicateur jaune sera dans la partie marron et inversement si l’avion est à cabrer.</p>
            <img src="../../images/Horizon.jpg" alt="Card image"/>
            <hr/>

            <h4><li>L'anémomètre</li></h4>
            <p>L’anémomètre est un indicateur de vitesse en km.s-1. Plus précisément, des capteurs (prises Pitot) mesurent la vitesse de l’écoulement de l’air sur les parois de l’appareil, pour retranscrire la vitesse relative de l’aéronef. Il est extrêmement utile dans les phases d'atterrissage et de décollage.</p>
            <img src="../../images/Anémomètre.jpg" alt="Card image"/>
            <hr/>

            <h4><li>L'indicateur de virage</li></h4>
            <p>Cet instrument permet d’indiquer au pilote que l’aéronef s’incline sur l’axe de tangage. C’est un feedback important surtout pour le vol aux instruments (IFR).</p>
            <img src="../../images/Virage.jpg" alt="Card image"/>
            <hr/>

            <h4><li>Instruments moteur</li></h4>
            <p>Ces deux instruments indiquent le régime moteur en rotation par minutes. C’est un indicateur important pour souligner le bon fonctionnement du moteur.</p>
            <img src="../../images/Moteur.jpg" alt="Card image"/>
            <hr/>

            <h4><li>Le bloc radio</li></h4>
            <p>Le bloc radio est le principal instrument de communication avec les autres aéronefs et la tour de contrôle. Cela est rendu possible par la sélection d’une fréquence particulière. Cette instrumentation n’est pas importante pour le projet car nous ne possédons aucun moyen de communication. Nous n’avons ni émetteur, ni récepteur.</p>
            <img src="../../images/Blocradio.jpg" alt="Card image"/>
            </ol>
        </div>
        </div>
</main>
</body>
</html>
<?php include_once "../footer.php"; ?>

