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
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=activites&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=activites" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='ecole') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=ecole&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=ecole" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='patrimoine') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=patrimoine&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=patrimoine" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='demarches') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=demarches&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=demarches" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='conseil') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=conseil&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=conseil" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='reunions') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=reunions&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=reunions" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='documents') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->commission ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=documents&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=documents" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->commission ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }elseif(isset($_GET['content']) && $_GET['content']=='villinfo') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'aactivité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppresion de l'utilisateur :</p>
                </div>
                <div class="modal-body">
                  <center><p><?= $takeAllQuery->name ?></p></center>
                </div>
                <div class="modal-footer">
                  <form action="deleteContent.php?content=villinfo&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-6">
                        <input type="submit" class="btn" name="yesDelete" value="Oui">
                      </div>
                    </div>
                  </form>
                  <form action="deleteContent.php?content=villinfo" method="post" enctype="multipart/form-data">
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
          <th scope="row"><?= $takeAllQuery->id ?></th>
          <td><?= $takeAllQuery->name ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php
  }
 ?>
