<?php
  if(isset($_GET['content']) && $_GET['content']=='association'){
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'association </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=association&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="namePresident">Nom du président</label>
                  <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" value="<?= $associationQuery->president ?>">
                  <?= isset($formError['namePresident']) ? $formError['namePresident'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Déscription de l'association</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->description ?></textarea>
              <?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'association</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->picture ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier l'association</button>
              </form>
                </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <tr>
          <th scope="row"><?= $associationQuery->id ?></th>
          <td><?= $associationQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='activites') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='ecole') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='patrimoine') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='demarches') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='conseil') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='reunions') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='documents') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }
 ?>
