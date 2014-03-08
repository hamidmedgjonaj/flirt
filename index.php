<?php

ob_start();
session_start();

include_once("application/main.php");
include_once(DATABASE_PATH);

/* DATABASE ----------------------------------------------------------------- */
require_once(DATABASE_FOLDER . "BlockedUsers.php");
require_once(DATABASE_FOLDER . "Cities.php");
require_once(DATABASE_FOLDER . "Countries.php");
require_once(DATABASE_FOLDER . "FavouriteUsers.php");
require_once(DATABASE_FOLDER . "Gifts.php");
require_once(DATABASE_FOLDER . "MessageBox.php");
require_once(DATABASE_FOLDER . "UserFriends.php");
require_once(DATABASE_FOLDER . "UserGifts.php");
require_once(DATABASE_FOLDER . "UserImages.php");
require_once(DATABASE_FOLDER . "Users.php");
/* -------------------------------------------------------------------------- */


/* REPOSITORY --------------------------------------------------------------- */
require_once(REPOSITORY_FOLDER . "Repository.php");
require_once(REPOSITORY_FOLDER . "BlockedUsersRepository.php");
require_once(REPOSITORY_FOLDER . "CitiesRepository.php");
require_once(REPOSITORY_FOLDER . "CountriesRepository.php");
require_once(REPOSITORY_FOLDER . "FavouriteUsersRepository.php");
require_once(REPOSITORY_FOLDER . "GiftsRepository.php");
require_once(REPOSITORY_FOLDER . "MessageBoxRepository.php");
require_once(REPOSITORY_FOLDER . "UserFriendsRepository.php");
require_once(REPOSITORY_FOLDER . "UserGiftsRepository.php");
require_once(REPOSITORY_FOLDER . "UserImagesRepository.php");
require_once(REPOSITORY_FOLDER . "UsersRepository.php");
/* -------------------------------------------------------------------------- */


/* PLUGINS ------------------------------------------------------------------ */
require_once(PLUGINS_FOLDER."SendEmail.php");
/* -------------------------------------------------------------------------- */


/* ENUMS -------------------------------------------------------------------- */
require_once(ENUMS_PATH);
/* -------------------------------------------------------------------------- */


$urlMap = array(
    "test" => "test.php",
    "serverinfo" => "serverinfo.php",
    "faq" => "faq.php",
    "impressum" => "impressum.php",
    "datenschutz" => "privacy.php",
    "agb" => "termsAndConditions.php",
    "kundensupport" => "support.php",
    "passwort-vergessen" => "forgotPassword.php",
    "user-profile" => "userProfile.php",
    "logout" => "logout.php",
    "freunde-einladen" => "freundeEinladen.php",
    "geblockte-mitglieder" => "geblockteMitglieder.php",
    "kronkorken" => "kronkorken.php",
    "meine-bilder" => "meineBilder.php",
    "meine-favoriten" => "meineFavoriten.php",
    "meine-freunde" => "meineFreunde.php",
    "geschenke" => "meineGeschenke.php",
    "aaa" => "meinProfil.php"
);


$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$path = parse_url($url);
$request = trim(str_replace(BASE_URL, "", $path['path']), "/");

$requestArray = explode("/", $request);

//print_r($requestArray);

if (count($requestArray) == 1) {
    $caption = $requestArray[0];
    
    if(array_key_exists($caption, $urlMap)){
        require_once(VIEWS_FOLDER.$urlMap[$caption]);
    }else{
        callHome();
    }
} else if (count($requestArray) == 2) {

} else {
    callHome();
}

function callHome() {
    require_once(PUBLIC_FOLDER . "content/index.php");
}

ob_flush();
?>
