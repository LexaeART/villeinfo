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
  <title>École | Vie communale | Mairie de la commune de Ville | Hauts-de-France</title>
  <!-- Link CSS -->
  <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/lib/lightbox/css/lightbox.css" rel="stylesheet" />
  <link href="assets/css/ecole.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/footer.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<?php
include_once 'models/dataBase.php';
include_once 'models/ecoleModel.php';
include_once 'controlers/ecolesController.php';
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
          <h1>Écoles</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" id="breadcrumbs">
          <div class="row">
            <div class="offset-1 col-lg-5 col-xs-11">
              <p>
                <a href="index.php">Accueil</a> \ <a href="viecommunale.php">Vie Communale</a> \ Écoles
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
            Ville fait partie du R.P.I. de Ville-Suzoy-Passel.<br />

            Les Classes sont réparties ainsi :</p>
            <strong><ul>
              <li>
                Maternelles : Ville
              </li>
              <li>
                CP - CE1 - CE2 : Suzoy
              </li>
              <li>
                CM1 - CM2 : Passel
              </li>
            </ul></strong><p>
              Une cantine et un accueil périscolaire sont ouverts le  matin, le midi et le soir après la classe à Suzoy

              Un car scolaire transporte les enfants entre les trois communes.

              Les enfants sont accueillis en maternelle à partir de l'âge de 2 ans révolus et dans la limite des places disponibles.

              Pour les inscriptions, s'adresser au directeur ou à la directrice de l'école concernée.
            </p>
          </div>
        </div>
        <div id="groupAssoc">
          <?php
          foreach ($allEcolesQuery as $allEcolesQuery) {
              $ecoleInfos->id = $allEcolesQuery->id;
              $ecoleProf = $ecoleInfos->allProfs();
            ?>
            <div class="row">
              <div id="change" class="col-12">
                <div class="row  second">
                  <div class="col-12 col-lg-3 imgAssoc">
                    <a href="assets/images/<?=$allEcolesQuery->picture?>" data-lightbox="image-<?=$allEcolesQuery->id?>" data-title="<?=$allEcolesQuery->name?>"><img src="assets/images/<?=$allEcolesQuery->picture?>" /></a>
                  </div>
                  <div class="col-12 offset-lg-1 col-lg-8">
                    <h2><?=$allEcolesQuery->name?></h2>
                    <p>
                      <strong>Directrice :</strong> <br />
                      <?=$allEcolesQuery->nameBoss?><br />
                      <strong>Institutrices :</strong>
                      <ul>
                      <?php foreach ($ecoleProf as $ecoleProf){ ?>
                          <li>
                            <?= $ecoleProf->name ?>
                          </li>
                      <?php } ?>
                    </ul>
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
