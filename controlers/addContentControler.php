<?php
if(isset($_POST['addAssoc'])){
  $addModel = new associations();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addModel->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['namePresident']) && !empty($_POST['namePresident'])) {
      $addModel->president = htmlspecialchars($_POST['namePresident']);
  } else {
      $formError['namePresident'] = 'Le champ est vide';
  }
  if (isset($_POST['descriptionAssoc']) && !empty($_POST['descriptionAssoc'])) {
      $addModel->description = htmlspecialchars($_POST['descriptionAssoc']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
      $fichier = basename($_FILES['profilePicture']['name']);
      $taille_maxi = 100000;
      $taille = filesize($_FILES['profilePicture']['tmp_name']);
      $extensions = array('.png', '.gif', '.jpg', '.jpeg');
      $extension = strrchr($_FILES['profilePicture']['name'], '.');
      $addModel->picture = htmlspecialchars($_FILES['profilePicture']['name']);
      $dossier = 'assets/images/';
      move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
      $addModel->addAssoc();
  }
}
?>
