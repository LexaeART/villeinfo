<?php
include '../models/dataBase.php';
include '../models/villinfos.php';
$demarchesInfos = new infos();
$demarchesInfos->id = $_POST['demarchesInfos'];
$demarchesInfosAll = $demarchesInfos->infosByYear();
$encode = json_encode($demarchesInfosAll);
echo $encode;
?>
