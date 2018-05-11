<?php
session_start();
$_SESSION['page']="software";
include_once "../header.php";
?>
<html>
<body>
<main class="page landing-page">

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "text">
        <h1>FSUIPC4</h1>
        <p>Ce logiciel disponible depuis Flight simulator vous permettra de modifier ou d'ajouter de nouvelles commandes.<br><br>
            <strong>A noter : </strong> Ce logiciel est compatible avex le matériel GoFlight et Saitek.
        <p>Pour cela, suivez les différentes étapes ci-dessous ou bien visionnez la vidéo suivante.</p>
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
            <img src="../../images/CommandeFSUIPC1.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 2</h1>
            <p>Une fois le chargement effectué, cliquez sur “<strong>Compléments</strong>” puis sur <strong>FSUIPC</strong> dans la barre de navigation en haut de la page. Si cette barre n’est pas accessible, cliquez sur la touche “<strong>Alt</strong>” du clavier.</p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/CommandeFSUIPC.png" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h1>Etape 3</h1>
            <p>Si la commande correspond à un bouton de type On/Off, poussoir, switch cliquez sur l’onglet “<strong>Button +Switches</strong>”. Cliquez ici.</p>
            <a href="#1"><button class="btn btn-primary" type="button">Button +Switches</button></a>
            <br/><br/>
            <p>Si la commande correspond à un bouton de type Axe (manette des gaz, commandes de direction), cliquez sur l’onglet “<strong>Axis Assignment</strong>”. Cliquez ici.<p>
            <a href="#2"><button class="btn btn-primary" type="button" onclick="id=1">Axis Assignment</button></a>
        </div>
    </section>


        <section id = "1" class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
            <div class = "col-md-6">
                <img src="../../images/CommandeFSUIPC5.png" alt="Card image"/>
            </div>
            <div class ="col-md-4">
                <h1>Etape 5</h1>
                <p>Une fois sur cette page vous devrez :</p>
                <li>Vérifiez que la checkbox “<strong>Select for FS control</strong>” est cochée. Sinon cochée la. </li>
                <li>Enclenchez/appuyez sur le bouton pour lequel vous souhaitez attribuer une fonctionnalité. Des valeurs vos alors apparaître qui correspondent à un bouton en particulier.</li><br/>
                <li>Choisissez la commande que vous souhaitez affecter dans la liste “<strong>Control sent when button pressed</strong>”.</li><br/>
                <li>Si c’est un bouton de type switch avec un état On et un état Off. 
                Choisissez la même commande que vous souhaitez affecter dans la liste “<strong>Control sent when button released</strong>”. Dans “<strong>Parameter</strong>” mettez 1 en haut et 0 en bas.</li><br/>
                <li>Sinon cliquez sur “<strong>OK</strong>” et vérifié que votre commande est fonctionnelle.</li>

            </div>
        </section>
    
        <section id = "2" class="clean-block clean-hero" style="background-color:white;">
            <div class = "col-md-6">
                <img src="../../images/CommandeFSUIPC6.png" alt="Card image"/>
            </div>
            <div class ="col-md-4">
                <h1>Etape 6</h1>
                <p>Une fois sur cette page vous devrez :</p>
                <li>Enclenchez la commande pour laquelle vous souhaitez attribuer une fonctionnalité. Des valeurs vos alors apparaître dans les encadrés rouge qui correspondent à un bouton en particulier.</li><br/>
                <li>Choisissez la commande que vous souhaitez affecter dans la liste “<strong>Control sent when range entered</strong>”.</li><br/>
                <li>Si c’est une commande ayant deux effets sur le même axe (augmentation/diminution des gaz). Choisissez la même commande que vous souhaitez affecter dans la liste “<strong>Control sent when range exited</strong>”. Dans “<strong>Parameter</strong>” mettez 1 en haut et 0 en bas.</li><br/>
                <li>Sinon cliquez sur “<strong>OK</strong>” et vérifié que votre commande est fonctionnelle.</li>

            </div>
        </section>
    
</main>
<div id="customPopup">
     <h3>Attribution de nouvelles commandes</h3>
     <video controls src="../../videos/FSUIPC.mp4" >Créer un plan de vol</video>
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
</html>
<?php include_once "../footer.php"; ?>