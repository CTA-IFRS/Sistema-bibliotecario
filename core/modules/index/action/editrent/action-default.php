<?php
$op = OperationData::getById($_POST['id']);

$op->client_id = $_POST["client_id"];
$op->start_at = $_POST["start_at"];
$op->finish_at =$_POST["finish_at"];

$op->update();


$_SESSION['message'] = L::messages_updated_with_success;
$_SESSION['alert_type'] = 'success';

ob_clean();
header('Location: index.php?view=rents');
?>
