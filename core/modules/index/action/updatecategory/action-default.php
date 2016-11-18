<?php

if(count($_POST)>0){
	$user = CategoryData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->update();
	ob_clean();
	header('Location: index.php?view=categories');


}


?>
