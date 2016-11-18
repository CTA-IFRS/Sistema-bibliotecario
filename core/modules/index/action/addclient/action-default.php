<?php

if(count($_POST)>0){
	$user = new ClientData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];


	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();

	ob_clean();
	header('Location: index.php?view=clients');


}


?>
