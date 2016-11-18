<?php

if(count($_POST)>0){
	$user = new CategoryData();
	$user->name = $_POST["name"];
	$user->add();

	ob_clean();
	header('Location: index.php?view=categories');


}


?>
