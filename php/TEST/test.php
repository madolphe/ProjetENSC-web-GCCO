<?php
/**
 * Created by PhpStorm.
 * User: adolphemaxime
 * Date: 20/04/2018
 * Time: 21:43
 */?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Arbo</title>
	<script type="text/javascript">
		function draw() {
            var canvas = document.getElementById('lien1');
            var ctx = canvas.getContext('2d');
            if (canvas.getContext) {
				ctx.beginPath();
                ctx.moveTo(150,20);
                ctx.lineTo(850,20);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(150,20);
                ctx.lineTo(150,70);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(500,0);
                ctx.lineTo(500,70);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(850,20);
                ctx.lineTo(850,70);
                ctx.stroke();
                ctx.closePath();
            }
            var canvas = document.getElementById('lien2');
            var ctx = canvas.getContext('2d');
            if (canvas.getContext) {
                ctx.beginPath();
                ctx.moveTo(150,0);
                ctx.lineTo(150,50);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(500,0);
                ctx.lineTo(500,50);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(850,0);
                ctx.lineTo(850,50);
                ctx.stroke();
                ctx.closePath();
            }
            var canvas = document.getElementById('lien3');
            var ctx = canvas.getContext('2d');
            if (canvas.getContext) {
                ctx.beginPath();
                ctx.moveTo(150,0);
                ctx.lineTo(150,50);
                ctx.stroke();
                ctx.closePath();

                ctx.beginPath();
                ctx.moveTo(500,0);
                ctx.lineTo(500,50);
                ctx.stroke();
                ctx.closePath();

            }
            var canvas = document.getElementById('lien4');
            var ctx = canvas.getContext('2d');
            if (canvas.getContext) {
                ctx.beginPath();
                ctx.moveTo(150,0);
                ctx.lineTo(150,50);
                ctx.stroke();
                ctx.closePath();
                ctx.beginPath();
                ctx.moveTo(500,0);
                ctx.lineTo(500,50);
                ctx.stroke();
                ctx.closePath();
            }
        }
	</script>
</head>
<body onload="draw();">
<?php include "header.php"; ?>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4 text-center">		<button type="button" class="btn btn-outline-primary">Accueil</button>
		</div>
	</div>
	<div class="row text-center">
		<canvas id="lien1" width="1000" height="70" style="margin-left: 75px;"></canvas>
	</div>
	<div class="row">
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary center-block">Aéronautique</button></a>
		</div>
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Simulation</button></a>
		</div>
		<div class="col-4 text-center"> <a href=""><button type="button" class="btn btn-outline-primary">Matériel</button></a>
		</div>
	</div>
	<div class="row text-center">
		<canvas id="lien2" width="1000" height="50" style="margin-left: 75px;"></canvas>
	</div>
	<div class="row">
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Instrumentation</button></a>
		</div>
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Flight Simulator X</button></a>
		</div>
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Notice d'utilisation</button></a>
		</div>
	</div>
	<div class="row text-center">
		<canvas id="lien3" width="1000" height="50" style="margin-left: 75px;"></canvas>
	</div>
	<div class="row">
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Phase de vol</button></a>
		</div>
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Création d'un scénario</button></a>
	</div>
		<div class="row text-center">
			<canvas id="lien4" width="1000" height="50" style="margin-left: 75px;"></canvas>
		</div>
	</div>
	<div class="row">
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Nouvelle technologie</button></a>
		</div>
		<div class="col-4 text-center">	<a href=""><button type="button" class="btn btn-outline-primary">Scénario avec panne</button></a>
		</div>
	</div>
</div>
</body>
</html>
