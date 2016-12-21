<?php
$user = BookData::getById($_GET["id"]);
$user->del();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
ob_clean();
header('Location: index.php?view=books');

?>
