<!doctype html>
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
  <title>Patrimoine | Vie communale | Mairie de la commune de Ville | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />
  <link href="assets/css/patrimoine.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/patrimoineModel.php';
include_once 'controlers/patrimoineController.php';
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
          <h1>Patrimoine</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                <a href="index.php">Accueil</a> \ <a href="viecommunale.php">Vie Communale</a> \ Patrimoine
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
            Ville est un petit village tranquille, situé à 25Km au nord de Compiègne (France,Oise (60)).
          </p>
          <p>
            De par sa situation géographique, Ville bénéficie de nombreux atouts :

            Un accès rapide à l'aéroport Roissy Charles De Gaulle (environ 1 heure) et à l'aéroport

            de Beauvais (environ 1 heure)

            Un accès rapide au centre de la capitale (environ 1 heure 30)

            Moins d'une heure de toutes les grandes villes picardes (Amiens, Beauvais,

            Soissons, Compiègne).
          </p>
          <p>
            A proximité de Noyon, Ville fait partie des 42 communes qui appartiennent à la communauté des Communes du Pays Noyonnais (C.C.P.N).
          </p>
          <p>
            Ville est un village découpé en deux parties traversé d'est en ouest par une petite rivière : "La Divette". (ci-contre)
            Les habitants du village, les villageaois, parlent du "haut de ville" et du "bas de ville".
          </p>
          <p>
            Ville possède à moins de 4km un centre commercial : Auchan, d'une surface de 4000m2 (à l'entrée de Noyon), et la proximité des commerces de Noyon à environ 5km.
          </p>
        </div>
      </div>
      <div id="groupAssoc">
        <?php foreach ($allPatrimoineQuery as $allPatrimoineQuery){ ?>
        <div class="row">
          <div id="change" class="col-12">
            <div class="row  second">
              <div class="col-12 col-lg-3 imgAssoc">
                <a href="assets/images/<?=$allPatrimoineQuery->picture?>" data-lightbox="image-<?=$allPatrimoineQuery->id?>" data-title="<?=$allPatrimoineQuery->name?>"><img src="assets/images/<?=$allPatrimoineQuery->picture?>" /></a>
              </div>
              <div class="col-12 offset-lg-1 col-lg-8">
                <h2><?=$allPatrimoineQuery->name?></h2>
                <p>
                  <?=$allPatrimoineQuery->description?>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
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
