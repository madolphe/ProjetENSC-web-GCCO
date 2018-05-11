<?php
session_start();
$_SESSION['page']="index";
include_once "header.php";
?>
<head>
    <link rel="stylesheet" href="../css/Projet.css">
</head>
<html>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col-md-1'></div>
            <div class='col-md-10'>
            <br/><br/>
            <h1>- Le projet Cessna -</h1>
                <br/><br/>
                <p>
                 Cette page est déstinée à présenter nos impressions sur le projet et ainsi parler des objectifs qui ont été fixés tous au long de l'année. 
                 Mais également, d'inclure une partie sur la gestion de notre projet, les points cruciaux, les avancées, les problèmes rencontrés,..  
                </p>
                <hr/>
            </div>
        </div>
        <div class='col-md-1'></div>

        <div class='row'>
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <ol>
            <h4><li>Présentation du contexte</li></h4>
                <p>
                C'est dans cette esprit que plusieurs étudiants ingénieurs de l'ENSC ont souhaité répondre à l'appel de projet initié autour d'un simulateur de vol pour A320.
    Ce fort engouement de la part des étudiants, a permis au client principal, M Théodore Letouzé, de proposé deux axes de recherche supplémentaires dont le projet Cessna fait partie.
    Ce travail, que vous vous apprété à découvrir, s’articule autour d’un cockpit monoplace déjà existant au sein de l’ENSC, appartenant à l’IMS et situé dans la plateforme technologique de l'école.
    Ce cockpit était, lors du démarrage du projet, inutilisé en raison d’un matériel contraignant (vidéoprojecteur) et peu immersif (environnement de vol peu convainquant). Enfin, certaines commandes analogiques du cockpit n’étaient plus fonctionnelles.
    Ce simulateur est d’une part destiné aux professeurs et aux élèves de l’ENSC (Ecole Nationale Supérieure de Cognitique) -représentés par M. Letouzé et M. André- dans le cadre de travaux pratiques. De même il doit être exploitable par les chercheurs de l’IMS (Intégration du Matériau au Système) pour une utilisation plus expérimentale.
    Finalement, ce simulateur devra être fonctionnel et plus immersif (avec éventuellement l’ajout de nouvelles options comme des écrans tactiles). La remise en état de ce simulateur est nécessaire afin de répondre à un besoin d’utilisation éducative et scientifique.
    Il s'agissait donc :
    <br>
                    <ul>
                        <li>de faire un état du simulateur tant d'un point de vue software que hardware. </li>
                        <li>de rendre fonctionnel le simulateur en ayant pour contrainte qu'il soit déplaçable.</li>
                        <li>de permettre son utilisation tant d'un point de vue éducatif qu'expérimental.</li>
                    </ul>
                </p>
                
                
                
                <hr/>

            <h4><li>Nos impressions</li></h4>
                        <p>
                            Ce projet nous a permis soit de découvrir plus en détail l'aéronautique soit d'enrichir nos connaissances. En effet, afin de mener à bien ce projet, il s'agissait de faire un état de l'art sur les bases de l'aéronautique et ainsi comprendre les instruments nécessaires à un vol.
                            De plus, tout au long du projet, nous avons fait appel à des experts tant d'un point de vue simulation que d'un point de vue aéronautique. Cela nous a permis d'échanger et d'apprendre plus vite les méthodes à employer pour remettre le simulateur en état.
                            Un autre point crucial est la gestion d'un projet sur toute une année avec des objectifs et des dates importantes. Ce travail est extèmenent formateur et permet d'appréhender le métier d'ingénieur avec la création d'un cahier des charges, d'un planning, d'un contact avec le client,... 
                            Tous ces points nous ont permis d'acquérir une certaine autonomie dans la gestion et la réalisation d'un projet qui s'effectue en groupe, ce qui amène un autre point important, le travail d'équipe.
                            Le travail d'équipe était essentiel à la réalisation des objectifs car c'est en équipe que les idées et les compétences de chacun ont réellement pu s'exprimer. Le projet était très interessant, les objectifs ont pu être atteints avec un simulateur fonctionnel et prêt à l'emploie.  
                        </p>     
                <hr/>
                <h4><li>Objectifs</li></h4>
                        <p>
                            Voici un petit récapitulatif des objectifs qui ont été formulés et atteints tout au long de l'année. 

                        </p>
                        <div class="container">        
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Objectifs</th>
                                <th>Date début</th>
                                <th>Date Fin</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Faire un bilan fonctionnel de l’état du simulateur</td>
                                <td>16/10/2017</td>
                                <td>04/12/2017</td>
                            </tr>
                            <tr>
                                <td>Définir les coûts et commander le matériel nécessaire.</td>
                                <td>16/10/2017</td>
                                <td>22/01/2018</td>
                            </tr>
                            <tr>
                                <td>Proposition d’amélioration avec commande du matériel</td>
                                <td>04/12/2017</td>
                                <td>22/01/2018</td>
                            </tr>
                            <tr>
                                <td>Prendre en main FSUIPC et rendre fonctionnel les commandes du simulateur</td>
                                <td>29/01/2018</td>
                                <td>01/03/2018</td>
                            </tr>
                            <tr>
                                <td>Réaliser des scénarii de vol avec construction de tests utilisateurs</td>
                                <td>29/01/2018</td>
                                <td>01/03/2018</td>
                            </tr>
                            <tr>
                                <td>Faire valider par des experts</td>
                                <td>29/01/2018</td>
                                <td>01/03/2018</td>
                            </tr>
                            <tr>
                                <td>Rédaction de la documentation technique et du site web</td>
                                <td>01/03/2018</td>
                                <td>28/05/2018</td>
                            </tr>
                            <tr>
                                <td>Ajustements du simulateur pour le rendre mobile</td>
                                <td>01/03/2018</td>
                                <td>28/05/2018</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
            </ol>
        </div>
        </div>
        <div class='col-md-1'></div>
    </div>
</body>

<?php include_once "footer.php"; ?>
</html>