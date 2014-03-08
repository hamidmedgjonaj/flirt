<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if ($username != NULL && $password != NULL) {
    $usersRepository = new UsersRepository();

    $user = $usersRepository->checkCredentials($username, $password);

    if ($user != NULL) {
        $_SESSION['FLIRT_USER'] = serialize($user);

        header("Location: " . FULL_URL . "user-profile");
    } else {
        $error = "Nickname und/oder Password sind leider verkehrt. Bitte versuchen Sie es erneut.";
    }
}
?>
