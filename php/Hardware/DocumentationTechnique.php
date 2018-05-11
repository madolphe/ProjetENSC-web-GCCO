<?php
session_start();
$_SESSION["page"]="hardware";
include_once "../header.php";
?>
<main class="page landing-page">

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
    <div class="text">
        <h2> Documentation technique</h2>
        <p> Cette rubrique vous permettra de prendre connaissance des éléments qui constituent le simulateur et leurs intéractions. Dans une deuxième partie, la méthode MASK vous permettra d'appréhender le fonctionnement du simulateur et de Flight simulator X plus en détail.
        Tout cela dans le but de vous transmettre des informations essentielles à la réalisation de vol, de pannes,...</p>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:white">
<div class="text">
        <h2> Matériel</h2>
        <p> Vous connaîtrez sur le bout des doigts les constituants du simulateur.</p>
            <a href="MaterielADisposition.php"><button class="btn btn-primary" type="button">Voir le matériel</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
<div class ="col-md-4">
        <h2> Méthode MASK</h2>
        <p>Cette méthode vous permettra de comprendre ce qu'est une méthode MASK et comment elle peut être employée. Mais surtout de vous offrir un moyen de transmission des connaissances complet et efficace.</p>
            <a href="MethodeMASK.php" ><button class="btn btn-primary" type="button">Voir la méthode</button></a>
    </div>
</section>

</main>
</body>
</html>


<?php include_once "../footer.php"; ?>