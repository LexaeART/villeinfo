<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Administration de Ville - Connexion</title>
  <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
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
        <div class="col-12">
          <h1>Connexion - Mairie de Ville</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-6">
          <div id="loginBox">
            <form class="formInscription" action="#" method="post">
                <div class="form-group">
                    <label for="inputPseudo">Pseudo</label>
                    <input type="text" class="form-control" id="inputPseudo" aria-describedby="pseudoHelp" placeholder="Entres ton pseudo" name="pseudoLog">
                </div>
                <div class="form-group">
                  <div class="col-12">
                    <label for="inputPassword">Mot de passe</label>
                  </div>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Entres ton mot de passe" name="passwordLog">
                </div>
                <button type="submit" class="submitInscription" name="logInSubmit">Se connecter</button>
                <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
