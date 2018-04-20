<?php
/*header ("Content-type: image/png");
$im = ImageCreate (200, 100)
or die ("Erreur lors de la création de l'image"); //on crée une image aux bonnes dimensions
$couleur_fond = ImageColorAllocate ($im, 255, 0, 0); //on choisit sa couleur de fond
ImagePng ($im); //On l'enregistre au format png */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Canvas tutorial</title>
	<script type="text/javascript">
        function draw() {
            var canvas = document.getElementById('tutorial');
            if (canvas.getContext) {
                var ctx = canvas.getContext("2d");

                /* Rectangle qui se superpose
                ctx.fillRect(25, 25, 100, 100);
                ctx.clearRect(45, 45, 60, 60);
                ctx.strokeRect(50, 50, 50, 50);
                ctx.beginPath();
                Triangle plein:
                ctx.moveTo(75, 50);
                ctx.lineTo(100, 75);
                ctx.lineTo(100, 25);
                ctx.fill();*/

                //Faire un smiley
                /*ctx.beginPath();
                ctx.arc(75, 75, 50, 0, Math.PI * 2, true);  // Cercle extérieur
                ctx.moveTo(110,75);
                ctx.arc(75, 75, 35, 0, Math.PI, false);  // Bouche (sens horaire)
                ctx.moveTo(65, 65);
                ctx.arc(60, 65, 5, 0, Math.PI * 2, true);  // Oeil gauche
                ctx.moveTo(95, 65);
                ctx.arc(90, 65, 5, 0, Math.PI * 2, true);  // Oeil droite
                ctx.stroke();*/
                ctx.beginPath();
                ctx.moveTo(125, 125);
                ctx.lineTo(125, 45);
                ctx.lineTo(45, 125);
                ctx.closePath();
                ctx.stroke();
            }
        }
	</script>
	<style type="text/css">
		canvas { border: 1px solid black; }
	</style>
</head>
<body onload="draw();">
<div class="container">
	<canvas id="tutorial" width="600" height="600"></canvas>
</div>
</body>
</html>