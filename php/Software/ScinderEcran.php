<?php
session_start();
$_SESSION['page']="software";
include_once "../header.php";
?>
<html>
<body>
<main class="page landing-page">
    <section class="clean-block clean-hero ctext" style="background-color:rgb(230, 225, 225);">
        <div class="text">
            <h2>Scindez l'environnement virtuel</h2>
            <br>
            <p>Une fois que vous avez cliqué sur "<strong>Décoller</strong>" dans le menu principal de FSX, vous aurez la possibilité de détacher l'environnement vrituel intérieur (cockpit) de l'environnement extérieur.
            En effet, pour une meilleure immersion, il s'agira d'afficher l'environnement virtuel sur l'écran principal (écran externe) et d'afficher le tableau de bord de l'avion sur l'écran disposé dans le simulateur. </p>
            <p>Suivez les différentes étapes ci-dessous ou bien visionnez la vidéo suivante.</p>
            <br>
            <button type="button" class="btn btn-info" id="button_video"><a href="javascript:showPopup();" title="Montrer le popup">Voir la vidéo</a></button>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class="col-md-6">
            <img src="../../images/menuFSX.jpg" alt="Card image"/>
        </div>
        <div class="col-md-4">
            <h2>Etape 1 </h2>
            <p> Lancez FSX en cliquant sur l'icône <img src="../../images/Icone.png" alt="Card image"/> située dans la barre de navigation en bas de l’écran. Vous arrivez sur la page d’accueil de FSX.
        Une fois sur le menu principal, sélectionnez l'appareil que vous souhaitez dans "<strong> Appareil Actuel</strong>" et cliquez sur "<strong>Décollage</strong>", en bas à droite du menu.</p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class="col-md-6">
            <img src="../../images/Vues.jpg" alt="Card image"/>
        </div>
        <div class="col-md-4">
            <h2>Etape 2</h2>
            <p> Mettre la page qui affiche l'environnement virtuel en plein écran. Pour cela, appuyez sur "<strong>Vues</strong>" dans la barre de menu en haut de la page.
                Puis cliquez sur "<strong>Plein écran</strong>".
            </p>
            <p> <strong style= "color:red;" > Attention :</strong> Cette barre de navigation disparaît en mode plein écran. Pour la faire apparaître, cliquez sur la touche "<strong>Alt</strong>" du clavier.</p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class="col-md-6">
            <img src="../../images/cockpitVue.jpg" alt="Card image"/>
        </div>
        <div class="col-md-4">
            <h2>Etape 3</h2>
            <p> Faire un clic droit sur l'environnement virtuel, puis cliquez sur "<strong>cockpit</strong>" puis sur "<strong>cockpit</strong>". L'environnement intérieur (tableau de bord) est alors détaché de l'environnement extérieur (paysage). 
            </p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class="col-md-6">
            <img src="../../images/Scinder1.png" alt="Card image"/>
        </div>
        <div class="col-md-4">
            <h2>Etape 4</h2>
            <p> Maintenez un clic gauche effectué sur le cockpit tout en faisant glisser la fenêtre sur l'écran secondaire (écran du simulateur). 
            </p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class="col-md-6">
            <img src="../../images/Scinder2.png" alt="Card image"/>
        </div>
        <div class="col-md-4">
            <h2>Etape 5</h2>
            <p> Vous avez maintenant les environnements scindés mais ils ne recouvrent pas tout l'espace sur les écrans. 
            Pour résoudre ce problème, vous pouvez ajuster les fenêtres en disposant le curseur de la souris sur les bords. 
            </p>
        </div>
    </section>
</main>
<div id="customPopup">
     <h3>Diviser l'environnement virtuel</h3>
     <video controls src="../../videos/ScinderEcran.mp4" >Créer un plan de vol</video>
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
</body>

<?php include_once "../footer.php"; ?>
</html>