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
            var canvas = document.getElementById('accueil-txt');
            var ctx = canvas.getContext('2d');
			if(canvas.getContext){
                ctx.font = '25px serif';
                ctx.fillText('ACCEUIL', 90 ,35 );
			}
            var canvas = document.getElementById('accueil-txt');
            var ctx = canvas.getContext('2d');
            if(canvas.getContext){
                ctx.font = '25px serif';
                ctx.fillText('ACCEUIL', 90 ,35 );
            }
            var canvas = document.getElementById('accueil-txt');
            var ctx = canvas.getContext('2d');
            if(canvas.getContext){
                ctx.font = '25px serif';
                ctx.fillText('ACCEUIL', 90 ,35 );
            }
			var ctx = document.getElementById('ligne').getContext('2d');
            if(ligne.getContext){
                //ctx.strokeRect(200, 50, 200, 50);
                ctx.beginPath();
                ctx.moveTo(150, 0);
                ctx.lineTo(150, 50);
                ctx.closePath();
                ctx.stroke();
            }
            var ctx = document.getElementById('ligne2').getContext('2d');
            if(ligne.getContext){
                //ctx.strokeRect(200, 50, 200, 50);
                ctx.beginPath();
                ctx.moveTo(150, 0);
                ctx.lineTo(150, 50);
                ctx.closePath();
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(520, 0);
                ctx.lineTo(520, 50);
                ctx.closePath();
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(900, 0);
                ctx.lineTo(900, 50);
                ctx.closePath();
                ctx.stroke();
            }
            var ctx = document.getElementById('ligne3').getContext('2d');
            if(ligne.getContext){
                //ctx.strokeRect(200, 50, 200, 50);
                ctx.beginPath();
                ctx.moveTo(150, 0);
                ctx.lineTo(150, 50);
                ctx.closePath();
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(520, 0);
                ctx.lineTo(520, 50);
                ctx.closePath();
                ctx.stroke();
            }
            var ctx = document.getElementById('ligne4').getContext('2d');
            if(ligne.getContext){
                //ctx.strokeRect(200, 50, 200, 50);
                ctx.beginPath();
                ctx.moveTo(150, 0);
                ctx.lineTo(150, 50);
                ctx.closePath();
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(520, 0);
                ctx.lineTo(520, 50);
                ctx.closePath();
                ctx.stroke();
            }
        }
	</script>
	<style type="text/css">
		canvas.bord { border: 1px solid black; };
	</style>
</head>
<?php include "header.php"; ?>
<body onload="draw();">
<br> <br>
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">		<a href="Accueil.php"><canvas class="bord" id="accueil-txt" width="300" height="50"></canvas></a></div>
	</div>
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4">		<canvas id="ligne" width="300" height="50"></canvas>
		</div>

	</div>
	<div class="row">
		<div class="col-4"><canvas class="bord" id="Aéronautique" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord" id="Simulation" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord" id="Matériel" width="250" height="50"></canvas></div>
	</div>
	<div class="row">
		<canvas id="ligne2" width="1100" height="50"></canvas>

	</div>
	<div class="row">
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
	</div>
	<div class="row">
		<canvas id="ligne3" width="1100" height="50"></canvas>
	</div>
	<div class="row">
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
	</div>
	<div class="row">
		<canvas id="ligne4" width="1100" height="50"></canvas>
	</div>
	<div class="row">
		<div class="col-4"><canvas class="bord" id="canvas" width="250" height="50"></canvas></div>
		<div class="col-4"><canvas class="bord"id="canvas" width="250" height="50"></canvas></div>
	</div>

</div>

</body>
</html>