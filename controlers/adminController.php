<?php
$user = new users();
$user->id = $_SESSION['id'];
$connectedInfos = $user->connectedInfos();
?>
