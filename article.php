<!doctype html>
<?php
include_once 'models/dataBase.php';
include_once 'models/newsModel.php';
include_once 'controlers/newsControler.php';
?>
<html lang="fr">
<head>
  <!--        <base href="https://www.villeinfo.fr" />-->
  <!--        <meta name="generator" content="Jekyll v3.8.5" />-->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Retrouvez tous les services et démarches, les infos pratiques, les actualités et événements de la commune de Ville." />
  <meta name="publisher" content="Kaiartsu">
  <meta name="author" content="Kaiartsu" />
  <meta name="reply-to" content="contact@kaiartsu.fr">
  <title><?= $oneNews->title ?> | Vie communale | Mairie de la commune de Ville | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/article.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://kit.fontawesome.com/9d0dc13277.js"></script>
</head>
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
          <a class="nav-link" href="ecoles_ville">école</a>
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
          <div class="col-12" id="frontImage"  style="background-image:url('media/news/<?= $oneNews->mainPicture ?>'");>
          </div>
        </div>
        <div class="row">
          <div class="col-12" id="breadcrumbs">
            <div class="row">
              <div class="offset-1 col-lg-5 col-xs-11">
                <p>
                  <a href="index.php">Accueil</a> \ <a href="viecommunale.php">Vie Communale</a> \ <?= $oneNews->title ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-10 offset-1" id="titleArticle">
              <h1><?= htmlspecialchars_decode($oneNews->title) ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-12" id="creationArticle">
              <em><p>Ecrit par <?= htmlspecialchars_decode($oneNews->idUser) ?> le <?= htmlspecialchars_decode($oneNews->date) ?></p></em>
            </div>
          </div>
          <div class="row">
            <div class="col-10 offset-1" id="corpsArticle">
              <p><?= htmlspecialchars_decode($oneNews->body) ?></p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
      include 'vues/footer.php';
    ?>
    <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/associations.js" type="text/javascript"></script>

  </body>
  </html>
