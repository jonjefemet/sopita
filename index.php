<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

define("APP_PATH", $_SERVER["DOCUMENT_ROOT"]);

require_once "sopitaSystem/library/autoload.php";

use App\Application;

$application = new Application();
print_r($_GET);
