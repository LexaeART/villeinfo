<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Administration de Ville - Connexion</title>
  <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <?php
      include_once 'models/dataBase.php';
      include_once 'models/users.php';
      include_once 'controlers/loginVilleControl.php';
  ?>
</head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div id="loginBox">
            <form class="formInscription" action="#" method="post">
                <div class="form-group">
                    <label for="inputPseudo">Ton pseudo : </label>
                    <input type="text" class="form-control" id="inputPseudo" aria-describedby="pseudoHelp" placeholder="Entres ton pseudo" name="pseudoLog">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe : </label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Entres ton mot de passe" name="passwordLog">
                </div>
                <button type="submit" class="submitInscription" name="logInSubmit">Submit</button>
                <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
