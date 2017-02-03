<?php

date_default_timezone_set('America/Sao_Paulo');

$i = new i18n();

if (is_numeric(Session::getUID()))
    $user = UserData::getById(Session::getUID());
else $user = null;

$i->setCachePath('./tmp/cache');
$i->setFilePath('./locales/{LANGUAGE}.ini');
$i->setFallbackLang('pt');
if (isset($user->lang))
    $i->setForcedLang($user->lang);
else
    $i->setForcedLang('pt');
$i->setPrefix('L');
$i->setSectionSeperator('_');
$i->setMergeFallback(true);

$i->init();

/// en caso de que el parametro action este definido evitamos que se muestre
/// el layout por defecto y ejecutamos el action sin mostrar nada de vista
// print_r($_GET);
if(!isset($_GET["action"])){
//	Bootload::load("default");
	Module::loadLayout("index");
}else{
	Action::load($_GET["action"]);
}

?>