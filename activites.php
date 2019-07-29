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
  <link href="assets/css/activites.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/activitesModel.php';
include_once 'controlers/activitesController.php';
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="associations.php">Associations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activites.php">Activités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ecole.php">Écoles</a>
        </li>
      </ul>
      <a class="navbar-brand" href="viecommunale.php"><img src="assets/images/logoville.png" /></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="patrimoine.php">Patrimoine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="demarches.php">Démarches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <main id="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12" id="frontImage">
          <h1>Activités</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                <a href="index.php">Accueil</a> \ <a href="viecommunale.php">News</a> \ Activités
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="groupAssoc">
        <?php
        foreach ($activInfosQuery as $activInfosQuery) {
          $activInfos->id = $activInfosQuery->id;
          $activTarifs = $activInfos->allTarifs();
          ?>
          <div class="row">
            <div id="change" class="col-12">
              <div class="row  second">
                <div class="col-3 imgAssoc">
                  <img src="assets/images/<?=$activInfosQuery->picture?>" />
                </div>
                <div class="offset-1 col-8">
                  <h2><?=$activInfosQuery->name?></h2>
                  <p>
                    <?=$activInfosQuery->description?>
                  </p>
                  <?php
                  foreach ($activTarifs as $activTarifs) {
                   ?>
                    <p><strong><?= $activTarifs->statut ?></strong> <?= $activTarifs->prix ?> <strong><?= $activTarifs->caution ?></strong></p>
                   <?php
                 }
                    ?>
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
  <script src="assets/js/associations.js" type="text/javascript"></script>

</body>
</html>
