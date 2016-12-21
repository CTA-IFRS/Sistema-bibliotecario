<?php

if($_SESSION["user_id"]!=""){
$operation = OperationData::getById($_GET["id"]);
$item = ItemData::getById($operation->item_id);
$item->avaiable();
$operation->del();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
Core::redir("./?view=rents");

}

?>