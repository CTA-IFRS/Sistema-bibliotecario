<?php

if(count($_POST)>0){
	$user = ItemData::getById($_POST["item_id"]);
	$user->code = $_POST["code"];
	$user->patrimonio = $_POST["patrimonio"];
	$user->status_id = $_POST["status_id"];
	$user->update();

	ob_clean();
	header('Location: index.php?view=items&id=' . $user->book_id);


}


?>
