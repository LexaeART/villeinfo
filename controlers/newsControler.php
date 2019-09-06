<?php
if(isset($_GET['newsGestion']) && $_GET['newsGestion'] == "deleteNews"){
  $deleteModel = new news();
  $takeAllQuery = $deleteModel->fullNews();
  if(isset($_GET['confirmDelete'])){
    $assocInfos = new news();
    $assocInfos->id = $_GET['confirmDelete'];
    $assocInfos->deleteNews();
    echo '<script>alert("Article supprimé !");</script>';
    ?>
    <meta http-equiv="refresh" content="0;URL=supprimer_news">
    <?php
  }
}elseif(isset($_POST['addNews'])){
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
    $dossier = 'media/news/';
    move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

  }
  if (count($formError) == 0) {
    $addActivity->dateDay = date("Y-m-d");
    $addActivity->idUser = $_SESSION['id'];
    $addActivity->addNews();
    echo '<script>alert("L\'article est bien ajouté !");</script>';
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
}elseif(isset($_GET['newsGestion']) && $_GET['newsGestion'] == "updateNews"){
  $updateAssoc = new news();
  $associationQuery = $updateAssoc->fullNews();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new news();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->title = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->categorie = htmlspecialchars($_POST['categorieNews']);
        $updateAssoc->body = htmlspecialchars($_POST['descriptionAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->mainPicture = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = 'assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateNews();
        echo '<script>alert("Article modifié !");</script>';
    ?>
    <meta http-equiv="refresh" content="0;URL=../modifier_news">
    <?php
  }
}

$activInfos = new news();
$listNews = $activInfos->allNews();
$lastNews = $activInfos->lastNews();
if(isset($_GET['idArticle'])){
  $activInfos->id = $_GET['idArticle'];
  $oneNews = $activInfos->oneNews();
}
 ?>
