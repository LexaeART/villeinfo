<?php
  $allActivities = new activites();
  $allActivitiesQuery = $allActivities->allActivites();
/* AJOUT ASSOCIATION */

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

/* AJOUT PATRIMOINE */

elseif(isset($_POST['addPatrimoine'])){
  $addPatrimoine = new patrimoine();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addPatrimoine->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['descriptionAssoc']) && !empty($_POST['descriptionAssoc'])) {
      $addPatrimoine->description = htmlspecialchars($_POST['descriptionAssoc']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
      $fichier = basename($_FILES['profilePicture']['name']);
      $taille_maxi = 100000;
      $taille = filesize($_FILES['profilePicture']['tmp_name']);
      $extensions = array('.png', '.gif', '.jpg', '.jpeg');
      $extension = strrchr($_FILES['profilePicture']['name'], '.');
      $addPatrimoine->picture = htmlspecialchars($_FILES['profilePicture']['name']);
      $dossier = 'assets/images/';
      move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
      $addPatrimoine->addPatrimoine();
  }
}

/* AJOUT DEMARCHE */

elseif(isset($_POST['addDemarche'])){
  $addDemarche = new demarches();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addDemarche->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['descriptionAssoc']) && !empty($_POST['descriptionAssoc'])) {
      $addDemarche->contact = htmlspecialchars($_POST['descriptionAssoc']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['docDemarche']) && !empty($_POST['docDemarche'])) {
      $addDemarche->doc = htmlspecialchars($_POST['docDemarche']);
  } else {
      $formError['docDemarche'] = 'Le champ est vide';
  }
  if (isset($_POST['costDemarche']) && !empty($_POST['costDemarche'])) {
      $addDemarche->prix = htmlspecialchars($_POST['costDemarche']);
  } else {
      $formError['costDemarche'] = 'Le champ est vide';
  }
  if (isset($_POST['moreDemarche']) && !empty($_POST['moreDemarche'])) {
      $addDemarche->more = htmlspecialchars($_POST['moreDemarche']);
  } else {
      $formError['costDemarche'] = 'Le champ est vide';
  }
  if (count($formError) == 0) {
      $addDemarche->addDemarche();
  }
}

/* AJOUT CONSEIL */

elseif(isset($_POST['addConseil'])){
  $addConseil = new conseil();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addConseil->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['namePresident']) && !empty($_POST['namePresident'])) {
      $addConseil->fonction = htmlspecialchars($_POST['namePresident']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
      $fichier = basename($_FILES['profilePicture']['name']);
      $taille_maxi = 100000;
      $taille = filesize($_FILES['profilePicture']['tmp_name']);
      $extensions = array('.png', '.gif', '.jpg', '.jpeg');
      $extension = strrchr($_FILES['profilePicture']['name'], '.');
      $addConseil->img = htmlspecialchars($_FILES['profilePicture']['name']);
      $dossier = 'assets/images/conseil/';
      move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
      $addConseil->addConseil();
  }
}

/* AJOUT ACTIVITE */

elseif(isset($_POST['addActivity'])){
  $addActivity = new activites();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['descriptionAssoc']) && !empty($_POST['descriptionAssoc'])) {
      $addActivity->description = htmlspecialchars($_POST['descriptionAssoc']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
      $fichier = basename($_FILES['profilePicture']['name']);
      $taille_maxi = 100000;
      $taille = filesize($_FILES['profilePicture']['tmp_name']);
      $extensions = array('.png', '.gif', '.jpg', '.jpeg');
      $extension = strrchr($_FILES['profilePicture']['name'], '.');
      $addActivity->picture = htmlspecialchars($_FILES['profilePicture']['name']);
      $dossier = 'assets/images/conseil/';
      move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
      $addActivity->addActivity();
  }
}

/* AJOUT TARIFS ACTIVITES */

elseif(isset($_POST['addPriceActivity'])){
  $addPriceActivity = new activites();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addPriceActivity->statut = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['namePresident']) && !empty($_POST['namePresident'])) {
      $addPriceActivity->prix = htmlspecialchars($_POST['namePresident']);
  } else {
      $formError['namePresident'] = 'Le champ est vide';
  }

  if (isset($_POST['concernActivity']) && !empty($_POST['concernActivity'])) {
      $addPriceActivity->idActivite = htmlspecialchars($_POST['concernActivity']);
  } else {
      $formError['concernActivity'] = 'Le champ est vide';
  }

  if (count($formError) == 0) {
  $addPriceActivity->caution = htmlspecialchars($_POST['caution']);
      $addPriceActivity->addPrice();
  }
}

/* AJOUT ECOLE */

elseif(isset($_POST['addSchool'])){
  $addActivity = new ecoles();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
      $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
      $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['descriptionAssoc']) && !empty($_POST['descriptionAssoc'])) {
      $addActivity->description = htmlspecialchars($_POST['descriptionAssoc']);
  } else {
      $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
      $fichier = basename($_FILES['profilePicture']['name']);
      $taille_maxi = 100000;
      $taille = filesize($_FILES['profilePicture']['tmp_name']);
      $extensions = array('.png', '.gif', '.jpg', '.jpeg');
      $extension = strrchr($_FILES['profilePicture']['name'], '.');
      $addActivity->picture = htmlspecialchars($_FILES['profilePicture']['name']);
      $dossier = 'assets/images/conseil/';
      move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
      $addActivity->addSchool();
  }
}
?>