
<?php
session_start();
$_SESSION['page']="aeronautique";
include_once "../header.php";
?>
<div class='container'>
    <div class='row'>
        <div class='col-md-1'></div>
        <div class='col-md-10'>
            <br/><br/>
            <h1>- STRUCTURE DES AÉRONEFS -</h1>
            <br/><br/>
            <p>
                Afin de pouvoir prendre en main plus facilement notre simulateur de vol en avion de tourisme (Cessna, Mooney,..), nous vous proposons une courte introduction aux notions de base de l'aéronautique.<br/>
                Cette synthèse a pour but de vous familiariser avec le vocabulaire employé en aéronautique, la base des phénomènes physiques qui surviennent lors du pilotage, et les technologies employées durant un vol.
            </p>
            <hr/>
        </div>
        <div class='col-md-1'></div>

        <div class='row'>
            <div class='col-md-1'></div>
            <div class='col-md-10'>
                <ol>
                    <h4><li>Composition générale d'un aéronef</li></h4>
                    <p>
                        Observons la structure générale d'un avion de tourisme de petite taille : le Jodel D112.
                    </p>
                    <p class='image'>
                        <img src="../../images/Aeronautique/image1.png" alt="Composition générale d'un aéronef" title="Composition générale d'un aéronef"/>
                    </p>
                    <p>
                        De manière générale, quel que soit le type d'avion envisagé et sa fonction, nous retrouvons les mêmes grandes
                        parties dans la structure :
                    <ul>
                        <li>des ailes</li>
                        <li>un fuselage</li>
                        <li>un empennage</li>
                        <li>un ou plusieurs moteurs</li>
                    </ul>
                    </p>
                    <p>
                        Leur forme et leur taille varient en fonction de l'utilisation et des performances demandées. Mais leur fonction reste néanmoins toujours sensiblement la même :
                    <ul>
                        <li>les ailes <span class='important'>créent la portance et permettre le contrôle en roulis</span>.</li>
                        <li>l'empennage <span class='important'>assure la stabilité et le contrôle en tangage et en lacet</span>.</li>
                        <li>les moteurs <span class='important'>permettent d'obtenir la vitesse nécessaire au vol</span>.</li>
                        <li>le fuselage <span class='important'>permet d'accueillir l'équipage et le chargement de l'avion</span>.</li>
                    </ul>
                    </p>
                    <p>
                        Certains avions sont optimisés pour des décollages et atterrissages courts, on les qualifie de ADAC ou STOL
                        (Short TakeOff and Landing), voir verticaux, on les qualifie alors de ADAV ou VTOL (Vertical TakeOff and Landing).
                    </p>
                    <hr/>

                    <h4><li>Les différentes formules aérodynamiques</li></h4>
                    <ol type='A'>
                        <strong><li>Les ailes</li></strong>
                        <ul>
                            <u><li>Formes classiques d'ailes</li></u>
                            <p>
                                Les ailes des avions peuvent prendre des formes très différentes en fonction des performances demandées à l'aéronef :
                                vitesse de croisière, masse de l'appareil, ...<br/>
                                Leur rôle reste néanmoins toujours le même : assurer la sustentation de l'appareil.<br/>
                                Voici les exemples les plus classiques de formes d'ailes :
                            </p>
                            <p class='image'>
                                <img src="../../images/Aeronautique/image2.png" alt="Différents types d'ailes" title="Différents types d'ailes"/><br/>
                            </p>
                            <p>
                                Pour pouvoir s'adapter à des plages de vitesse très larges, d'environ 200 à plus de 2000km/h, certains avions de combat
                                sont munis d'une voilure à géométrie variable.<br/>
                                Les ailes peuvent également être disposées différemment par rapport au fuselage. Elles peuvent être en position haute, médiane ou basse :
                            </p>
                            <p class='image'>
                                <img src="../../images/Aeronautique/image5.png" alt="Ailes en position basse et haute" title="Ailes en position basse et haute"/>
                                <img src="../../images/Aeronautique/image6.png" alt="Ailes en position médiane" title="Ailes en position médiane"/>
                            </p>
                            <u><li>Dièdre des ailes</li></u>
                            <p>
                                Les ailes peuvent aussi être calées différemment par rapport au plan horizontal. On parle alors du <span class='important'>dièdre</span> des ailes.
                                Il s'agit de l'angle entre le plan horizontal et la plan d'une aile. Il est positif si le plan de l'aile est au-dessus de l'horizontale et négatif dans le cas contraire.
                            </p>
                            <p class='image'>
                                <img src="../../images/Aeronautique/image3.png" alt="Dièdres nul et négatif" title="Dièdres nul et négatif"/>
                                <img src="../../images/Aeronautique/image4.png" alt="Dièdre positif" title="Dièdre positif"/>
                            </p>
                            <p>
                                La distance entre les deux extrémités des ailes est appelée <span class='important'>envergure</span> de l'avion. Elle peut aller de 5m à
                                plus de 60m selon les modèles d'avions.
                        </ul>
                        <strong><li>Le fuselage</li></strong>
                        <p>
                            Le fuselage d'un aéronef a pour objectif de <span class='important'>transporter son équipage, son carburant, et sa charge utile (s'il y en a).
                    Il doit également permettre de fixer les différentes parties de l'appareil pour assurer la cohésion de l'ensemble</span>.
                            L'utilisation de plus en plus courante de matériaux composites fait apparaître de plus en plus souvent des fuselages
                            aux formes complexes, dont voici quelques exemples :
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image7.png" alt="Fuselages cylindrique, en coque et carré" title="Fuselages cylindrique, en coque et carré"/>
                        </p>
                        <strong><li>Les empennages</li></strong>
                        <p>
                            L'empennage désigne la <span class='important'>queue</span> de l'avion. Il comporte une partie verticale (<span clas='important'>dérive</span>) et une partie horizontale.
                            Comme pour les autres parties de l'aéronef, il existe différentes géométries possibles qui sont similaires à celles des ailes.
                            L'implantation de l'empennage est également différente selon les avions. Voici les principaux types d'empennages qui existent :
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image8.png" alt="Différents empennages" title="Différents empennages"/>
                        </p>
                    </ol>
                    <hr/>

                    <h4><li>Les dispositifs hypersustentateurs</li></h4>
                    <p>
                        Lors des phases d'approche et de décollage, un avion doit disposer d'une <span class='important'>portance</span> optimale.
                        Au décollage, il faut pouvoir quitter le sol et s'élever le plus rapidement possible. Il faut alors une bonne portance et une faible <span class='important'>traînée</span>.<br/>
                        Pour l'atterrissage, il s'agit de se poser avec la vitesse la plus faible possible. Cela facilite le posé de l'avion et diminue la longueur de piste nécessaire.
                        <span class='important'>Il faut alors la portance la plus grande possible</span>.<br/>
                        Les ingénieurs ont donc développé des dispositifs <span class='important'>hypersustentateurs</span> (<em>augmentant la portance</em>) qui ne servent que dans ces phases de vol.
                        Ces dispositifs augmentent également la résistance de l'air sur l'avion, et il est préférable de les escamoter pour les autres phases de vol.
                    </p>
                    <ol type='A'>
                        <strong><li>Les volets de bord de fuite</li></strong>
                        <p>
                            Les volets de <span class='important'>bord de fuite</span> sont des surfaces mobiles que l'on peut incliner vers le bas. Ils se situent sur le bord arrière de l'aile.
                            Ils en occupent entre 1/3 et 2/3 de la longueur. La plupart des avions en est munie, même les appareils légers. <span class='important'>Ils sont entièrement déployés
                    pour l'atterrissage et au tiers pour le décollage<span>.<br/>
                    Il en existe différents types, les principaux sont présentés ci-dessous :
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image9.png" alt="Différents types de volet de bord de fuite" title="Différents types de volet de bord de fuite"/>
                        </p>
                        <strong><li>Les becs de bord d'attaque</li></strong>
                        <p>
                            On trouve également des dispositifs sur le bord avant de l'aile ayant la même fonction : <span class='important'>Les dispositifs
                    de bord d'attaque amovibles ne sont utilisés, en général, que pour l'atterrissage</span>.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image10.png" alt="Différents types de volet de bord d'attaque" title="Différents types de volet de bord d'attaque"/><br/>
                        </p>
                        <p>Voici quelques exemples hypersustentateurs :</p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image11.png" alt="Exemples de dispositifs hypersustentateurs" title="Exemples de dispositifs hypersustentateurs"/>
                        </p>
                    </ol>
                    <hr/>
                    <h4><li>Les commandes de vol</li></h4>
                    <ol type='A'>
                        <strong><li>Les axes de mouvement</li></strong>
                        <p>
                            Un avion pouvant se déplacer dans l'espace, son mouvement autour centre de gravité peut se décrire selon 3 axes :
                        <ul>
                            <li>l'axe de <span class='important'>tangage (<em>pitch</em>)</span> : axe passant par l'extrémité de chaque aile</li>
                            <li>l'axe de <span class='important'>roulis (<em>roll</em>)</span> : axe longitudinal de l'avion</li>
                            <li>l'axe de <span class='important'>lacet (<em>yaw</em>)</span> : axe perpendiculaire au plan des ailes</li>
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image14.png" alt="Les 3 axes de mouvement d'un avion" title="Les 3 axes de mouvement d'un avion"/>
                        </p>
                        <strong><li>Le contrôle en tangage</li></strong>
                        <p>
                            Une rotation autour de l'axe de tangage permet de monter ou de descendre le nez de l'appareil, et va ainsi le faire <span class='important'>monter ou descendre</span>.
                            Le mouvement est obtenu en faisant bouger une surface mobile située sur l'empennage horizontal, ce que l'on appelle <span class='important'>élévateur (<em>elevator</em>)</span>.<br/>
                            Pour les avions dépourvus d'empennage horizontal, ces surfaces mobiles peuvent se situer sur le bord de fuite de l'aile.<br/>
                            Le mouvement est assuré <span class='important'>en tirant ou en poussant le manche ou le volant (<em>yoke</em>)</span>.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image15.png" alt="Contrôle en tangage" title="Contrôle en tangage"/>
                        </p>
                        <strong><li>Le contrôle en roulis</li></strong>
                        <p>
                            Une rotation autour de l'axe de roulis permet d'incliner les ailes. Cette manoeuvre sert à <span class='important'>mettre l'avion en virage</span>.
                            La commande de roulis est actionnée par l'intermédiaire du manche <span class='important'>en l'inclinant à droite ou à gauche</span>.
                            Le roulis est obtenu en braquant dissymétriquement des surfaces mobiles, appelées <span class='important'>ailerons</span>, situées au bout du bord de fuite de chaque aile.
                            Il arrive que ce contrôle soit assuré par des <em>spoilers></em> situés sur l'extrados des ailes.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image16.png" alt="Contrôle en roulis" title="Contrôle en roulis"/>
                        </p>
                        <strong><li>Le contrôle en lacet</li></strong>
                        <p>
                            La rotation autour de l'axe de lacet est assurée par une commande située aux pieds du pilote, et appelée <span class='important'>palonnier</span>.
                            En le poussant à l'aide du pied droit ou gauche, le pilote actionne une surface mobile située sur la dérive : la commande de direction.
                            La rotation autour de cet axe permet de contrôler l'avion lors de sa course de décollage ou à l'atterrissage. Elle permet également au pilote de maintenir un vol symétrique en croisière.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image17.png" alt="Contrôle en lacet" title="Contrôle en lacet"/>
                        </p>
                        <strong><li>Les effets secondaires des commandes</li></strong>
                        <p>
                            Nous avons décrit l'effet principal des différentes commandes (effet primaire), mais leur action entraîne également des mouvements parasites de l'avion
                            appelés "effets secondaires" des commandes :
                        <ul>
                            <li>la commande de profondeur <span class='important'>est sans effet secondaire</span>.</li>
                            <li>la commande de roulis <span class='important'>entraîne un lacet inverse puis une chute du nez de l'appareil dans l'intérieur du virage</span>.
                            <li>la commande de lacet <span class='important'>entraîne un roulis induit dans le même sens</span>.</li>
                        </ul>
                        <p>
                            Ces effets secondaires nécessitent donc une coordination des mouvements des commandes pour obtenir de l'appareil un mouvement précis.
                            Les effets primaires et secondaires des commandes peuvent être observés sur les simulateurs de vol dont le réalisme est correct.
                        </p>
                        </p>
                        <strong><li>Le contrôle de la vitesse</li></strong>
                        <p>
                            Lors des descentes rapides, les avions peuvent atteindre des vitesses trop importantes.
                            Leur structure ne résiste pas aux efforts aérodynamiques qui s'exercent alors sur les ailes ou le fuselage, et l'avion peu <span class='important'>se déformer voire se disloquer en vol</span>.<br/>
                            Au décollage, ou à l'atterrissage, les dispositifs hypersustentateurs ne sont pas calculés pour supporter des efforts aérodynamiques importants. Lors des vols contrôlés, les aiguilleurs imposent aux avions des
                            vitesses qui permettent de les espacer entre eux. Il est donc très important de maîtriser la vitesse de son avion.<br/>
                            Pour cela, le pilote dispose de deux possibilités :
                        <ul>
                            <li><span class='important'>le moteur : la commande de gaz permet au pilote de réguler la puissance fournie par le moteur</span>.</li>
                            <li><span class='important'>les aérofreins ou les spoilers : <strong>freins aérodynamiques</strong>.
                        </ul>
                        Les aérofreins sont des plaques que l'on déploie perpendiculairement à l'avion pour offrir une plus grande traînée.Les spoilers ont pour effet de diminuer la portance, obligeant ainsi le pilote à augmenter
                        l'incidence pour maintenir sa trajectoire, et ainsi augmenter également la traînée. Ces dispositifs s'utilisent quand le contrôle au moteur ne suffit pas.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image18.png" alt="Freins aérodynamiques" title="Freins aérodynamiques"/>
                        </p>
                        <strong><li>Les dispositifs de transmission</li></strong>
                        <p>
                            Pour commander les gouvernes, le pilote dispose d'un manche/volant et de palonniers.<br/>
                            Le manche permet de commander <span class='important'>les élévateurs (profondeur)</span> par un mouvement en avant ou en arrière, et <span class='important'>les ailerons (gauchissement)</span> par un mouvement
                            à droite ou à gauche. Pour envoyer l'ordre donné aux commandes par le pilote vers les gouvernes, on utilise divers systèmes de transmission.<br/>
                            Le plus ancien consiste à transmettre le mouvement du manche vers les commandes par l'intermédiaire de câbles métalliques et de poulies. Les câbles de la profondeur
                            permettent de faire bouger les surfaces mobiles de l'empennage de façon symétrique. Ainsi, lorsque l'on tire sur le manche, les élévateurs se soulèvent. Cela provoque une montée du nez de l'avion.
                            Inversement, lorsque l'on pousse sur le manche, les élévateurs descendent et le nez de l'avion descend également.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image19.png" alt="" title=""/>
                        </p>
                        <p>
                            Les mouvements du gauchissement permettent de créer un mouvement opposé des deux ailerons. Lorsque l'on incline le manche à gauche, l'aileron gauche se lève et l'aileron droit se baisse.
                            L'aile gauche s'enfonce tandis que l'aile droite remonte.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image20.png" alt="" title=""/>
                        </p>
                        <p>
                            La direction est câblée de façon à ce que le mouvement de la gouverne soit créé par le déplacement simultané des deux côtés du palonnier.
                            Lorsque l'on enfonce le pied <strong>droit</strong>, la gouverne de direction tourne autour de son axe dans le même sens que le palonnier. Le nez de l'avion tourne alors <span class='important'>vers la droite</span>.
                            Et inversement, si l'on enfonce le pied <strong>gauche</strong>.
                        </p>
                        <p class='image'>
                            <img src="../../images/Aeronautique/image21.png" alt="" title=""/>
                        </p>
                    </ol>
                </ol>
            </div>
            <div class='col-md-1'></div>
        </div>
		<?php include_once "../footer.php"; ?>
