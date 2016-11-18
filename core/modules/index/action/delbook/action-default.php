<?php
$user = BookData::getById($_GET["id"]);
$user->del();
ob_clean();
header('Location: index.php?view=books');

?>
