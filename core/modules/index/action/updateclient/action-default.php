<?php

if(count($_POST)>0){
	$user = ClientData::getById($_POST["id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];

	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->update();

$_SESSION['message'] = L::messages_updated_with_success;
$_SESSION['alert_type'] = 'success';
ob_clean();
header('Location: index.php?view=clients');


}


?>
