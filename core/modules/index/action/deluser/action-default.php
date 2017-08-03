<?php
$u=null;
if(Session::getUID()!="")
    $u = UserData::getById(Session::getUID());

if (isset($_SERVER['HTTP_REFERER']) && preg_match('/[^(.*)]\/index.php\?view=users/', $_SERVER['HTTP_REFERER']) && $u->is_admin) {
    $user = UserData::getById($_GET["id"]);
    $user->del();
    $_SESSION['message'] = L::messages_del_with_success;
    $_SESSION['alert_type'] = 'success';
    Core::redir("./index.php?view=users");
}
else {
    header('Location: index.php');
}
?>
