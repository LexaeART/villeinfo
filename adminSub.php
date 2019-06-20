<?php
include_once 'models/dataBase.php';
// intégration du modéle user
include_once 'models/users.php';
//Intégration du controlleur addUserController
include_once 'controlers/adminSubControl.php';
?>
<div class="container bodyPage" id="subscribeContainer">
    <div class="col-lg-12 text-center">
        <!--Affichage des messages d'erreurs si il y en as-->
        <p class="errorsLoginSub"><?= isset($formError['add']) ? $formError['add'] : '' ?></p>
        <p class="errorsLoginSub"><?= isset($formError['redirect']) ? $formError['redirect'] : '' ?></p>
        <h1>Inscription</h1>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="col-lg-offset-4 col-lg-4  topLog">
            <label>Pseudo : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="text" name="pseudo" class="form-control" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" >
            <p class = "errorsLoginSub"><?= isset($formError['pseudo']) ? $formError['pseudo'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <label>Mot de passe : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="password" name="password" class="form-control" >
            <p class="errorsLoginSub"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Mot de passe (confirmation) : </label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="password" name="confPassword" class="form-control" >
            <p class="errorsLoginSub"><?= isset($formError['confPassword']) ? $formError['confPassword'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Prenom</label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="text" name="firstName" class="form-control" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>" >
            <p class = "errorsLoginSub"><?= isset($formError['firstName']) ? $formError['firstName'] : '' ?></p>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-5">
            <label>Nom</label>
        </div>
        <div class="form-group col-lg-offset-4 col-lg-4">
            <input type="text" name="lastName" class="form-control" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" >
            <p class = "errorsLoginSub"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
        </div>
        <div class="form-group form-group col-lg-offset-8 col-lg-2">
            <button type="submit" class="form-control" name="validInscrip"> Valider l'inscription</button>
        </div>
    </form>
</div>
