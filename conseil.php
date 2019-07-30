<!doctype html>
<?php
    include_once 'models/dataBase.php';
    include_once 'models/conseil.php';
    include_once 'controlers/conseilController.php';
?>
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
  <title>Conseil | Vie Municipale | Mairie de la commune de Ville | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />
  <link href="assets/css/conseil.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footerMuni.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="conseil.php">Conseil</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="reunions.php">Réunions</a>
          </li>
      </ul>
        <a class="navbar-brand" href="villinfos.php"><img src="assets/images/logovilleMuni.png" /></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="documents.php">Documents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactMuni.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <main id="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12" id="frontImage">
          <h1>Conseil Municipal</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                <a href="index.php">Accueil</a> \ <a href="villinfos.php">Vill'Infos</a> \ Conseil Municipal
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="container">
          <div class="row">
            <div class="col-12 intro">
              <p>
                Il est composé de 13 conseillers municipaux.

 Le rôle du conseil municipal est de prendre toutes les décisions concernant la gestion de la commune en matière de voirie, de bâtiments (constructions et entretien).<br/>
 Il fixe tous les ans le budget communal et répartit les dépenses de fonctionnement et d'investissement selon les orientations qui ont été prises.<br/>

Le Centre Communal d'action Social (C.C.A.S.) est composé de 5 conseillers municipaux dont le maire, président de droit et de 5 personnes extérieures au conseil et habitant la commune.
Le C.C.A.S. est chargé d'étudier les dossiers des personnes en difficulté.
              </p>
            </div>
          </div>
      <div id="groupAssoc">
        <?php
          foreach ($conseillers as $conseiller) {
            ?>
            <div class="row">
              <div id="change" class="offset-2 col-8">
                <div class="row">
                  <div class="col-12 col-lg-4 imgAssoc">
                    <a href="assets/images/conseil/<?=$conseiller->img?>" data-lightbox="image-<?=$conseiller->id?>" data-title="<?=$conseiller->name?>"><img src="assets/images/conseil/<?=$conseiller->img?>" /></a>
                  </div>
                  <div class="col-12 offset-lg-1 col-lg-7">
                    <h2> <?= $conseiller->name ?> </h2>
                    <p>
                        <?= $conseiller->fonction ?>  </p>
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
