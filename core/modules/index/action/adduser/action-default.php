<?php

if(count($_POST)>0){
	$is_admin= isset($_POST["is_admin"]) ? 1 : 0 ;
	$user = new UserData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->is_admin = $is_admin;
	$user->is_active = 1;
	$user->password = sha1(md5($_POST["password"]));
	$user->add();

print "<script>window.location='index.php?view=users';</script>";


}


?>
