<?php


if(Session::getUID()!=""){
	$user = UserData::getById(Session::getUID());
	$password = sha1(md5($_POST["password"]));
	if($password==$user->password){
		$user->password = sha1(md5($_POST["newpassword"]));
		$user->update();
		setcookie("password_updated","true");
		ob_clean();
		header('Location: logout.php');
	}else{
		ob_clean();
		header('Location: index.php?view=security&msg=invalidpasswd');
	}

}else {
	ob_clean();
	header('Location: index.php');
}


?>
