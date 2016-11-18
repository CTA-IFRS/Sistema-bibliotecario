<?php

if(count($_POST)>0){
	$user = new AuthorData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->add();

	ob_clean();
	header('Location: index.php?view=authors');


}


?>
