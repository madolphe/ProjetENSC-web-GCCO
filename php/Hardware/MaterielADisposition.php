<?php
session_start();
$_SESSION["page"]="hardware";
include_once "../header.php";
?>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
	<div class="container" id="text-materiel">
		<h3>Le simulateur</h3>
		<p>Nous allons parler ici de la partie <b>matérielle</b> du simulateur.
		<br/>
		En voici un aperçu :
		<br/>
		<i>Image du simu</i></p>
	</div>
</section>

<section class="clean-block clean-hero" style="background-color:white">
	<div class="container">
		<h3>Matériel du cockpit</h3>

		<h4><i>Partie affichage (écran)</i></h4>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Câble d'alimentation</li>
			<li class="list-group-item">Câble d'affichage</li>
		</ul>
		<br/><br/>

		<h4><i>Partie électronique</i></h4>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Manette des gaz
			<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Un câble USB (relié au manche)</i></span>
			</li>
			<li class="list-group-item">Manche
			<br/>
			<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Un câble USB (relié au répartiteur)</i></li>
			<li class="list-group-item">Palonniers
			<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Un câble USB (relié au répartiteur)</i></span>
			</li>
			<li class="list-group-item">Panel droit
			<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Un câble USB (relié au répartiteur)</i></span>
			</li>
			<li class="list-group-item">Panel gauche
			<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Deux câbles USB (relié au répartiteur)</i></span>
			</li>
			<li class="list-group-item">Répartiteur
				<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Câble d'alimentation</i></span>
				<br/>
				<span id="sous_item"><img src="../../images/fleche.jpg" height="20" weight="20"><i>Câble de sortie</i></span>
			</li>
		</ul>
	</div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
	<div class="container">
		<h3>Matériel hors du cockpit</h3>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Une souris</li>
			<li class="list-group-item">Un tapis de souris</li>
			<li class="list-group-item">Un moniteur</li>
			<li class="list-group-item">Une unité centrale hors service</li>
			<li class="list-group-item">Un câble éthernet</li>
			<li class="list-group-item">Une télécommande vidéoprojecteur</li>
			<li class="list-group-item">Un vidéo projecteur</li>
			<li class="list-group-item">Un clavier sans fil</li>
			<li class="list-group-item">Une carte croisière Air France</li>
			<li class="list-group-item">Deux clavier mécaniques filaires</li>
			<li class="list-group-item">Un joystick droitier</li>
			<li class="list-group-item">Manette de gaz supplémentaire</li>
			<li class="list-group-item">Deux enceintes Vaio</li>
			<li class="list-group-item">Une carte référence rapide Flight Simulator X</li>
			<li class="list-group-item">Un tournevis hexagonal</li>
			<li class="list-group-item">10 vis</li>
			<li class="list-group-item">24 patins</li>
			<li class="list-group-item">Un étau</li>
			<li class="list-group-item">Une clé USB</li>
		</ul>
	</div>
</section>

<section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
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
</section>
 
<?php include_once "../footer.php"; ?>