<?php
if(isset($_GET['content']) && $_GET['content'] == "association"){
  $updateAssoc = new associations();
  $associationQuery = $updateAssoc->allAssoc();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new associations();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->president = htmlspecialchars($_POST['namePresident']);
        $updateAssoc->description = htmlspecialchars($_POST['descriptionAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->picture = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = 'assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateAssoc();
    ?>
    <meta http-equiv="refresh" content="0;URL=updateContent.php?content=association">
    <?php
  }
}
?>
