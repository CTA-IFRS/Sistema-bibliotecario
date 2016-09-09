<?php
/**
* BookMedik v2.0
* @author evilnapsis
* @brief Libera la bestia ...
**/

session_start();
include "core/autoload.php";
include "vendor/php-i18n/i18n.class.php";

// Start the internationalization class (I don't know if this needs to be here or elsewhere)
$i = new i18n();

$i->setCachePath('./tmp/cache'); // TODO: create this dir
$i->setFilePath('./locales/{LANGUAGE}.ini');
$i->setFallbackLang('es');
$i->setPrefix('L');
$i->setForcedLang('es');
$i->setSectionSeperator('_');

$i->init();

$lb = new Lb();
$lb->loadModule("index");


?>
