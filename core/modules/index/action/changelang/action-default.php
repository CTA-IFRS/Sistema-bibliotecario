<?php

if (isset($_POST['lang']))
{
    $user = UserData::getById(Session::getUID());
    $user->lang = $_POST['lang'];
    $user->update();
    $_SESSION['message'] = L::messages_lang_modified;
    $_SESSION['alert_type'] = 'success';
    header('Location: index.php?view=configuration');
}
else {
    $_SESSION['message'] = L::messages_unknown_error;
    $_SESSION['alert_type'] = 'danger';
    header('Location: index.php?view=configuration');
}