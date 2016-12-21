<?php

$client = ClientData::getById($_GET["id"]);
$client->del();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
Core::redir("./index.php?view=clients");

?>