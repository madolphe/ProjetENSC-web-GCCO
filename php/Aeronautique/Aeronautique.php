<?php
session_start();
$_SESSION['page']="aeronautique";
include_once "../header.php";
?>
<main class="page landing-page">

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
    <div class = "col-md-6">
        <img src="../../images/cockpit.jpg" alt="Card image"/>
    </div>
    <div class ="col-md-4">
        <h2> Instrumentation</h2>
        <p> Vous souhaitez en savoir plus sur les instruments disposés dans un avion de tourisme.
        Cela vous permettra de connaître ceux essentiels au pilotage dans le but de créer des scénarii de panne le plus réaliste possible. 
        </p>
            <a href="Instrumentation.php"><button class="btn btn-primary" type="button">En savoir plus</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:white">
<div class = "col-md-6">
        <img src="../../images/phaseVol.jpg" alt="Card image"/>
    </div>
    <div class ="col-md-4">
        <h2> Phase de vol</h2>
        <p> Lors d'un vol, l'aéronerf possède différentes phases de vol plus ou moins critiques. 
        Découvrez les afin de créer des scénarii adaptés avec des niveaux de difficultés.  </p>
            <a href="PhaseVol.php"><button class="btn btn-primary" type="button">En savoir plus</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
    <div class = "col-md-6">
        <img src="../../images/glasscockpit.png" alt="Card image"/>
    </div>
    <div class ="col-md-4">
        <h2>Nouvelles technologies</h2>
        <p> Dans cette rubrique il vous sera présenté les dernières technologies utilisées dans les cockpits des avions de tourismes. </p>
            <a href="NouvellesTechnologie.php"><button class="btn btn-primary" type="button">Se former</button></a>
    </div>
</section>
</main>
<?php include_once "../footer.php"; ?>

