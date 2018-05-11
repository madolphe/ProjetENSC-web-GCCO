<?php
session_start();
$_SESSION["page"]="hardware";
include_once "../header.php";
?>
<main class="page landing-page">

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
    <div class="text">
        <h2> Méthode Mask</h2>
        <p> Dans le cadre de notre projet transdisciplinnaire, nous avons dû réaliser une transmission des connaissances. En effet, les élèves de première année qui reprendrons le projet devront être à même de maîtriser le fonctionnement du simulateur et de certaines fonctionnalités.
        C'est pour cela que nous avons choisi d'utiliser une méthode MASK qui permet de capitaliser les connaissances que nous avons appris tout au long de se projet. 
        <br/>
        Nous avons choisi de capitaliser la connaissaince "Effectuer un vol simple avec simulateur monoplace en utilisante le logiciel Flight Simulator X". Nous avons choisi cette connaissance car elle permet de comprendre le fonctionnement et les intéractions entre le simulateur et son logiciel. 
        </p>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:white">
<div class="text">
        <h2> Diagramme des tâches</h2>
        <p> Ce diagramme permet de représenter une manière de faire par le biais de tâches bien précises. Celles-ci seront effectuées dans un ordre chronologique et permettra d'atteindre l'objectif cité précédemment. </p>
            <a href="AfficheMindMap.php?val=1" target="_blank"><button class="btn btn-primary" type="button">Voir le diagramme</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
<div class ="col-md-4">
        <h2> Diagramme des activités</h2>
        <p>Le modèle d’activité est un ensemble d’activités corrélées ou interactives qui transforme des éléments d’entrée en éléments de sortie. Il permet ainsi de prendre conscience des intéractions possibles entre les différents du sytème (ici le simulateur) ce qui facilitera l'identification de la source d'un disfonctionnement plus rapidement.</p>
            <a href="AfficheMindMap.php?val=2" target="_blank"><button class="btn btn-primary" type="button">Voir le diagramme</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:white;">
<div class ="col-md-4">
        <h2>Diagramme oidc</h2>
        <p> 	Le modèle OIDC (Opérant, Information, Décision, Connaissance) est un modèle très utile pour délimiter le champ d’étude en fonction des entrées et des sorties.</p>
            <a href="AfficheMindMap.php?val=3" target="_blank"><button class="btn btn-primary" type="button">Voir le diagramme</button></a>
    </div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
    <div class ="col-md-4">
        <h2>diagramme des phénomènes</h2>
        <p> Le modèle des phénomènes illustre les processus mis en jeu pour effectuer un vol simple avec un simulateur de vol et Flight Simulator X.</p>

            <a href="AfficheMindMap.php?val=4" target="_blank"><button class="btn btn-primary" type="button">Voir le diagramme</button></a>
    </div>
</section>

</main>
</body>
</html>


<?php include_once "../footer.php"; ?>