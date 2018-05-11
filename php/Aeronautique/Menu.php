<?php
session_start();
$_SESSION['page']="aeronautique";
include_once "../header.php";
?>
<html>
<body>
<main class="page landing-page">

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class="text">
            <h2> Notions aéronautiques</h2>
            <p> Dans cette rubrique vous apprendrez les notions essentielles au pilotage. 
                En effet, le but étant de vous former aux rudiments aéronautique dans le but de créer des protocoles expérimentaux viables.</p>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
            <img src="../../images/Instruments.jpg" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>Instrumentation</h2>
            <p> Découvrez les instruments nécessaires au pilotage sur un avion de tourisme de type cessna.</p>
                <a href="Instrumentation.php"><button class="btn btn-primary" type="button">Se former</button></a>
        </div>
    </section>

    <section class="clean-block clean-hero" style="background-color:rgb(230, 225, 225);">
        <div class = "col-md-6">
            <img src="../../images/PhaseVol.jpg" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>phases de vol</h2>
            <p> Apprenez les différentes phases de vol pour connaître les moments les plus critiques d'un vol.</p>
                <a href="PhaseVol.php"><button class="btn btn-primary" type="button">Se former</button></a>
        </div>
    </section>
    <section class="clean-block clean-hero" style="background-color:white;">
        <div class = "col-md-6">
                <img src="../../images/glasscockpit.jpg" alt="Card image"/>
        </div>
        <div class ="col-md-4">
            <h2>Développer vos connaissances</h2>
                <p> Enrichissez vos connaissances pour aller plus loin. Cette rubrique vous aidera si vous passer le BIA.</p>
                <a href="AllerPlusLoin.php"><button class="btn btn-primary" type="button">Se former</button></a>
            
        </div>
    </section>
</main>
</body>
</html>
<?php include_once "../footer.php"; ?>