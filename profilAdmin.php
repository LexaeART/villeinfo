<?php session_start(); ?>
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
    <meta name="description" content="Kaiartsu est une agence web basée en Hauts-de-France. Spécialisée dans le développement de site web et d'identité visuelle." />
    <meta name="publisher" content="Kaiartsu">
    <meta name="author" content="Kaiartsu" />
    <meta name="reply-to" content="contact@kaiartsu.fr">
    <title>Accueil | Mairie de la commune de Ville | Hauts-de-France</title>
    <!-- Link CSS -->
    <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
    <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/profilAdmin.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 titlePage">
          <div class="row">
            <div class="col-1">
              <img src="assets/images/logovillet.png" />
            </div>
            <div class="col-10 title">
              <h1>Page d'administration des profils</h1>
            </div>
            <div class="col-1 title">
              <a href="controlers/logout.php">Déconnexion</a>
            </div>
          </div>
        </div>
      </div>
      <?php
  if(isset($_GET['updateUser']) || isset($_GET['deleteUser'])){
    include 'vues/userVue.php';
  }else{
    ?>
    <div class="row">
      <a href="profilAdmin.php?updateUser">
      <div class="col-6 lineAdmin">
        <h3>Modifier mes informations</h3>
      </div>
      </a>
    </div>
    <div class="row">
      <a href="adminSub.php">
      <div class="col-6 lineAdmin">
        <h3>Ajouter un utilisateur</h3>
      </div>
      </a>
    </div>
    <div class="row">
      <a href="profilAdmin.php?deleteUser">
      <div class="col-6 lineAdmin">
        <h3>Supprimer un utilisateur</h3>
      </div>
      </a>
    </div>
    <?php
  }
       ?>
    </div>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/lib/lightbox/js/lightbox.js" type="text/javascript"></script>
  </body>
  </html>

<?php
}
?>