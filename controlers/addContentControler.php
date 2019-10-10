<?php
  $addActivity = new activites();
  $allActivitiesQuery = $addActivity->allActivites();
    $allSchool = new ecoles();
    $allSchool = $allSchool->allEcoles();
      $allReunions = new reunions();
      $allReunions = $allReunions->allReunions();
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
    $dossier = '../assets/images/';
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
    $dossier = '../assets/images/';
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
    $dossier = '../assets/images/conseil/';
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
    $dossier = '../assets/images/conseil/';
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
    $dossier = '../assets/images/conseil/';
    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
    $addActivity->addSchool();
  }
}

/* AJOUT PROFS */

elseif(isset($_POST['addTeacher'])){
  $addActivity = new ecoles();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
    $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
    $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['concernActivity']) && !empty($_POST['concernActivity'])) {
    $addActivity->id = htmlspecialchars($_POST['concernActivity']);
  } else {
    $formError['descriptionAssoc'] = 'Le champ est vide';
  }
  if (count($formError) == 0) {
    $addActivity->addTeacher();
  }
}

/* AJOUT REUNIONS */

elseif(isset($_POST['addReunion'])){
  $addActivity = new reunions();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
    $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
    $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (count($formError) == 0) {
    $addActivity->addReunion();
  }
}

/* AJOUT COMPTE RENDU */

elseif(isset($_POST['addCr'])){
  $addActivity = new reunions();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
    $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
    $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['concernActivity']) && !empty($_POST['concernActivity'])) {
    $addActivity->id = htmlspecialchars($_POST['concernActivity']);
  } else {
    $formError['concernActivity'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
    $fichier = basename($_FILES['profilePicture']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['profilePicture']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf');
    $extension = strrchr($_FILES['profilePicture']['name'], '.');
    $addActivity->pdf = htmlspecialchars($_FILES['profilePicture']['name']);
    $dossier = '../media/cr/';
    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
    $addActivity->addCr();
  }
}

/* AJOUT COMMISSION */


elseif(isset($_POST['addCommissions'])){
  $addActivity = new commission();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
    $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
    $formError['nameAssoc'] = 'Le champ est vide';
  }

  if (isset($_POST['namePresident']) && !empty($_POST['namePresident'])) {
    $addActivity->objet = htmlspecialchars($_POST['namePresident']);
  } else {
    $formError['namePresident'] = 'Le champ est vide';
  }

  if (isset($_POST['nameTitu']) && !empty($_POST['nameTitu'])) {
    $addActivity->titulaire = htmlspecialchars($_POST['nameTitu']);
  } else {
    $formError['nameTitu'] = 'Le champ est vide';
  }

  if (isset($_POST['nameSup']) && !empty($_POST['nameSup'])) {
    $addActivity->suppleant = htmlspecialchars($_POST['nameSup']);
  } else {
    $formError['nameSup'] = 'Le champ est vide';
  }

  if (count($formError) == 0) {
    $addActivity->addCommission();
  }
}

/* AJOUT VILL'INFOS */


elseif(isset($_POST['addVillinfo'])){
  $addActivity = new infos();
  $formError = array();

  if (isset($_POST['nameAssoc']) && !empty($_POST['nameAssoc'])) {
    $addActivity->name = htmlspecialchars($_POST['nameAssoc']);
  } else {
    $formError['nameAssoc'] = 'Le champ est vide';
  }
  if (isset($_POST['namePresident']) && !empty($_POST['namePresident'])) {
    $addActivity->trimestre = htmlspecialchars($_POST['namePresident']);
  } else {
    $formError['namePresident'] = 'Le champ est vide';
  }
  if (isset($_POST['yearInfo']) && !empty($_POST['yearInfo'])) {
    $addActivity->year = htmlspecialchars($_POST['yearInfo']);
  } else {
    $formError['yearInfo'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
    $fichier = basename($_FILES['profilePicture']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['profilePicture']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf');
    $extension = strrchr($_FILES['profilePicture']['name'], '.');
    $addActivity->corpus = htmlspecialchars($_FILES['profilePicture']['name']);
    $dossier = '../media/vilinfo/';
    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
    $addActivity->addVillinfo();
    /*include_once 'models/newsletterModel.php';
    $allNews = new newsletter();
    $allNews->allNews();
    foreach ($allNews as $allNews)
    $destinataire = $allNews->mail;
    $sujet ='Nouveau Vill\'Info disponible sur le site de la Commune de Ville !' ;
    $body = '<p>Bonjour !</p><p>Venez acheter des stylo chez VendeurDeStylo, des réduction à plus de -20% pour vous !</p>';
    $entetes = 'Content-Type: text/html; charset="UTF-8"'."n";
    mail($destinataire, $sujet, $body, $entetes);*/
  }
}

/* AJOUT ARTICLE */

elseif(isset($_POST['addNews'])){
  $addActivity = new news();
  $formError = array();

  if (isset($_POST['titleNews']) && !empty($_POST['titleNews'])) {
    $addActivity->title = htmlspecialchars($_POST['titleNews']);
  } else {
    $formError['titleNews'] = 'Le champ est vide';
  }
  if (isset($_POST['bodyNews']) && !empty($_POST['bodyNews'])) {
    $addActivity->body = htmlspecialchars($_POST['bodyNews']);
  } else {
    $formError['bodyNews'] = 'Le champ est vide';
  }
  if (isset($_POST['catNews']) && !empty($_POST['catNews'])) {
    $addActivity->categorie = htmlspecialchars($_POST['catNews']);
  } else {
    $formError['catNews'] = 'Le champ est vide';
  }
  if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
    $fichier = basename($_FILES['profilePicture']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['profilePicture']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf');
    $extension = strrchr($_FILES['profilePicture']['name'], '.');
    $addActivity->mainPicture = htmlspecialchars($_FILES['profilePicture']['name']);
    $dossier = '../media/news/';
    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
    $addActivity->dateDay = date("Y-m-d");
    $addActivity->idUser = $_SESSION['id'];
    $addActivity->addNews();
    /*include_once 'models/newsletterModel.php';
    $allNews = new newsletter();
    $allNews->allNews();
    foreach ($allNews as $allNews)
    $destinataire = $allNews->mail;
    $sujet ='Nouveau Vill\'Info disponible sur le site de la Commune de Ville !' ;
    $body = '<p>Bonjour !</p><p>Venez acheter des stylo chez VendeurDeStylo, des réduction à plus de -20% pour vous !</p>';
    $entetes = 'Content-Type: text/html; charset="UTF-8"'."n";
    mail($destinataire, $sujet, $body, $entetes);*/
  }
}
?>
