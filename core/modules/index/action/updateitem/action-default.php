<?php

if(count($_POST)>0){
	$user = ItemData::getById($_POST["item_id"]);
	$user->code = $_POST["code"];
	$user->status_id = $_POST["status_id"];
	$user->update();

	ob_clean();
	header('Location: index.php?view=item&id=' . $user->book_id);


}


?>
