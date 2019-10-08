<?php session_start();?>
<?php
if(!isset($_SESSION['id'])){
  ?>
  <h2>Vous n'êtes pas autorisé à acceder à cette page veuillez vous connecter</h2>
  <?php
}else{
  ?>


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
    <title>Accueil | Mairie de la commune de Ville | Hauts-de-France</title>
    <!-- Link CSS -->
    <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
    <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/admin.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/9d0dc13277.js"></script>
  </head>
  <?php
  include_once 'models/dataBase.php';
  include_once 'models/users.php';
  include_once 'controlers/adminController.php';
  ?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 titlePage">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-3">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-8 title">
              <h1>Page d'administration de Ville</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="containerAdmin">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12" id="navAdmin">
            <div class="row">
              <div class="col-12">
                <h2>Bonjour <?= $connectedInfos->firstName ?>, sélectionnez ce que vous souhaitez faire.</h2>
              </div>
            </div>
            <div class="row">
              <a href="gestion_des_admins">
                <div class="col-12 lineAdmin">
                  <h3>Gérer les profils administrateurs</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="gestion_articles">
                <div class="col-12 lineAdmin">
                  <h3>Gérer les articles du site</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="ajout_contenu">
                <div class="col-12 lineAdmin">
                  <h3>Ajouter du contenu sur le site</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="modifier_contenu">
                <div class="col-12 lineAdmin">
                  <h3>Modifier du contenu sur le site</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="supprimer_contenu">
                <div class="col-12 lineAdmin">
                  <h3>Supprimer du contenu sur le site</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 d-none d-lg-block d-xl-block" id="profilAdmin">
            <div class="row">
              <div class="col-10 offset-1" id="imgProfilAdmin">
              </div>

              <div class="col-10 offset-1" id="profil">
                <div class="row">
                  <div class="col-12" id="nameProfil">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                  </div>
                  <a href="accueil_ville">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retournez sur le site
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="controlers/logout.php">
                    <div class="col-12" id="decoProfil">
                      <div class="row">
                        <div class="col-3">
                          <i class="fas fa-power-off"></i>
                        </div>
                        <div class="col-6">
                          <p>Déconnexion</p>
                        </div>
                      </div>
                  </div></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Version mobile -->
          <div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none" id="profilAdminMobile">
            <div class="row">
              <div class="col-10 offset-1" id="profilMobile">
                <div class="row">
                  <div class="col-7" id="nameProfilMobile">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                    <a href="controlers/logout.php">
                      <div class="col-12" id="decoProfilMobile">
                        <div class="row">
                          <div class="col-12">
                            <i class="fas fa-power-off"></i>Déconnexion
                          </div>
                        </div>
                    </div></a>
                  </div>
                  <div class="col-5" id="menuProfilMobi">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js" type="text/javascript"></script>
  </body>
  </html>

  <?php
}
?>
