<?php

// define('LBROOT',getcwd()); // LegoBox Root ... the server root
// include("core/controller/Database.php");

if(Session::getUID()=="") {
$user = $_POST['mail'];
$pass = sha1(md5($_POST['password']));

$base = new Database();
$con = $base->connect();
 $sql = "select * from user where (email= \"".$user."\" or username= \"".$user."\") and password= \"".$pass."\" and is_active=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
//	session_start();
//	print $userid;
	$_SESSION['user_id']=$userid ;
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
    ob_clean();
    header('Location: index.php?view=home');
}else {
    ob_clean();
    header('Location: index.php?view=login');
}

}else{
    ob_clean();
    header('Location: index.php?view=home');
}
?>
