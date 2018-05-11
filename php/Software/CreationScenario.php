<?php
session_start();
$_SESSION['page']="software";
include_once "../header.php";
?>
 <section class="clean-block clean-hero ctext" style="background-color:rgb(230, 225, 225);">
        <div class="text">
            <h2> Créer un plan de vol</h2>
            <br>
            <p> Pour créer des scénarii de vol sans panne, il vous faudra utiliser flight simulator x. Les scénarii seront donc des plans de vol.
            Suivez les différentes étapes ci-dessous ou bien visionnez la vidéo suivante.</p>
            
            <button type="button" class="btn btn-info" id="button_video"><a href="javascript:showPopup();" title="Montrer le popup">Voir la vidéo</a></button>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/menuFSX1.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
        <h1>Etape 1</h1>
        <p>Lancez FSX en cliquant sur l'icône <img src="../../images/Icone.png" alt="Card image"/> située dans la barre de navigation en bas de l’écran. Vous arrivez sur la page d’accueil de FSX.
        Une fois sur le menu principal, cliquez sur "<strong>Décollage</strong>", en bas à droite du menu.
        </p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
            <img src="../../images/menuFSX1.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 2</h1>
            <p>Cliquez sur l'onglet "<strong>Organisateur de vol</strong>” situé au dessus de l'image de l'avion sélectionné. </p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/OrganisateurVol.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 3</h1>
            <p>Sélectionnez l’aéroport de départ puis l’aéroport d’arrivée en appuyant sur “<strong>sélectionner</strong>” dans la partie 1 "<strong>Choisir la position de départ</strong>" puis dans la partie 2 "<strong>Choisir la destination</strong>"</p>
        </div>
    </section>
        
    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
            <img src="../../images/Aeroport.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 4</h1>
            <p>Sur cette page, vous pourrez sélectionner l’aéroport de départ ou d'arrivée de votre choix. Appuyez sur "<strong>ok</strong>" une fois que le choix a été fait pour revenir sur la page de l'étape 3.</p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/OrganisateurVol.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 5</h1>
            <p>Vous avez également la possibilité de choisir si le vol sera à vue, c’est à dire avec une bonne visibilité. Ou bien aux instruments, c’est à dire qu’il n’y a pas assez de visibilité pour que les repères visuelssuffisent à conaître sa psition dans l'espace.
                Une fois que vous avez fini, cliquez sur “<strong>Trouver la route</strong>” dans la partie 5 "<strong>Générer le plan de vol </strong>". 
            </p>
        </div>
    </section>
    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
            <img src="../../images/GenererVol.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 6</h1>
            <p>Enregistrez le plan de vol en cliquant sur "<strong>Enregistrer</strong>". Vous êtes maintenant prêt à voler, cliquez sur "<strong>ok</strong>" pour revenir au menu principal de FSX.  
            </p>
        </div>
    </section>

<div id="customPopup">
     <h3>Créer un plan de vol</h3>
     <video controls src="../../videos/PlanVol1.mp4" >Créer un plan de vol</video>
     <input id="close_popup" type="button" value="Close">
</div>
<script>
jQuery(function($) {

    $('#button_video').on("click",function(){
        $('#customPopup').dialog();
    });

     $('#close_popup').on("click",function(){
        $('#customPopup').dialog("close");
    });
});
</script>
<?php include_once "../footer.php"; ?>
