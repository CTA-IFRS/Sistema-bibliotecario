<?php
/**
* BookMedik v2.0
* @author evilnapsis
* @brief Libera la bestia ...
**/

session_start();
include "core/autoload.php";
include "vendor/php-i18n/i18n.class.php";
include "vendor/mpdf/mpdf.php";

$lb = new Lb();
$lb->loadModule("index");


?>
