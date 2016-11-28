<?php

$item = ItemData::getById($_GET["id"]);
$book_id = $item->book_id;
$item->status_id = 3;
$item->update();
Core::redir("./index.php?view=items&id=$book_id");


?>
