<?php
if(isset($_GET['content']) && $_GET['content'] == "association"){
  $deleteModel = new associations();
  $associationQuery = $deleteModel->allAssoc();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new associations();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteAssoc();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_associations">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "activites"){
  $deleteModel = new activites();
  $takeAllQuery = $deleteModel->allActivites();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new activites();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteActivities();
    $assocInfos->deletePrice();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_activites">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "ecole"){
  $deleteModel = new ecoles();
  $takeAllQuery = $deleteModel->allEcoles();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new ecoles();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteSchool();
    $assocInfos->deleteTeacher();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_ecole">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "patrimoine"){
  $deleteModel = new patrimoine();
  $takeAllQuery = $deleteModel->allPatrimoine();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new patrimoine();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deletePatrimoine();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_patrimoine">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "demarches"){
  $deleteModel = new demarches();
  $takeAllQuery = $deleteModel->allDemarches();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new demarches();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteDemarche();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_demarches">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "conseil"){
  $deleteModel = new conseil();
  $takeAllQuery = $deleteModel->showConseiller();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new conseil();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteConseil();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_conseil">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "reunions"){
  $deleteModel = new reunions();
  $takeAllQuery = $deleteModel->allCrBis();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new reunions();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteCr();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_reunions">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "documents"){
  $deleteModel = new commission();
  $takeAllQuery = $deleteModel->showCommission();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new commission();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteCom();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_documents">
    <?php
  }
}elseif(isset($_GET['content']) && $_GET['content'] == "villinfo"){
  $deleteModel = new infos();
  $takeAllQuery = $deleteModel->showInfo();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new infos();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteVillinfo();
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_villinfo">
    <?php
  }
}
?>
