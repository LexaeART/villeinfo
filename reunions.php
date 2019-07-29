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
  <link href="assets/css/reunions.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/reunionsModel.php';
include_once 'controlers/reunionsControlers.php';
?>
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
          <a class="nav-link" href="villinfos.php">Vill'Infos</a>
        </li>
      </ul>
      <a class="navbar-brand" href="viecommunale.php"><img src="assets/images/logovilleMuni.png" /></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="reunions.php">Réunions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="documents.php">Documents</a>
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
          <h1>Réunions</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                Accueil \ Réunions
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="accordion" id="accordionExample">
        <?php
        foreach ($reunionQuery as $reunionQuery){
          $reunionsInfos->id = $reunionQuery->id;
          $crQuery = $reunionsInfos->allcr();
          ?>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?= $reunionQuery->id ?>" aria-expanded="true" aria-controls="collapseOne">
                  <?= $reunionQuery->name ?>
                </button>
              </h5>
            </div>

            <div id="<?= $reunionQuery->id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ol class="lastCR">
                  <?php foreach ($crQuery as $crQuery){ ?>
                  <li>
                    <a target="_blank" href="media/pdf/<?=$crQuery->pdf?>.pdf" title="<?= $crQuery->pdf ?> "><?= $crQuery->name ?></a>
                  </li>
                  <?php } ?>
                </ol>
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
