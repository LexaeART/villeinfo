<?php
include_once '../models/dataBase.php';
include_once '../models/users.php';
if (isset($_GET['updateUser'])){
  include_once '../controlers/updateProfilController.php';
  ?>
  <div class="row">
    <div class="col-12">
      <h2>Modification du pseudo</h2>
    </div>
  </div>
  <form action="#" method="post" enctype="multipart/form-data">
    <div class="col-lg-offset-4 col-lg-4">
      <label>Pseudo* : </label>
    </div>
    <div class="form-group col-lg-offset-4 col-lg-4">
      <input type="text" name="pseudo" class="form-control" value="<?= $user->pseudo; ?>" >
      <p id="errorAndValidAddSafary"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
    </div>
    <div class="form-group form-group col-lg-offset-8 col-lg-5">
      <button type="submit" name="updateInfos"> Valider modification du Pseudo</button>
    </div>
    <?php
    foreach ($formErrorPseudo as $formErrorPseudo) {
      echo $formErrorPseudo;
    }
    ?>
  </form>
  <div class="row">
    <div class="col-12">
      <h2>Modification du mot de passe</h2>
    </div>
  </div>
  <form action="#" method="post" enctype="multipart/form-data">

      <div class="col-lg-offset-4 col-lg-8  topLog">
        <label>Mot de passe actuel  : </label>
      </div>
      <div class="form-group col-lg-offset-4 col-lg-8">
        <input type="password" class="form-control" name="currentPassword" >
      </div><div class="col-lg-offset-4 col-lg-8  topLog">
        <label>Nouveau mot de passe : </label>
      </div>
      <div class="form-group col-lg-offset-3 col-lg-8">
        <input type="password" class="form-control" name="newPassword" >
      </div><div class="col-lg-offset-4 col-lg-8  topLog">
        <label>Confirmation du nouveau mot de passe  : </label>
      </div>
      <div class="form-group col-lg-offset-3 col-lg-8">
        <input type="password" class="form-control" name="confirmNewPassword" >
      </div>

    <?php
    foreach ($formError as $formError) {
      ?>
      <p><?= $formError; ?></p>
      <?php
    }
    ?>
    <div class="row">
      <div class="form-group col-lg-offset-4 col-lg-8">
        <button type="submit" name="updatePassword">Valider modification du mot de passe</button>
      </div>
    </div>
  </form>
  <?php
}elseif(isset($_GET['deleteUser'])){
  include_once '../controlers/deleteuserController.php';
  ?>
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Pseudo </th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allOthersUsers as $allOthersUsers){ ?>
        <div class="modal fade" id="EditProfile<?= $allOthersUsers->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <p>Valider la suppresion de l'utilisateur :</p>
              </div>
              <div class="modal-body">
                <center><p><?= $allOthersUsers->lastName ?> <?= $allOthersUsers->firstName ?></p></center>
              </div>
              <div class="modal-footer">
                <form action="gestion_des_admins?deleteUser&confirmDelete=<?=$allOthersUsers->id?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-6">
                      <input type="submit" class="btn" name="yesDelete" value="Oui">
                    </div>
                  </div>
                </form>
                <form action="gestion_des_admins?deleteUser" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-6">
                      <input type="submit" class="btn" name="yesDelete" value="Non">
                    </div>
                  </div>
                </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <tr>
        <th scope="row"><?= $allOthersUsers->id ?></th>
        <td><?= $allOthersUsers->user ?></td>
        <td><?= $allOthersUsers->lastName ?></td>
        <td><?= $allOthersUsers->firstName ?></td>
        <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $allOthersUsers->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
}
?>
