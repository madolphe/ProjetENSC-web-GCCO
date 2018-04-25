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
            Vous aurez la possibilité de réaliser des vols libre, de créer des scénarii pour une meilleure immerssion. </p>
            <h4>Voici une image du menu principal</h4>
            <img src="../../images/menuFSX.jpg" alt="Card image"/>
        </div>
    </section>
    <section class="clean-block clean-hero" style="background-color:white;">
        <div class="text">
            <h2>PLus de renseignements</h2>
            <p> <li>Pour des informations plus détaillées, vous pouvez consulter ce site
                    <ul><a href="https://support.microsoft.com/fr-fr/help/925724/flight-simulator-x-minimum-system-requirements ">Renseignements</a></ul>
                </li>
                <li>Pour des questions, voici quelques forum : 
                    <ul><a href="https://www.fsx-france.com/forum ">fsx-france</a> </ul>
                    <ul><a href="http://www.pilote-virtuel.com/ ">pilote-virtuel</a></ul>
                </li>

                <li>Sinon référez-vous à la documentation papier ayant pour titre ""</li>
            </p>
        </div>
    </section>
</main>
</body>

<?php include_once "../footer.php"; ?>
</html>