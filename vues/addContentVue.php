<?php

/* ASSOCIATION*/

  if(isset($_GET['content']) && $_GET['content']=='association'){
    ?>
    <h3>Ajout d'une association</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'association</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'association">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="namePresident">Nom du président</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Nom du président">
    <?= isset($formError['namePresident']) ? $formError['namePresident'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Déscription de l'association</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Déscription de l'association"></textarea>
<?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image de l'association</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addAssoc">Ajouter une association</button>
</form>
<?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?>
    <?php

/* ACTIVITES */

  }elseif(isset($_GET['content']) && $_GET['content']=='activites') {
    ?>
    <h3>Ajout d'une activité</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'activité</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'association">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Déscription de l'activité</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Déscription de l'association"></textarea>
<?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image de l'activité</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addActivity">Ajouter une activité</button>
</form>
<h3>Ajout des tarifs d'une activité</h3>
<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
  <label for="concernActivity">Activités concérnée</label>
  <select class="" name="concernActivity">
    <?php foreach ($allActivitiesQuery as $allActivitiesQuery){ ?>
    <option value="<?= $allActivitiesQuery->id ?>"><?= $allActivitiesQuery->name ?></option>
    <?php } ?>
  </select>
  <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
<div class="form-group">
<label for="nameAssoc">Lieu de résidence de l'adhérant</label>
<input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Lieu de résidence de l'adhérant">
<?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
</div>
<div class="form-group">
<label for="namePresident">Prix de l'activité</label>
<input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Prix de l'activité">
<?= isset($formError['namePresident']) ? $formError['namePresident'] : '' ?>
</div>
<div class="form-group">
<label for="caution">Caution de l'activité</label>
<input type="text" class="form-control" id="namePresident" name="caution" aria-describedby="namePresident" placeholder="Montant de la caution">
<?= isset($formError['namePresident']) ? $formError['namePresident'] : '' ?>
</div>
<button type="submit" class="btn btn-primary" name="addPriceActivity">Ajouter une association</button>
</form>
    <?php

/* ECOLES */

  }elseif(isset($_GET['content']) && $_GET['content']=='ecole') {
    ?>
    <h3>Ajout d'une école</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'école</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'école">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Nom de la diréctrice</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Nom de la directrice"></textarea>
<?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image de l'école</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addSchool">Ajouter une école</button>
</form>
    <?php

/* PATRIMOINE */

  }elseif(isset($_GET['content']) && $_GET['content']=='patrimoine') {
    ?>
    <h3>Ajout d'un patrimoine</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom du patrimoine</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom du patrimoine">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Déscription du patrimoine</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Déscription du patrimoine"></textarea>
<?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image du patrimoine</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addPatrimoine">Ajouter un patrimoine</button>
</form>
<?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?>
    <?php

/* DEMARCHES */

  }elseif(isset($_GET['content']) && $_GET['content']=='demarches') {
    ?>
    <h3>Ajout d'une démarche</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de la démarche</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de la démarche">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">A qui s'adresser ?</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="A qui s'adresser ?"></textarea>
<?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Documents à fournir</label>
    <textarea class="form-control" id="descriptionAssoc" name="docDemarche" aria-describedby="descriptionAssoc" placeholder="Document à fournir"></textarea>
<?= isset($formError['docDemarche']) ? $formError['docDemarche'] : '' ?>
  </div>
  <div class="form-group">
    <label for="costDemarche">Coût de la démarche</label>
    <input type="text" class="form-control" id="nameAssoc" name="costDemarche" aria-describedby="nameAssoc" placeholder="Coût de la démarche">
    <?= isset($formError['costDemarche']) ? $formError['costDemarche'] : '' ?>
  </div>
  <div class="form-group">
    <label for="moreDemarche">Informations supplémentaires</label>
    <textarea class="form-control" id="descriptionAssoc" name="moreDemarche" aria-describedby="descriptionAssoc" placeholder="Informations supplémentaires"></textarea>
<?= isset($formError['moreDemarche']) ? $formError['moreDemarche'] : '' ?>
  </div>
  <button type="submit" class="btn btn-primary" name="addDemarche">Ajouter une démarche</button>
</form>
<?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?>
    <?php

/* CONSEIL */

  }elseif(isset($_GET['content']) && $_GET['content']=='conseil') {
    ?>
    <h3>Ajout d'un élus</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'élus</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'élus">
    <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
  </div>
  <div class="form-group">
    <label for="namePresident">Fonction de l'élus</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Fonction de l'élus">
    <?= isset($formError['namePresident']) ? $formError['namePresident'] : '' ?>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Photo de l'élus</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addConseil">Ajouter l'élus</button>
</form>
<?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?>
    <?php

/* REUNIONS */

  }elseif(isset($_GET['content']) && $_GET['content']=='reunions') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php

/* DOCUMENTS */

  }elseif(isset($_GET['content']) && $_GET['content']=='documents') {
    ?>
    <form class="" action="#" method="post">

    </form>
    <?php
  }
 ?>
