<?php

if(count($_POST)>0){
	$user = EditorialData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->update();
    $_SESSION['message'] = L::messages_updated_with_success;
    $_SESSION['alert_type'] = 'success';
	ob_clean();
	header('Location: index.php?view=editorials');


}


?>
