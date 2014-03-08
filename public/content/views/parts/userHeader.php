<?php 
if (!isset($_SESSION['FLIRT_USER'])) {
    Header("Location:".FULL_URL);
}
require_once(CONTROLLERS_FOLDER . "login.php"); 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Find Love 18</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'/>

        <base href="<?php print PUBLIC_URL; ?>"/>

        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>

        <?php
        $user = unserialize($_SESSION['FLIRT_USER']);
        ?>
        <div class="content header clearfix">
            <div class="col-3">
                <a class="logo" href="<?php print FULL_URL; ?>">
                    <img src="img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="col-4 right">
                <div class="left margin_top_15">
                    <h2 class="right">Hallo <?php print $user->getUsername(); ?>, <a href="<?php print FULL_URL; ?>logout">Logout</a></h2>
                    <h3 class="underline right">Dein Score beträgt 1025</h3>
                </div>
                <img class="profile right" src="img/foto1.jpg" alt="Foto">
            </div>
        </div>
        <div class="content clearfix">
            <div class="col-12">
                <ul class="navigation clearfix">
                    <li><a class="active" href="#">Home</a>
                        <ul>
                            <li><a href="<?php print FULL_URL; ?>user-profile">Startseite</a></li>
                            <li><a href="<?php print FULL_URL; ?>kronkorken">Kronkorken</a></li>
                            <li><a href="<?php print FULL_URL; ?>mein-pofil">Mein Profil</a></li>
                            <li><a href="<?php print FULL_URL; ?>meine-bilder">Meine Bilder</a></li>
                            <li><a href="<?php print FULL_URL; ?>meine-freunde">Meine Freunde</a></li>
                            <li><a href="<?php print FULL_URL; ?>freunde-einladen">Freunde einladen</a></li>
                            <li><a href="<?php print FULL_URL; ?>geblockte-mitglieder">Geblockte Mitglieder</a></li>
                            <li><a href="<?php print FULL_URL; ?>geschenke">Geschenke</a></li>
                            <li><a href="<?php print FULL_URL; ?>logout">Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php print FULL_URL; ?>postfach">Postfach</a></li>
                    <li><a href="<?php print FULL_URL; ?>mitglieder">Mitglieder</a></li>
                    <li><a href="#">Ice-Breaker</a></li>
                </ul>
            </div>
        </div>
