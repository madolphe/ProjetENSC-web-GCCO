<?php
session_start();
$_SESSION["page"]="hardware";
include_once "../header.php";
?>


<div class="container" id="text-materiel">
	<h3>Le simulateur</h3>
	<p>Nous allons parler ici de la partie <b>matérielle</b> du simulateur.
	<br/>
	En voici un aperçu :
	<br/>
	<i>Image du simu</i></p>
	<hr/>
</div>

<div class="container" id="text-materiel">
	<h3>Le volant ou Yoke</h3>
	<div class="row" id="volant">
		<table class="table">
			<tbody>
				<tr>
				  <td><img src="../../images/Volant.jpg" alt="volant" align="left" height="100" width ="200"></td>
				  <td><p>On trouve au centre du simulateur ce qu'on appelle le <b>volant</b> ou <b>yoke</b>.</p></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
 
<?php include_once "../footer.php"; ?>