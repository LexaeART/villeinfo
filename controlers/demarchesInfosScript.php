<?php
include '../models/dataBase.php';
include '../models/demarcheModel.php';
$demarchesInfos = new demarches();
$demarchesInfos->id = $_POST['demarchesInfos'];
$demarchesInfosAll = $demarchesInfos->allDemarchesInfos();
$encode = json_encode($demarchesInfosAll);
echo $encode;
?>
