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

<div class="container">
	<h3>Matériel cockpit</h3>

	<h4>Partie affichage (écran)</h4>
	<ul>
		<li>Câble d'alimentation</li>
		<li>Câble d'affichage</li>
	</ul>

	<hr/>

	<h4>Partie électronique</h4>
	<ul>
		<li>Manette des gaz
			<li>Un câble USB (relié au manche)</li>
		</li>
		<li>manche
			<li>Un câble USB (relié au répartiteur)</li>
		</li>
	</ul>
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
					<td class="text-center"><img class="img-materiel" src="../../images/Manettes de gaz.jpg" alt="manettes des gaz"></td>
				  	<td><p>A droite du volant se trouve les <b>manettes des gaz</b>.</p></td>
				</tr>

				<tr>
				  <td class="text-center"><img src="../../images/num manette gaz.png" alt="numeros manette"></td>
				  <td><p>Voici plus en détail le rôle de chacun des boutons présents sur les manettes des gaz :
				  </p>
				  <br/>
				  <p class = "legende">1. Manette des gaz (régime moteur)</p>
				  <p class = "legende">2. Non utilisée ici</p>
				  <p class = "legende">3. Gestion de l'influx air / essence</p>
				  <p class = "legende">4. Non utilisée ici</p>
				  <p class = "legende">5. Non utilisée ici</p>
				  <p class = "legende">6. Non utilisée ici</p>
				  </td>
				</tr>

				<tr>
					<td colspan="2"><h3>Le panneau de commande droit</h3></td>
				</tr>

				<tr>
					<td class="text-center"><img class="img-materiel" src="../../images/Panneau droite.jpg" alt="panneau droite"></td>
				  	<td><p>A droite du volant, au-dessus des manettes des gaz, se trouve tout un panneau avec diverses fonctionnalités.</p></td>
				</tr>

				<tr>
				  <td class="text-center"><img src="../../images/num panneau commande droit.png" alt="numeros panneau commande droit"></td>
				  <td><p>Voici plus en détail le rôle de chacun des boutons présents sur le panneau de commande droit :
				  </p>
				  <br/>
				  <p class = "legende">1. Commande TRIM verticale (compensateur)</p>
				  <p class = "legende">2. Train d'atterrissage</p>
				  <p class = "legende">3. Indications lumineuses</p>
				  <p class = "legende">4. Commande des volets</p>
				  </td>
				</tr>

				<tr>
					<td colspan="2"><h3>Le panneau de commande gauche</h3></td>
				</tr>

				<tr>
					<td class="text-center"><img class="img-materiel" src="../../images/Panneau gauche.jpg" alt="panneau gauche"></td>
				  	<td><p>Enfin, à gauche du volant se trouve tout un panneau avec diverses fonctionnalités.</p></td>
				</tr>

				<tr>
				  <td class="text-center"><img src="../../images/num panneau commande gauche.png" alt="numeros panneau commande gauche"></td>
				  <td><p>Voici plus en détail le rôle de chacun des boutons présents sur le panneau de commande gauche :
				  </p>
				  <br/>
				  <p class = "legende">1. Non utilisé ici</p>
				  <p class = "legende">2. Démarrage / extinction moteur</p>
				  <p class = "legende">3. Non fonctionnel</p>
				  <p class = "legende">4. Mise sous tension de la batterie</p>
				  <p class = "legende">5. </p>
				  <p class = "legende">6. Mise sous tension des instruments de navigation</p>
				  <p class = "legende">7. Pompe à essence</p>
				  <p class = "legende">8. Réchauffage du carburant</p>
				  <p class = "legende">9. Dégivrage de la prise pitot</p>
				  <p class = "legende">10. Non utilisé ici</p>
				  <p class = "legende">11. Non utilisé ici</p>
				  <p class = "legende">12. Ouverture du capot</p>
				  <p class = "legende">13. Lumière tableau de bord</p>
				  <p class = "legende">14. Lumière de queue (clignotante rouge)</p>
				  <p class = "legende">15. Lumière de navigation (rouge sur l'aile gauche et verte sur l'aile droite)</p>
				  <p class = "legende">16. Lumière de bout d'aile (clignotante blanche)</p>
				  <p class = "legende">17. Lumière pour la phase de roulage et d'atterrissage</p>
				  <p class = "legende">18. Lumière pour la phase de roulage et d'atterrissage (avions légers)</p>
				  </td>
				</tr>
		</table>
	</div>
</div>
 
<?php include_once "../footer.php"; ?>