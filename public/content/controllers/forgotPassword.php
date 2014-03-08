<?php

$newPassword = false;
$postEmailStatus = true;

/* RASTI KUR JA QON EMAIL EDHE E RUN HASH NE DATABASE ----------------------- */
$reset_email = filter_input(INPUT_POST, 'reset_email', FILTER_VALIDATE_EMAIL);
/* -------------------------------------------------------------------------- */


/* RASTI KUR E SHKRUN PASSWORDIN E RI QE U REDIREKTU PREJ EMAIL ------------- */
$verification_code = filter_input(INPUT_GET, 'verification_code', FILTER_SANITIZE_STRING);
$verification_email = filter_input(INPUT_GET, 'verification_email', FILTER_VALIDATE_EMAIL);
/* -------------------------------------------------------------------------- */


/* RASTI KU E RUN PASSWORDIN NE DATABASE ------------------------------------ */
$new_password = filter_input(INPUT_POST, 'new_password', FILTER_SANITIZE_STRING);
/* -------------------------------------------------------------------------- */


if ($reset_email != NULL) {
    $usersRepository = new UsersRepository();

    $user = $usersRepository->getByEmail($reset_email);
    if ($user != NULL) {
        $sendEmail = new SendEmail();
        $hash = md5(rand());
        $usersRepository->setHash($hash, $user);

        $resetLink = FULL_URL . "passwort-vergessen?verification_code=$hash&verification_email=$reset_email";

        $sendEmail->send("test@test.com", $reset_email, "Forgot Password", $sendEmail->getForgotPasswordHtml($resetLink));
        $postEmailStatus = false;
        $alert = "You will receive information about reseting your password.";
    } else {
        $error = "This email does not exists!!!";
    }
} else if ($verification_email != NULL && $verification_code != NULL && $new_password != NULL) {
    $usersRepository = new UsersRepository();

    $user = $usersRepository->getByEmailAndHash($verification_email, $verification_code);

    if ($user != NULL) {
        $user->setPassword(md5($new_password));
        $passwordChanged = $usersRepository->update($user);
        $postEmailStatus = false;

        $alert = "Fjalekalimi u ndrrua me sukses.";
    } else {
        $error = "Gabim ne ndrrimin e fjalekalimit !!!";
    }
} else if ($verification_code != NULL && $verification_email != NULL) {
    $usersRepository = new UsersRepository();

    $user = $usersRepository->getByEmailAndHash($verification_email, $verification_code);

    if ($user != NULL) {
        $postEmailStatus = false;
        $newPassword = true;
    }
}
?>
