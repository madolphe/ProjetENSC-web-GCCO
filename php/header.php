
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjetCessna</title>
    <?php if($_SESSION["page"]=="index"){?>
	<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css"> <?php } else { ?>
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/FSX.css">
		<link rel="stylesheet" href="../../css/AttributionCommandes.css">
    <?php  } ?>
    <script type="text/javascript" src="../js/canvas.js"></script>
</head>
<body onload="draw();">
<?php
if($_SESSION["page"]=="index"){
	$index="active";
	$aero="";
	$soft="";
	$hard="";
}
if($_SESSION["page"]=="aeronautique"){
	$aero="active";
	$soft="";
	$hard="";
	$index="";
}
if($_SESSION["page"]=="software"){
	$soft="active";
	$hard="";
	$index="";
	$aero="";
}
if($_SESSION["page"]=="hardware"){
	$hard="active";
	$index="";
	$aero="";
	$soft="";
}
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php if(empty($index)){echo "../";}?>index.php">Cessna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo $index ?>">
                    <a class="nav-link" href="<?php if(empty($index)){echo "../";}?>index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $aero ?>">
                    <a class="nav-link" href="<?php if(empty($index)){echo "../";}?>Aeronautique/Aeronautique.php">Aéronautique</a>
                </li>
                <li class="nav-item <?php echo $soft ?>">
                    <a class="nav-link" href="<?php if(empty($index)){echo "../";}?>Software/BonneSimulation.php">Simulation</a>
                </li>
                <li class="nav-item <?php echo $hard ?>">
                    <a class="nav-link" href="<?php if(empty($index)){echo "../";}?>Hardware/MaterielADisposition.php">Matériel</a>
                </li>
            </ul>
        </div>
    </nav>

