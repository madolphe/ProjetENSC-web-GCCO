<?php
session_start();
$_SESSION["page"]="index";
include_once "header.php";
?>
<head>
    <link rel="stylesheet" href="../css/Contact.css">
</head>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Contactez nous</h2>
                <p>Vous avez des problèmes avec le système mis en place. Ou vous avez des questions, n&#39;hésitez pas!</p>
            </div>
            <form>
                <div class="form-group"><label>Name</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Sujet</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Email</label><input class="form-control" type="text" /></div>
                <div class="form-group"><label>Message</label><textarea class="form-control"></textarea></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="button">Envoyer</button></div>
            </form>
        </div>
    </section>
</main>
<?php include_once  "footer.php"?>
