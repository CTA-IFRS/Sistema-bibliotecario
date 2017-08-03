<?php
$user = UserData::getById($_GET["id"]);
$user->del();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
Core::redir("./index.php?view=users");
?>
