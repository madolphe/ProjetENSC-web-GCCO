
<?php session_start();
$_SESSION["page"]="index";
include_once "header.php"; ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A propos de nous</title>
    <link rel="stylesheet" href="../css/Equipe.css" />
</head>

<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">L'équipe</h2>
            <p class="text-center">Voici l'équipe qui compose le projet transdisciplinaire Cessna pour l'année 2017-2018.</p>
        </div>
        <div class="row ">
            <div class="col-md-2 col-lg-4 item">
                <div class="box"><img src="../images/max.jpg" class="rounded-circle" />
                    <h3 class="name">Maxime Adolphe</h3>
                    <p class="title">Formation</p>
                    <p class="description"><li>Prépa MPSI</li><li>Prépa MP</li></p>
                </div>
            </div>
            <div class="col-md-2 col-lg-4 item">
                <div class="box"><img src="../images/Raphou.png" class="rounded-circle" />
                    <h3 class="name">Raphael Chirac</h3>
                    <p class="title">Formation</p>
					<p class="description"><li>Licence MIASHS (Mathématiques et Infortmatique appliquées aux Sciences Humaines et Sociales).</li>
					<li>Master 1 d'ergonomie</li></p>
                </div>
            </div>
            <div class="col-md-2 col-lg-4 item">
                <div class="box"><img src="../images/Valou.png" class="rounded-circle" />
                    <h3 class="name">Valentin Debenay</h3>
                    <p class="title">Formation</p>
					<p class="description"><li>Pépa INP (Réunion + Nancy)</li>
					<li>Enseirb-Matmeca Filière informatique</li></p>
				</div>
			</div>
			<div class="col-md-2 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="../images/Lylou.png" />
                    <h3 class="name">Lylia Fauvel</h3>
                    <p class="title">Formation</p>
                    <p class="description"><li>Licence MIASHS (Mathématiques et Infortmatique appliquées aux Sciences Humaines et Sociales).</li></p>
				</div>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php" ?>
