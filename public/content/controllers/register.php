<?php

$username = filter_input(INPUT_POST, 'rusername');
$password = filter_input(INPUT_POST, 'rpassword');
$repeat_password = filter_input(INPUT_POST, 'repeat_password');
$email = filter_input(INPUT_POST, 'email');
$day = filter_input(INPUT_POST, 'day');
$month = filter_input(INPUT_POST, 'month');
$year = filter_input(INPUT_POST, 'year');
$country = filter_input(INPUT_POST, 'country');
$zipCode = filter_input(INPUT_POST, 'zipCode');
$sex = filter_input(INPUT_POST, 'sex');
$seeking = filter_input(INPUT_POST, 'seeking');
$captcha = filter_input(INPUT_POST, 'captcha');
$agree = filter_input(INPUT_POST, 'agree');
$submit = filter_input(INPUT_POST, 'register');

$countriesRepository = new CountriesRepository();
$countryList = $countriesRepository->getList();

if ($submit != NULL) {
    if ($year != NULL && $month != NULL && $day != NULL) {
        $dob = date($year . '-' . $month . '-' . $day);
    } else if ($username == NULL) {
        echo 'Dein Nickname muss mindestens aus 3 Zeichen und darf maximal aus 15 Zeichen bestehen.';
    } else if (($password == NULL) && ($repeat_password == NULL)) {
        echo 'Kontrolliere nochmal deine Passwortangaben.';
    }
    else if($password != $repeat_password){
        echo 'Kontrolliere nochmal deine Passwortangaben.';
    }
    else if ($email == NULL) {
        echo 'Kontrolliere nochmal deine E-Mail Adresse.';
    } else if ($zipCode == NULL) {
        echo 'Trage bitte deinen Postleitzahl ein.';
    }
    if ($username != NULL && $password != NULL && $email != NULL && $zipCode != NULL) {
        $user = new Users();
        $user->setUsername($username);
        $user->setPassword(md5($password));
        $user->setEmail($email);
        $user->setDob($dob);
        $user->setSex($sex);
        $user->setSeeking($seeking);

        $userRepository = new UsersRepository();
        $userRepository->insert($user);
    }
}