<?php

if(count($_POST)>0){
	$user = new AuthorData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->add();
	$_SESSION['message'] = L::messages_inserted_with_success;
	$_SESSION['alert_type'] = 'success';

	ob_clean();
	header('Location: index.php?view=authors');


}


?>
