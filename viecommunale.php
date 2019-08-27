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
  <link href="assets/css/viecommunale.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/newsModel.php';
include_once 'controlers/newsControler.php';
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
        <div class="col-12" id="VIN">
          <div class="innerBackground" style="background-image:url('media/news/<?= $lastNews->mainPicture ?>')">
          </div>
          <div class="col-3 col-lg-1" id="important">
            <p>
              A la une
            </p>
            <hr />
          </div>
          <div class="col-5 col-lg-5" id="title">
            <p>
              <?= $lastNews->title ?>
            </p>
          </div>
          <div class="col-4 col-lg-2" id="read">
            <a href="article.php?idArticle=<?= $lastNews->id ?>">
              Lire l'article
            </a>
            <hr />
          </div>
        </div>
      </div>
      <div class="row" id="actualités">
        <div class="offset-1 col-3 col-md-3 col-lg-4">
          <hr />
        </div>
        <div class="col-4 col-md-3 col-lg-2" id="actu">
          <h1>Actualités</h1>
        </div>
        <div class=" col-3 col-md-3 col-lg-4">
          <hr />
        </div>
      </div>
      <div class="row" id="filActu">
        <?php foreach ($listNews as $listNews){ ?>
        <div id="article" class="col-12 col-md-6 col-lg-4">
          <a href="article.php?idArticle=<?= $listNews->id ?>">
            <div class="imgActu" style="background-image:url('media/news/<?= $listNews->mainPicture ?>');">

            </div>
          </a>
          <div class="row" id="infoNews">
            <div class="offset-1 offset-sm-1 offset-md-1 offset-lg-0 col-3 col-lg-4">
              <hr />
            </div>
            <div class="col-4 col-lg-4">
              <h3><?= $listNews->categorie ?></h3>
            </div>
            <div class="col-4">
              <hr />
            </div>
          </div>
          <div class="row">
            <div class="col-12 titleNews">
              <h2><?= $listNews->title ?></h2>
            </div>
          </div>
        </div>

        <?php } ?>
      </div>
      <div class="row">
        <div class="offset-lg-10 offset-md-9 offset-sm-9 offset-7">
          <button class="fill" onclick="window.location.href='allArticles.php'">Afficher plus</button>
        </div>
      </div>
    </div>
  </main>
  <?php
    include 'vues/footer.php';
  ?>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/viecommunale.js" type="text/javascript"></script>
  </body>
  </html>
