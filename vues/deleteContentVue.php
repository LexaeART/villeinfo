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
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression de l'association :</p>
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
                  <form action="supprimer_associations" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom de l'activité</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression de l'activité :</p>
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
                  <form action="supprimer_activites" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom de l'école</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression de l'école :</p>
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
                  <form action="supprimer_ecole" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom du patrimoine</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2>Valider la suppression du patrimoine :</h2>
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
                  <form action="supprimer_patrimoine" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom de la démarche</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression de la démarche :</p>
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
                  <form action="supprimer_demarches" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom du conseiller</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression du conseiller :</p>
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
                  <form action="supprimer_conseil" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom de la réunion</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression de la réunion :</p>
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
                  <form action="supprimer_reunions" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom du document</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression du document</p>
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
                  <form action="supprimer_documents" method="post" enctype="multipart/form-data">
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
          <th scope="col">Nom du Vill'Infos</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Valider la suppression du Vill'Infos :</p>
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
                  <form action="supprimer_villinfo" method="post" enctype="multipart/form-data">
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
