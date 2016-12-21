<?php

if(count($_POST)>0){
	$user = new ClientData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];


	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();
    $_SESSION['message'] = L::messages_inserted_with_success;
    $_SESSION['alert_type'] = 'success';

	ob_clean();
	header('Location: index.php?view=clients');


}


?>
