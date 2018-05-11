<?php
session_start();
$_SESSION['page']="aeronautique";
include_once "../header.php";
?>
<main class="page landing-page">
    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "text">
        <h1>Nouvelles technologies</h1>
        <p>La plus grande innovation en termes d’utilisabilité et d’ergonomie cockpit est le glass cockpit. 
        En effet, comme vous pouvez le voir sur l’image suivante, les instruments présentés précédents sont affichés numériquement. 
        Ces écrans facilitent la prise d’information et offrent des possibilités en termes de design bien plus développé que l’affichage classique.  De plus, les informations peuvent être organisées en fonction de leur pertinence. La navigation dans les différents menus permet au pilote de sélectionner l’information dont il a besoin sans surcharger son environnement visuel. 
        Ce système pourrait donc être pour notre projet une solution intéressante et intuitive de projection de l’environnement virtuel.</p>
        <img src="../../images/glasscockpit.jpg" alt="Card image"/>
        </div>
    </section>
</main>
<?php include_once "../footer.php"; ?>
