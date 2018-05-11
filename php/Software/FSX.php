<?php
session_start();
$_SESSION['page']="software";
include_once "../header.php";
?>
<html>
<body>
<main class="page landing-page">
    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class="text">
            <h2>Flight Simulator X</h2>
            <p>FSX est un logiciel de simulation de vol qui vous immergera dans la peau d'un pilote. 
            Vous aurez la possibilité de réaliser des vols libres, de changer d'avion, de modifier la météo, pour une expérience de pilotage contrôlée. </p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
            <div class="col-md-6">
                <img src="../../images/Ecrans.jpg" alt="Card image" style ="width:500px;transform: rotate(90deg);"/>
            </div>
            <div class="col-md-4">
                <h2>Scindez l'écran d'affichage </h2>
                <p> Vous disposez de deux écranS, un premier, incorporer dans le simulateur et un autre plus grand, fixer sur un support métallique. 
                Ces deux écrans permettent de diviser l'environnement virtuel en deux parties, une partie pour le paysage (afficher sur le grand écran) et 
                une autre partie pour le tableau de bord (afficher sur l'écran du simulateur).</p>
                <a href="ScinderEcran.php"><button class="btn btn-primary" type="button">Se former</button></a>
            </div>
        
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);;">
        <div class="text">
            <h2>PLus de renseignements</h2>
            <p> <li>Pour des informations plus détaillées, vous pouvez consulter ce site :
                    <ul><a href="https://support.microsoft.com/fr-fr/help/925724/flight-simulator-x-minimum-system-requirements "><strong>support.microsoft.com</strong></a></ul>
                </li>
                <li>Pour des questions, voici quelques forum : 
                    <ul><a href="https://www.fsx-france.com/forum "><strong>fsx-france</strong></a> </ul>
                    <ul><a href="http://www.pilote-virtuel.com/ "><strong>pilote-virtuel</strong></a></ul>
                </li>

                <li>Sinon référez-vous à la documentation papier ayant pour titre "ID Simulation" disposée sur l'étagère dans la salle du simulateur.</li>
            </p>
        </div>
    </section>
</main>
</body>

<?php include_once "../footer.php"; ?>
</html>