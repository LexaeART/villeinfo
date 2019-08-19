<?php
if(isset($_POST['confirmNews'])){
  $addNews = new newsletter();
  $formError = array();

  if (isset($_POST['lastName']) && !empty($_POST['lastName'])) {
      $addNews->nom = htmlspecialchars($_POST['lastName']);
  } else {
      $formError['lastName'] = 'Le champ est vide';
  }
  if (isset($_POST['firstName']) && !empty($_POST['firstName'])) {
      $addNews->prenom = htmlspecialchars($_POST['firstName']);
  } else {
      $formError['firstName'] = 'Le champ est vide';
  }
  if (isset($_POST['mail']) && !empty($_POST['mail'])) {
      $addNews->mail = htmlspecialchars($_POST['mail']);
  } else {
      $formError['mail'] = 'Le champ est vide';
  }
  if (isset($_POST['accept']) && !empty($_POST['accept'])) {
  } else {
      $formError['accept'] = 'Vous devez acceptez pour valider l\'inscription';
  }
  if (count($formError) == 0) {
      $addNews->addNews();
  }
}
?>
