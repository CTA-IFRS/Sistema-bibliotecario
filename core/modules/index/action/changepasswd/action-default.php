<?php

if(Session::getUID()!=""){
    $user = UserData::getById(Session::getUID());
    $password = sha1(md5($_POST["password"]));
    if($password==$user->password){
        if ($_POST['newpassword'] == $_POST['confirmnewpassword'])
        {
            $user->password = sha1(md5($_POST["newpassword"]));
            $user->update();
            setcookie("password_updated","true");
            ob_clean();
            header('Location: logout.php');
        }
        else
        {
            $_SESSION['message'] = L::messages_psw_dont_match;
            $_SESSION['alert_type'] = 'danger';
            ob_clean();
            header('Location: index.php?view=configuration');
        }
    }else{
        $_SESSION['message'] = L::messages_wrong_password;
        $_SESSION['alert_type'] = 'danger';
        ob_clean();
        header('Location: index.php?view=configuration');
    }

}else {
    ob_clean();
    header('Location: index.php');
}