<?php
if(isset($_GET['content']) && $_GET['content'] == "association"){
  $deleteModel = new associations();
  $associationQuery = $deleteModel->allAssoc();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new associations();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteAssoc();
    ?>
    <meta http-equiv="refresh" content="0;URL=deleteContent.php?content=association">
    <?php
  }
}
?>
