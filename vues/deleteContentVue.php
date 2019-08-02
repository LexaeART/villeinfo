<?php
  if(isset($_GET['content']) && $_GET['content']=='association'){
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'association </th>
          <th scope="col">Supprimer</th>
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
                  <center><p><?= $associationQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=association&confirmDelete=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=association" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $associationQuery->id ?></th>
          <td><?= $associationQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
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
