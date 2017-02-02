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

$i = new i18n();

$i->setCachePath('./tmp/cache');
$i->setFilePath('./locales/{LANGUAGE}.ini');
$i->setFallbackLang('pt');
if (isset($_COOKIE['lang']))
    $i->setForcedLang($_COOKIE['lang']);
else
    $i->setForcedLang('pt');
$i->setPrefix('L');
$i->setSectionSeperator('_');
$i->setMergeFallback(true);

$i->init();

$lb = new Lb();
$lb->loadModule("index");


?>
