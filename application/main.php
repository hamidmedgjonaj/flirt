<?php
define("DEVELOPMENT_ENVIRONMENT", true);

/* ERROR REPORTING STATUS CHECK --------------------------------------------- */
if (DEVELOPMENT_ENVIRONMENT) {
    error_reporting(E_ALL);
    ini_set("error_reporting", 1);
    ini_set('display_errors', 'On');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', "logs/errors/app.log");
}
/* -------------------------------------------------------------------------- */



/** BASE URL [baseurl] - BASE URL ** REQUIRED ** */
define("BASE_URL", "linu-ks.com/flirt/");
define("FULL_URL", "http://" . BASE_URL);
define("PUBLIC_URL", "http://" . BASE_URL . "public/");

/** DATABASE CONNECTION DETAILS -  [username], [host], [password], [database_name] */
define("DB_USER", 'linuks_flirt');
define("DB_HOST", 'localhost');
define("DB_PASSWORD", 'mv4+2.TO^sS(');
define("DB_NAME", 'linuks_flirt');



/* PATHS -------------------------------------------------------------------- */
define("DATABASE_PATH", __DIR__."/database.php");
define("ENUMS_PATH", __DIR__."/enums.php");
/* -------------------------------------------------------------------------- */


/* FOLDER LOCATIONS --------------------------------------------------------- */
define("ADMINISTRATION_FOLDER", __DIR__."/../administration/");
define("APPLICATION_FOLDER", __DIR__);
define("DATABASE_FOLDER", __DIR__."/database/");
define("REPOSITORY_FOLDER", __DIR__."/repository/");
define("PLUGINS_FOLDER", __DIR__."/plugins/");
define("CACHE_FOLDER", __DIR__."/../cache/");
define("PUBLIC_FOLDER", __DIR__."/../public/");
define("CONTROLLERS_FOLDER", __DIR__."/../public/content/controllers/");
define("VIEWS_FOLDER", __DIR__."/../public/content/views/");
define("MODELS_FOLDER", __DIR__."/../public/content/models/");
define("PARTS_FOLDER", __DIR__."/../public/content/views/parts/");
/* -------------------------------------------------------------------------- */

?>
