<?php

if(count($_POST)>0){
	$user = ClientData::getById($_POST["id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];

	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->update();

Core::alert(L::messages_updated_with_success);
print "<script>window.location='index.php?view=clients';</script>";


}


?>
