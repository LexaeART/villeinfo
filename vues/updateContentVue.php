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
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="namePresident">Nom du président</label>
                  <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" value="<?= $associationQuery->president ?>">
                  <?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Description de l'association</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->description ?></textarea>
              <?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
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
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=activites&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'activité</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Description de l'activité</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->description ?></textarea>
              <?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
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
            <div class="modal fade bd-example-modal-lg" id="tarif<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                        <?php if(isset($formError['idTarif'])){?><p class="alert alert-danger"><?php echo $formError['idTarif'];}?></p>
                      </div>
                      <div class="form-group">
                        <label for="statusPrice">Statut adhérant</label>
                        <input type="text" class="form-control" id="statusPrice" name="statusPrice" aria-describedby="statusPrice" value="<?= $tarifsQuery->statut ?>">
                        <?php if(isset($formError['statusPrice'])){?><p class="alert alert-danger"><?php echo $formError['statusPrice'];}?></p>
                      </div>
                        <div class="form-group">
                          <label for="price">Tarif</label>
                          <input type="text" class="form-control" id="price" name="price" aria-describedby="price" value="<?= $tarifsQuery->prix ?>">
                          <?php if(isset($formError['price'])){?><p class="alert alert-danger"><?php echo $formError['price'];}?></p>
                        </div>
                        <div class="form-group">
                          <label for="caution">Caution</label>
                          <input type="text" class="form-control" id="caution" name="caution" aria-describedby="caution" value="<?= $tarifsQuery->caution ?>">
                          <?php if(isset($formError['caution'])){?><p class="alert alert-danger"><?php echo $formError['caution'];}?></p>
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
          <th scope="col">Nom de l'école </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=ecole&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de l'école</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="nameAssoc">Nom de la directrice</label>
                  <input type="text" class="form-control" id="nameBoss" name="nameBoss" aria-describedby="nameBoss" value="<?= $associationQuery->nameBoss ?>">
                  <?php if(isset($formError['nameBoss'])){?><p class="alert alert-danger"><?php echo $formError['nameBoss'];}?></p>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image de l'école</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->picture ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier l'école</button>
              </form>
                </div>
                  </div>
              </div>
            </div>
            <div class="modal fade" id="tarif<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                        <?php if(isset($formError['idTarif'])){?><p class="alert alert-danger"><?php echo $formError['idTarif'];}?></p>
                      </div>
                      <div class="form-group">
                        <label for="statusPrice">Nom de l'enseignant</label>
                        <input type="text" class="form-control" id="statusPrice" name="statusPrice" aria-describedby="statusPrice" value="<?= $tarifsQuery->name ?>">
                        <?php if(isset($formError['statusPrice'])){?><p class="alert alert-danger"><?php echo $formError['statusPrice'];}?></p>
                      </div>
                      <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier enseignants</button>
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
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier l'école</a></td>
          <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#tarif<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier les enseignants</a></td>
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
          <th scope="col">Nom du patrimoine </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=patrimoine&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom du patrimoine</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">description du patrimoine</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->description ?></textarea>
              <?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Image du patrimoine</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->picture ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier le patrimoine</button>
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
          <th scope="col">Nom de la démarche </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=demarches&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de la démarche</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Où s'adresser</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->contact ?></textarea>
              <?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="docDemarche">Pièces à fournir ou Renseignements à donner</label>
                  <textarea class="form-control" id="docDemarche" name="docDemarche" aria-describedby="docDemarche" value=""><?= $associationQuery->doc ?></textarea>
              <?php if(isset($formError['docDemarche'])){?><p class="alert alert-danger"><?php echo $formError['docDemarche'];}?></p>
                </div>
                <div class="form-group">
                  <label for="prixDemarche">Coût</label>
                  <textarea class="form-control" id="prixDemarche" name="prixDemarche" aria-describedby="prixDemarche" value=""><?= $associationQuery->prix ?></textarea>
              <?php if(isset($formError['prixDemarche'])){?><p class="alert alert-danger"><?php echo $formError['prixDemarche'];}?></p>
                </div>
                <div class="form-group">
                  <label for="moreDemarche">Observations</label>
                  <textarea class="form-control" id="moreDemarche" name="moreDemarche" aria-describedby="moreDemarche" value=""><?= $associationQuery->more ?></textarea>
              <?php if(isset($formError['moreDemarche'])){?><p class="alert alert-danger"><?php echo $formError['moreDemarche'];}?></p>
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier la démarche</button>
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
          <th scope="col">Nom du conseiller </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=conseil&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom du conseiller</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="descriptionAssoc">Rôle du conseiller</label>
                  <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->fonction ?></textarea>
              <?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Photo du conseiller</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->img ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier le conseiller</button>
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
          <th scope="col">Nom de la réunion </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=reunions&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Nom de la réunion</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Compte rendu de la réunion</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->pdf ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier la réunion</button>
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
          <th scope="col">Nom de la comission </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->commission ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=documents&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Commission</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->commission ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="objetCom">Objet</label>
                  <input type="text" class="form-control" id="nameAssoc" name="objetCom" aria-describedby="objetCom" value="<?= $associationQuery->objet ?>">
                  <?php if(isset($formError['objetCom'])){?><p class="alert alert-danger"><?php echo $formError['objetCom'];}?></p>
                </div>
                <div class="form-group">
                  <label for="titCom">Membres titulaires</label>
                  <input type="text" class="form-control" id="titCom" name="titCom" aria-describedby="titCom" value="<?= $associationQuery->titulaire ?>">
                  <?php if(isset($formError['titCom'])){?><p class="alert alert-danger"><?php echo $formError['titCom'];}?></p>
                </div>
                <div class="form-group">
                  <label for="supCom">Membres supplémentaires</label>
                  <input type="text" class="form-control" id="supCom" name="supCom" aria-describedby="supCom" value="<?= $associationQuery->suppleant ?>">
                  <?php if(isset($formError['supCom'])){?><p class="alert alert-danger"><?php echo $formError['supCom'];}?></p>
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier le document</button>
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
          <th scope="col">Nom du Vill'Infos </th>
          <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($associationQuery as $associationQuery){ ?>
          <div class="modal fade bd-example-modal-lg" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <p>Modification de <?= $associationQuery->name ?></p>
                </div>
                <div class="modal-body">
                  <form action="updateContent.php?content=villinfo&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nameAssoc">Numéro du Vill'Infos</label>
                  <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->name ?>">
                  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
                </div>
                <div class="form-group">
                  <label for="triInfos">Trimestre du Vill'Infos</label>
                  <input type="text" class="form-control" id="triInfos" name="triInfos" aria-describedby="triInfos" value="<?= $associationQuery->trimestre ?>">
                  <?php if(isset($formError['triInfos'])){?><p class="alert alert-danger"><?php echo $formError['triInfos'];}?></p>
                </div>
                <div class="form-group">
                  <label for="yearInfos">Année du Vill'Infos</label>
                  <input type="text" class="form-control" id="yearInfos" name="yearInfos" aria-describedby="yearInfos" value="<?= $associationQuery->year ?>">
                  <?php if(isset($formError['yearInfos'])){?><p class="alert alert-danger"><?php echo $formError['yearInfos'];}?></p>
                </div>
                <div class="form-group">
                  <label for="pictureAssoc">Document du Vill'Infos</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->corpus ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier le Vill'Infos</button>
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
