<?php require_once(CONTROLLERS_FOLDER."login.php"); ?>
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
        if (isset($_SESSION['flirt_user'])) {
            $user = unserialize($_SESSION['flirt_user']);
            ?>
            <div class="content header clearfix">
                <div class="col-3">
                    <a class="logo" href="<?php print FULL_URL; ?>">
                        <img src="img/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col-4 right">
                    <div class="left margin_top_15">
                        <h2 class="right">Hallo <?php $user->getFirstname(); ?>, <a href="<?php print FULL_URL; ?>logout">Logout</a></h2>
                        <h3 class="underline right">Dein Score beträgt <a href="#">1025</a></h3>
                    </div>
                    <img class="profile right" src="img/foto1.jpg" alt="Foto">
                </div>
            </div>
            <div class="content clearfix">
                <div class="col-12">
                    <ul class="navigation clearfix">
                        <li><a class="active" href="#">Home</a>
                            <ul>
                                <li><a href="<?php print FULL_URL; ?>">Startseite</a></li>
                                <li><a href="#kronkorken">Kronkorken</a></li>
                                <li><a href="#mein_profil">Mein Profil</a></li>
                                <li><a href="#partnergramm">Partnergramm</a></li>
                                <li><a href="#meine_bilder">Meine Bilder</a></li>
                                <li><a href="#meine_freunde">Meine Freunde</a></li>
                                <li><a href="#freunde_einladen">Freunde einladen</a></li>
                                <li><a href="#geblockte_mitglieder">Geblockte Mitglieder</a></li>
                                <li><a href="#geschenke">Geschenke</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Postfach</a></li>
                        <li><a href="#">Mitglieder</a></li>
                        <li><a href="#">Ice-Breaker</a></li>
                    </ul>
                </div>
            </div>
            <?php
        } else {
            ?>

            <div class="content header clearfix">
                <div class="col-3">
                    <a class="logo" href="<?php print FULL_URL; ?>">
                        <img src="img/logo.png" alt="Logo" />
                    </a>
                </div>
                <div class="col-7 right">
                    <form method="post">
                        <div class="half">
                            <label>Nickname</label>
                            <input type="text" name="username" />
                            <a class="underline" href="<?php print FULL_URL; ?>passwort-vergessen">Passwort vergessen?</a>
                        </div>
                        <div class="half right">
                            <label>Passwort</label>
                            <input type="text" name="password" />
                            <input class="right" name="login" type="submit" value="Anmelden" />
                        </div>
                    </form>

                    <?php if ($error) print $error; ?>
                </div>
            </div><!-- content -->

        <?php }
        ?>