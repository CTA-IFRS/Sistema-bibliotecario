<?php
/**
* BookMedik v2.0
* @author evilnapsis
* @brief Libera la bestia ...
**/

session_start();
include "core/autoload.php";
include "vendor/php-i18n/i18n.class.php";

date_default_timezone_set('America/Sao_Paulo');

// Start the internationalization class (I don't know if this needs to be here or elsewhere)
$i = new i18n();

// $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$lang = 'pt';

$i->setCachePath('./tmp/cache'); // TODO: create this dir
$i->setFilePath('./locales/{LANGUAGE}.ini');
$i->setFallbackLang($lang);
$i->setPrefix('L');
$i->setSectionSeperator('_');

$i->init();

$lb = new Lb();
$lb->loadModule("index");


?>
