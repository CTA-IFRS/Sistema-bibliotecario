<?php
/**
* @author evilnapsis
* @brief Eliminar editoriales 
**/
$category = EditorialData::getById($_GET["id"]);
$category->del();
$_SESSION['message'] = L::messages_del_with_success;
$_SESSION['alert_type'] = 'success';
Core::redir("./index.php?view=editorials");

?>