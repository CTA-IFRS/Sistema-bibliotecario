<?php

if(count($_POST)>0){
	$user = AuthorData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->update();
    $_SESSION['message'] = L::messages_updated_with_success;
    $_SESSION['alert_type'] = 'success';
	ob_clean();
	header('Location: index.php?view=authors');


}


?>
