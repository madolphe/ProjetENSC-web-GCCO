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
	<div class="row" id="volant">
		<table class="table">
				<tr>
					<td colspan="2"><h3>Le volant ou Yoke</h3></td>
				</tr>

				<tr>
				  <td class="text-center"><img class="img-materiel" src="../../images/Volant.jpg" alt="volant"></td>
				  <td><p>On trouve au centre du simulateur ce qu'on appelle le <b>volant</b> ou <b>yoke</b>.</p></td>
				</tr>

				<tr>
				  <td class="text-center"><img src="../../images/num volant.png" alt="numeros volant"></td>
				  <td><p>Voici plus en détail le rôle de chacun des boutons présents sur le volant :</p></td>
				</tr>

				<tr>
					<td colspan="2"><h3>Les manettes des gaz</h3></td>
				</tr>

				<tr>
					<td class="text-center"><img class="img-materiel" src="../../images/Manettes de gaz.jpg" alt="manettes des gaz" height="200" width ="100"></td>
				  	<td><p>On trouve au centre du simulateur ce qu'on appelle le <b>volant</b> ou <b>yoke</b>.</p></td>
				</tr>
		</table>
	</div>
</div>
 
<?php include_once "../footer.php"; ?>