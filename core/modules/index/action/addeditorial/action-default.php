<?php

if(count($_POST)>0){
	$user = new EditorialData();
	$user->name = $_POST["name"];
	$user->add();
    $_SESSION['message'] = L::messages_inserted_with_success;
    $_SESSION['alert_type'] = 'success';

	ob_clean();
	header('Location: index.php?view=editorials');


}


?>
