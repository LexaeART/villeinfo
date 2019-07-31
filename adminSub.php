<?php session_start(); ?>
<?php
if(!isset($_SESSION['id'])){
  ?>
  <h2>Vous n'êtes pas autorisé à acceder à cette page veuillez vous connecter</h2>
  <?php
}else{
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>Administration de Ville - Connexion</title>
    <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
    <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/sub.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php
    include_once 'models/dataBase.php';
    // intégration du modéle user
    include_once 'models/users.php';
    //Intégration du controlleur addUserController
    include_once 'controlers/adminSubControl.php';
    ?>
  </head>
  <div class="container bodyPage" id="subscribeContainer">
      <div class="col-lg-12 text-center">
          <!--Affichage des messages d'erreurs si il y en as-->
          <p class="errorsLoginSub"><?= isset($formError['add']) ? $formError['add'] : '' ?></p>
          <p class="errorsLoginSub"><?= isset($formError['redirect']) ? $formError['redirect'] : '' ?></p>
          <h1>Inscription - Mairie de Ville</h1>
          <div class="col-1 title">
            <a href="controlers/logout.php">Déconnexion</a>
          </div>
      </div>
        <div id="loginBox">
      <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group col-xs-12 col-lg-6">
              <label>Pseudo</label>
              <input type="text" name="pseudo" class="form-control" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" >
              <p class = "errorsLoginSub"><?= isset($formError['pseudo']) ? $formError['pseudo'] : '' ?></p>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <label>Mot de passe</label>
              <input type="password" name="password" class="form-control" >
              <p class="errorsLoginSub"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <label>Mot de passe (confirmation)</label>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <input type="password" name="confPassword" class="form-control" >
              <p class="errorsLoginSub"><?= isset($formError['confPassword']) ? $formError['confPassword'] : '' ?></p>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <label>Prenom</label>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <input type="text" name="firstName" class="form-control" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>" >
              <p class = "errorsLoginSub"><?= isset($formError['firstName']) ? $formError['firstName'] : '' ?></p>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <label>Nom</label>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <input type="text" name="lastName" class="form-control" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" >
              <p class = "errorsLoginSub"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
          </div>
          <div class="form-group col-xs-12 col-lg-6">
              <button type="submit"  name="validInscrip"> Valider l'inscription</button>
          </div>
      </form>
    </div>
  </div>
  </html>

  <?php
}
?>
