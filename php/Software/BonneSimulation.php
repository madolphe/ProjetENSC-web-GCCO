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
            <h2> Créer une bonne simulation</h2>
            <p> Tout au long de votre projet, vous devrez réaliser des expérimentations avec un environnement le plus proche de réalité. 
            Pour cela, la première étape consiste àcconnaître les différents critères nécessaires pour rendre le simuateur immerssif. 
            Pour en savoir plus, cliquez sur le bouton.</p>
                <a href="SimulationImmerssion.php"><button class="btn btn-primary" type="button">En savoir plus</button></a>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white">
    <div class = "col-md-6">
            <img src="../../images/menuFSX.jpg" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2> Flight simulator X</h2>
            <p> Pour en savoir plus sur ce logiciel de simulation de vol utilisé, cliquez sur le button ci-dessous.</p>
                <a href="FSX.php"><button class="btn btn-primary" type="button">En savoir plus</button></a>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
            <img src="../../images/CommandeFSUIPC.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>Attribution de nouvelles commandes</h2>
            <p> Dans cette rubrique vous apprendrez à modifier/ajouter de nouvelles commandes sur FSX. 
                Pour ce faire, vous aurez deux moyens à votre disposition, avec FSX et avec FSUIPC. <strong> Il est recommandé de passer par FSUIPC.</strong>
                 Pour en savoir plus, cliquez sur le button ci-dessous.</p>
                <a href="AttributionCommandes.php"><button class="btn btn-primary" type="button">Se former</button></a>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/PlanVol.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>Vous souhaitez créer des plans de vol</h2>
            <p> Dans cette rubrique vous apprendrez à créer un plan de vol pour aller d'un point A à un point B, sans création de panne. 
                Vous apprendrez également à manipuler la météo. Pour en savoir plus, cliquez sur le button ci-dessous.</p>
                <a href="CreationScenario.php"><button class="btn btn-primary" type="button">Se former</button></a>
        </div>
    </section>
   <!-- <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
                <img src="../../images/PlanVol.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>Vous souhaitez créer des scénarii avec pannes</h2>
                <p> Dans cette rubrique vous apprendrez à créer un plan de vol pour aller d'un point A à un point B. 
                    Mais cette fois-ci,en incoporant des pannes qui vous permettrons de réaliser des expérimentations.
                    Pour en savoir plus, cliquez sur le button ci-dessous.</p>
                    <a href="CréationScénarioPannes.php"><button class="btn btn-primary" type="button">Se former</button></a>
        </div>
    </section> -->
</main>
</body>
</html>
<?php include_once "../footer.php"; ?>