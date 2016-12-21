<?php

$item = ItemData::getById($_GET["id"]);
$book_id = $item->book_id;
$item->status_id = 3;
$item->update();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
Core::redir("./index.php?view=items&id=$book_id");


?>
