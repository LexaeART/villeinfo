<?php

/* MODIFICATION ASSOCIATIONS */


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
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateAssoc();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_associations">
    <?php
  }
}

/* MODIFICATION ACTIVITES */


elseif(isset($_GET['content']) && $_GET['content'] == "activites"){
  $updateAssoc = new activites();
  $associationQuery = $updateAssoc->allActivites();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new activites();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->description = htmlspecialchars($_POST['descriptionAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->picture = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateActivities();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_activites">
    <?php
  }

  /* MODIFICTION TARIFS ACTIVITES */

  elseif(isset($_GET['confirmUpdateTarif'])){
        $priceQuery = new activites();
        $priceQuery->idTarif = $_POST['idTarif'];
        $priceQuery->statut = htmlspecialchars($_POST['statusPrice']);
        $priceQuery->prix = htmlspecialchars($_POST['price']);
        $priceQuery->caution = htmlspecialchars($_POST['caution']);
        $priceQuery->updateTarif();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_activites">
    <?php
  }
}

/* MODIFICATION ECOLES */


elseif(isset($_GET['content']) && $_GET['content'] == "ecole"){
  $updateAssoc = new ecoles();
  $associationQuery = $updateAssoc->allEcoles();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new ecoles();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->nameBoss = htmlspecialchars($_POST['nameBoss']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->picture = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateSchool();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_ecole">
    <?php
  }

  /* MODIFICTION ENSEIGNANTS */

  elseif(isset($_GET['confirmUpdateTarif'])){
        $priceQuery = new ecoles();
        $priceQuery->id = $_POST['idTarif'];
        $priceQuery->name = $_POST['statusPrice'];
        $priceQuery->updateTeacher();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_ecole">
    <?php
  }
}

/* MODIFICATION PATRIMOINES */

elseif(isset($_GET['content']) && $_GET['content'] == "patrimoine"){
  $updateAssoc = new patrimoine();
  $associationQuery = $updateAssoc->allPatrimoine();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new patrimoine();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->description = htmlspecialchars($_POST['descriptionAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->picture = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updatePatrimoine();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_patrimoine">
    <?php
  }
}

/* MODIFICATION DEMARCHES */

elseif(isset($_GET['content']) && $_GET['content'] == "demarches"){
  $updateAssoc = new demarches();
  $associationQuery = $updateAssoc->allDemarches();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new demarches();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->contact = htmlspecialchars($_POST['descriptionAssoc']);
        $updateAssoc->doc = htmlspecialchars($_POST['docDemarche']);
        $updateAssoc->prix = htmlspecialchars($_POST['prixDemarche']);
        $updateAssoc->more = htmlspecialchars($_POST['moreDemarche']);
        $updateAssoc->updateDemarche();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_demarches">
    <?php
  }
}

/* MODIFICATION NEWS */

elseif(isset($_GET['content']) && $_GET['content'] == "updateNews"){
  $updateAssoc = new news();
  $associationQuery = $updateAssoc->allNews();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new news();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->title = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->contact = htmlspecialchars($_POST['descriptionAssoc']);
        $updateAssoc->doc = htmlspecialchars($_POST['docDemarche']);
        $updateAssoc->prix = htmlspecialchars($_POST['prixDemarche']);
        $updateAssoc->more = htmlspecialchars($_POST['moreDemarche']);
        $updateAssoc->updateDemarche();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_news">
    <?php
  }
}

/* MODIFICATION CONSEIL */

elseif(isset($_GET['content']) && $_GET['content'] == "conseil"){
  $updateAssoc = new conseil();
  $associationQuery = $updateAssoc->showConseiller();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new conseil();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->fonction = htmlspecialchars($_POST['descriptionAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->img = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateConseil();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_conseil">
    <?php
  }
}

/* MODIFICATION REUNIONS */

elseif(isset($_GET['content']) && $_GET['content'] == "reunions"){
  $updateAssoc = new reunions();
  $associationQuery = $updateAssoc->allCrBis();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new reunions();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->pdf = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateCr();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_reunions">
    <?php
  }
}

/* MODIFICATION DOCUMENTS */

elseif(isset($_GET['content']) && $_GET['content'] == "documents"){
  $updateAssoc = new commission();
  $associationQuery = $updateAssoc->showCommission();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new commission();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->commission = htmlspecialchars($_POST['nameAssoc']);
        $updateAssoc->objet = htmlspecialchars($_POST['objetCom']);
        $updateAssoc->titulaire = htmlspecialchars($_POST['titCom']);
        $updateAssoc->suppleant = htmlspecialchars($_POST['supCom']);
        $updateAssoc->updateCommission();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_documents">
    <?php
  }
}

/* MODIFICATION VILLINFO */

elseif(isset($_GET['content']) && $_GET['content'] == "villinfo"){
  $updateAssoc = new infos();
  $associationQuery = $updateAssoc->showInfo();
  if(isset($_GET['confirmUpdate'])){
    $assocInfos = new infos();
    $updateAssoc->id = $_GET['confirmUpdate'];
        $updateAssoc->name = htmlspecialchars($_POST['nameAssoc']);
            $updateAssoc->trimestre = htmlspecialchars($_POST['triInfos']);
                $updateAssoc->year = htmlspecialchars($_POST['yearInfos']);
    if (isset($_FILES['profilePicture']) && !empty($_FILES['profilePicture'])) {
        $fichier = basename($_FILES['profilePicture']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['profilePicture']['tmp_name']);
        $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf');
        $extension = strrchr($_FILES['profilePicture']['name'], '.');
        $updateAssoc->corpus = htmlspecialchars($_FILES['profilePicture']['name']);
        $dossier = '../assets/images/';
        move_uploaded_file($_FILES['profilePicture']['tmp_name'], $dossier . $fichier);

    }
        $updateAssoc->updateVillinfo();
    ?>
    <meta http-equiv="refresh" content="0;URL=modifier_villinfo">
    <?php
  }
}
?>
