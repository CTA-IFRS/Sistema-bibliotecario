<?php

if(count($_POST)>0){
	$user = new ItemData();
	$user->code = $_POST["code"];
	$user->book_id = $_POST["book_id"];
	$user->status_id = $_POST["status_id"];
	$user->patrimonio = $_POST["patrimonio"];
	$user->add();
    $_SESSION['message'] = L::messages_inserted_with_success;
    $_SESSION['alert_type'] = 'success';

	ob_clean();
	header('Location: index.php?view=items&id=' . $_POST['book_id']);
}


?>
