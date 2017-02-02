<?php

if (isset($_POST['lang']))
{
    setcookie('lang', $_POST['lang'], time()+60*60*24*30); // cookie lang expira em 30 dias
    $_SESSION['message'] = 'Lingua modificada com sucesso!';
    $_SESSION['alert_type'] = 'success';
    header('Location: index.php?view=configuration');
}
else {
    $_SESSION['message'] = 'Ocorreu um erro desconhecido';
    $_SESSION['alert_type'] = 'danger';
    header('Location: index.php?view=configuration');
}