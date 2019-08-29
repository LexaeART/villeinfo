<?php

/* ASSOCIATIONS */

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
                  <p>Modification de <?= $associationQuery->name ?></p>
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

/* ACTIVITES */

  }elseif(isset($_GET['content']) && $_GET['content']=='activites') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'activité </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=activites&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'activité</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Déscription de l'activité</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->description ?></textarea>
              <?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'activité</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->picture ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier l'activité</button>
              </form>
                </div>
                  </div>
              </div>
            </div>
            <div class="modal fade" id="tarif<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <p>Modification de <?= $associationQuery->name ?></p>
                  </div>
                  <div class="modal-body">
                    <?php
                      $updateAssoc->id = $associationQuery->id;
                      $tarifsQuery = $updateAssoc->allTarifs();
                      foreach($tarifsQuery as $tarifsQuery){
                    ?>
                    <form action="updateContent.php?content=activites&confirmUpdateTarif=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style="display:none;">
                        <label for="idTarif">ID</label>
                        <input type="text" class="form-control" id="idTarif" name="idTarif" aria-describedby="idTarif" value="<?= $tarifsQuery->id ?>">
                        <?= isset($formError['idTarif']) ? $formError['idTarif'] : '' ?>
                      </div>
                      <div class="form-group">
                        <label for="statusPrice">Statut adhérant</label>
                        <input type="text" class="form-control" id="statusPrice" name="statusPrice" aria-describedby="statusPrice" value="<?= $tarifsQuery->statut ?>">
                        <?= isset($formError['statusPrice']) ? $formError['statusPrice'] : '' ?>
                      </div>
                        <div class="form-group">
                          <label for="price">Tarif</label>
                          <input type="text" class="form-control" id="price" name="price" aria-describedby="price" value="<?= $tarifsQuery->prix ?>">
                          <?= isset($formError['price']) ? $formError['price'] : '' ?>
                        </div>
                        <div class="form-group">
                          <label for="caution">Caution</label>
                          <input type="text" class="form-control" id="caution" name="caution" aria-describedby="caution" value="<?= $tarifsQuery->caution ?>">
                          <?= isset($formError['caution']) ? $formError['caution'] : '' ?>
                        </div>
                      <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier tarifs</button>
                        <hr>
                      </form>
                    <?php } ?>
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
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#tarif<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier tarifs</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php

/* ECOLES */

  }elseif(isset($_GET['content']) && $_GET['content']=='ecole') {
    ?>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom de l'activité </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=ecole&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'école</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="nameAssoc">Nom de la diréctrice</label>
                  <input type="text" class="form-control" id="nameBoss" name="nameBoss" aria-describedby="nameBoss" value="<?= $associationQuery->nameBoss ?>">
                  <?= isset($formError['nameBoss']) ? $formError['nameBoss'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'activité</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->picture ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier l'activité</button>
              </form>
                </div>
                  </div>
              </div>
            </div>
            <div class="modal fade" id="tarif<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <p>Modification des professeurs</p>
                  </div>
                  <div class="modal-body">
                    <?php
                      $updateAssoc->id = $associationQuery->id;
                      $tarifsQuery = $updateAssoc->allProfs();
                      foreach($tarifsQuery as $tarifsQuery){
                    ?>
                    <form action="updateContent.php?content=ecole&confirmUpdateTarif=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group" style="display:none;">
                        <label for="idTarif">ID</label>
                        <input type="text" class="form-control" id="idTarif" name="idTarif" aria-describedby="idTarif" value="<?= $tarifsQuery->id ?>">
                        <?= isset($formError['idTarif']) ? $formError['idTarif'] : '' ?>
                      </div>
                      <div class="form-group">
                        <label for="statusPrice">Nom de l'enseignant</label>
                        <input type="text" class="form-control" id="statusPrice" name="statusPrice" aria-describedby="statusPrice" value="<?= $tarifsQuery->name ?>">
                        <?= isset($formError['statusPrice']) ? $formError['statusPrice'] : '' ?>
                      </div>
                      <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier tarifs</button>
                        <hr>
                      </form>
                    <?php } ?>
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
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#tarif<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier tarifs</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php

/*  PATRIMOINE */

  }elseif(isset($_GET['content']) && $_GET['content']=='patrimoine') {
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
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=patrimoine&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
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

/* DEMARCHES */

  }elseif(isset($_GET['content']) && $_GET['content']=='demarches') {
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
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=demarches&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Déscription de l'association</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->contact ?></textarea>
              <?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="docDemarche">Déscription de l'association</label>
                  <textarea class="form-control" id="docDemarche" name="docDemarche" aria-describedby="docDemarche" value=""><?= $associationQuery->doc ?></textarea>
              <?= isset($formError['docDemarche']) ? $formError['docDemarche'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="prixDemarche">Déscription de l'association</label>
                  <textarea class="form-control" id="prixDemarche" name="prixDemarche" aria-describedby="prixDemarche" value=""><?= $associationQuery->prix ?></textarea>
              <?= isset($formError['prixDemarche']) ? $formError['prixDemarche'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="moreDemarche">Déscription de l'association</label>
                  <textarea class="form-control" id="moreDemarche" name="moreDemarche" aria-describedby="moreDemarche" value=""><?= $associationQuery->more ?></textarea>
              <?= isset($formError['moreDemarche']) ? $formError['moreDemarche'] : '' ?>
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

/* CONSEIL */

  }elseif(isset($_GET['content']) && $_GET['content']=='conseil') {
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
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=conseil&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Déscription de l'association</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->fonction ?></textarea>
              <?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'association</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->img ?>">
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

/* REUNIONS */

  }elseif(isset($_GET['content']) && $_GET['content']=='reunions') {
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
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=reunions&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'association</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->pdf ?>">
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

/* COMMISSIONS */

  }elseif(isset($_GET['content']) && $_GET['content']=='documents') {
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
                  <p>Modification de <?= $associationQuery->commission ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=documents&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->commission ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="objetCom">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="objetCom" aria-describedby="objetCom" value="<?= $associationQuery->objet ?>">
                  <?= isset($formError['objetCom']) ? $formError['objetCom'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="titCom">Nom de l'association</label>
                  <input type="text" class="form-control" id="titCom" name="titCom" aria-describedby="titCom" value="<?= $associationQuery->titulaire ?>">
                  <?= isset($formError['titCom']) ? $formError['titCom'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="supCom">Nom de l'association</label>
                  <input type="text" class="form-control" id="supCom" name="supCom" aria-describedby="supCom" value="<?= $associationQuery->suppleant ?>">
                  <?= isset($formError['supCom']) ? $formError['supCom'] : '' ?>
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
          <td><?= $associationQuery->commission ?></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php

/* VILLINFO */

  }elseif(isset($_GET['content']) && $_GET['content']=='villinfo') {
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
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=villinfo&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'association</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="triInfos">Nom de l'association</label>
                  <input type="text" class="form-control" id="triInfos" name="triInfos" aria-describedby="triInfos" value="<?= $associationQuery->trimestre ?>">
                  <?= isset($formError['triInfos']) ? $formError['triInfos'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="yearInfos">Nom de l'association</label>
                  <input type="text" class="form-control" id="yearInfos" name="yearInfos" aria-describedby="yearInfos" value="<?= $associationQuery->year ?>">
                  <?= isset($formError['yearInfos']) ? $formError['yearInfos'] : '' ?>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'association</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->corpus ?>">
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
  }
 ?>
