<!doctype html>
<html lang="fr">
<head>
  <!--        <base href="https://www.villeinfo.fr" />-->
  <!--        <meta name="generator" content="Jekyll v3.8.5" />-->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Kaiartsu est une agence web basée en Hauts-de-France. Spécialisée dans le développement de site web et d'identité visuelle." />
  <meta name="publisher" content="Kaiartsu">
  <meta name="author" content="Kaiartsu" />
  <meta name="reply-to" content="contact@kaiartsu.fr">
  <title>Accueil | Vie communale | Mairie de la commune de Ville | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/associations.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/associationsModel.php';
include_once 'controlers/associationsController.php';
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="associations_ville">Associations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activites_ville">Activités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ecoles_ville">Écoles</a>
        </li>
      </ul>
      <a class="navbar-brand" href="vie_communale"><img src="assets/images/logoville.png" /></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="patrimoines_ville">Patrimoine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="demarches_ville">Démarches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nous_contacter">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <main id="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12" id="frontImage">
          <h1>Associations</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                <a href="accueil_ville">Accueil</a> \ <a href="vie_communale">News</a> \ Associations
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="groupAssoc">
        <?php
        foreach ($assocInfos as $assocInfos) {
          ?>
          <div class="row">
            <div id="change" class="col-12">
              <div class="row  second">
                <div class="col-3 imgAssoc">
                  <a href="assets/images/<?=$assocInfos->picture?>" data-lightbox="image-<?=$assocInfos->name?>" data-title="<?=$assocInfos->name?>"><img src="assets/images/<?=$assocInfos->picture?>" /></a>
                </div>
                <div class="offset-1 col-8">
                  <h2><?=$assocInfos->name?></h2>
                  <?php
                    if(!empty($assocInfos->president)){
                      ?>
                      <p>Président.e : <?=$assocInfos->president?></p>
                      <?php
                    }
                   ?>
                  <p>
                    <?=$assocInfos->description?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </main>
  <?php
    include 'vues/footer.php';
  ?>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="assets/lib/lightbox/js/lightbox.js" type="text/javascript"></script>
  <script src="assets/js/associations.js" type="text/javascript"></script>

</body>
</html>
