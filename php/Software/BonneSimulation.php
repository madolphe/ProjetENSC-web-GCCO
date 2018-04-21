<?php
session_start();
$_SESSION['page']="software";
include_once "../header.php";
?>
<div class="container" id="text-container">
	<h1>Simulation de vol</h1>

	<p>
	<h3> Créer une simulation immersive: </h3>
		Avant de parler des logiciels utilisés afin de permettre la simulation de vol, il est intéressant de se demander quelles sont, en théorie, les bonnes pratiques à suivre
		afin de créer un caractère immersif à l'expérience.
		Définissons tout d'abord l'immersion:
		Le phénomène d’immersion dans un environnement virtuel n’est pas simple à définir. En
		effet, cela dépend d’où on se place par rapport à l’environnement virtuel : la définition
		diffère si l’on considère l’immersion comme étant originaire de la technologie utilisée, ou si
		on considère que l’immersion est un état de l’utilisateur. Dans le premier cas, l’immersion
		serait donc le produit de la technologie qui permet de faciliter la production d’input
		sensoriels multimodaux envers l’utilisateur ; alors que dans le second cas, l’immersion relève
		d’un ressenti psychologique et dépend donc des utilisateurs. Ainsi, l’immersion peut avoir
		plusieurs définitions selon les auteurs. Voici une définition possible si l’on se place dans le
		second cas (l’immersion du point de vue utilisateur) : Le sentiment d’immersion (qu’il soit
		physique ou psychologique), est le fait chez l’utilisateur de ne plus se sentir dans le monde
		réel, mais qu’il est maintenant « présent » dans l’environnement virtuel (Sadowski &amp;
		Stanney, 2002). Dans la plupart des définitions de l’immersion du point de vue de
		l’utilisateur dans la littérature, on retrouve tout de même les notions d’ « état
		psychologique » et d’ « absorption » dans le milieu virtuel.
	</p>
	<p>
		<h4>En pratique, quels sont les critères à respecter ?</h4>
		Il est difficile de définir avec exactitude la totalité des critères permettant une bonne
		immersion. Ceux qui vont être cités ont tous pour objectif de rendre l’expérience virtuelle
		réaliste pour l’utilisateur. On doit donc s’approcher le plus possible d’une expérience réelle.
		Le monde virtuel doit donc avoir un haut niveau de fidélité sensorielle, c’est-à- dire que les
		signaux que reçoit l’utilisateur doivent être ceux expérimentés dans le monde réel. Il est
		donc important qu’il y ait une concordance entre le feedback proprioceptif du participant par
		rapport aux mouvements du corps et l’information générale générée par le simulateur.
		Nous allons ci-après élaborer une liste détaillée de certains critères importants concernant
		l’immersion. Tout d’abord, on peut diviser les critères d’immersion en deux catégories : ceux
		concernant l’affichage et ceux concernant divers aspects sensoriels (autre que ceux
	concernant l’affichage).
	</p>
	<p>
		<h5>Pour l'affichage:</h5>
		Les critères concernant l'affichage sont les suivants:
		<ul>
			<li>La taille du plan doit être vu instantanément, elle doit donc être quelque chose de proche du
				champ visuel (en anglais FOV : field of view).</li>
			<li>La taille totale du champ qui entoure l’utilisateur, c’est-à- dire tout ce qui peut être
				vu en bougeant la tête (en anglais FOR : field of regard).</li>
			<li>La taille de l’affichage du simulateur.</li>
			<li>La résolution de ce même affichage (qui peut s’apparenter à la qualité de l’image).</li>
			<li>La stéréoscopie, qui traduit le fait que l’on diffuse des images différentes à chaque
				œil de l’utilisateur, ce qui permet d’augmenter les effets de profondeur (se retrouve
				dans la 3D).</li>
			<li>L’adaptabilité de l’affichage, c’est-à- dire qu’il doit se baser sur la position et
				l’orientation de la tête de l’utilisateur.</li>
			<li>Le réalisme de l’affichage.</li>
			<li>Le taux de rafraichissement, qui se traduit sur l’écran par la fluidité de l’image vue
				par l’utilisateur.</li>
		</ul>
		L’affichage se doit donc d’être :
		<ul>
			<li>Extensible : il doit s’adapter à de nombreux systèmes sensoriels.</li>
			<li>Englobant : il doit s’adapter à la position du sujet : l’information arrive aux organes
				sensoriels par n’importe quelle direction de façon appropriée.</li>
			<li> Inclusif : les éléments sensoriels du milieu extérieur sont exclus.</li>
			<li>Vivant : traduit la variété et la richesse de l’information sensorielle. Cela prend en
				compte le contenu de l’information, ainsi que la résolution et la qualité de l’affichage.</li>
		</ul>
	</p>
	<p>
		<h5> Les autres critères d'immersion: </h5>
	<ul>
		Le son est aussi très important dans les simulateurs. Il faut qu’il soit le plus possible de
		qualité et spatial (il doit provenir de plusieurs directions différentes).
		L’utilisateur joue un rôle fondamental dans l’immersion. En effet, il a été montré que
		certains facteurs tels que l’âge ou la motivation du participant avaient une influence sur le
		ressenti concernant le degré d’immersion. Il est donc à prendre en compte que même si tous
		les critères d’affichage cités ci-dessus sont respecté, certains biais psychologiques et
		physiologiques peuvent altérer la perception de l’immersion.
		On peut ainsi citer d’autres facteurs influençant l’immersion :
		<li>L’isolation par rapport au monde physique.</li>
		<li>La sensation d’être inclut dans l’environnement virtuel.</li>
		<li>Une perception naturelle des actions d’interactions et de contrôle sur
			l’environnement.</li>
		<li>La perception du mouvement dans l’environnement virtuel
			Il faut donc que l’utilisateur se sente partie de l’environnement qu’il est en train
			d’influencer.</li>
	</ul>

	</p>
</div>
<?php include_once "../footer.php"; ?>


