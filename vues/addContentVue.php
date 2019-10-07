<?php

/* ASSOCIATION*/

  if(isset($_GET['content']) && $_GET['content']=='association'){
    ?>
    <h3>Ajout d'une association</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'association</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'association">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="namePresident">Nom du président</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Nom du président">
    <?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Description de l'association</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Description de l'association"></textarea>
<?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image de l'association</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addAssoc">Ajouter une association</button>
</form>
<?php if(isset($formError['errorFile'])){?><p class="alert alert-danger"><?php echo $formError['errorFile'];}?></p>
    <?php

/* ACTIVITES */

  }elseif(isset($_GET['content']) && $_GET['content']=='activites') {
    ?>
    <h3>Ajout d'une activité</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'activité</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'activité">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Description de l'activité</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Description de l'activité"></textarea>
<?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
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
  <label for="concernActivity">Activité concérnée</label>
  <select class="" name="concernActivity">
    <?php foreach ($allActivitiesQuery as $allActivitiesQuery){ ?>
    <option value="<?= $allActivitiesQuery->id ?>"><?= $allActivitiesQuery->name ?></option>
    <?php } ?>
  </select>
  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
<div class="form-group">
<label for="nameAssoc">Lieu de résidence de l'adhérant</label>
<input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Lieu de résidence de l'adhérant">
<?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
</div>
<div class="form-group">
<label for="namePresident">Prix de l'activité</label>
<input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Prix de l'activité">
<?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
</div>
<div class="form-group">
<label for="caution">Caution de l'activité</label>
<input type="text" class="form-control" id="namePresident" name="caution" aria-describedby="namePresident" placeholder="Montant de la caution">
<?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
</div>
<button type="submit" class="btn btn-primary" name="addPriceActivity">Ajouter les tarifs</button>
</form>
    <?php
  }

/* ECOLES */

  elseif(isset($_GET['content']) && $_GET['content']=='ecole') {
    ?>
    <h3>Ajout d'une école</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'école</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'école">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Nom de la directrice</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Nom de la directrice"></textarea>
<?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image de l'école</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addSchool">Ajouter une école</button>
</form>
<h3>Ajout d'enseignants</h3>
<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
  <label for="concernActivity">École concérnée</label>
  <select class="" name="concernActivity">
    <?php foreach ($allSchool as $allSchool){ ?>
    <option value="<?= $allSchool->id ?>"><?= $allSchool->name ?></option>
    <?php } ?>
  </select>
  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
<div class="form-group">
<label for="nameAssoc">Prénom et NOM de l'enseignant</label>
<input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Prenom et Nom de l'enseignant">
<?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
</div>
<button type="submit" class="btn btn-primary" name="addTeacher">Ajouter l'enseignant</button>
</form>
    <?php
  }

/* PATRIMOINE */

  elseif(isset($_GET['content']) && $_GET['content']=='patrimoine') {
    ?>
    <h3>Ajout d'un patrimoine</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom du patrimoine</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom du patrimoine">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Description du patrimoine</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="Description du patrimoine"></textarea>
<?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Image du patrimoine</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addPatrimoine">Ajouter un patrimoine</button>
</form>
<?php if(isset($formError['errorFile'])){?><p class="alert alert-danger"><?php echo $formError['errorFile'];}?></p>
    <?php

/* DEMARCHES */

  }elseif(isset($_GET['content']) && $_GET['content']=='demarches') {
    ?>
    <h3>Ajout d'une démarche</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de la démarche</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de la démarche">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">A qui s'adresser ?</label>
    <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" placeholder="A qui s'adresser ?"></textarea>
<?php if(isset($formError['descriptionAssoc'])){?><p class="alert alert-danger"><?php echo $formError['descriptionAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="descriptionAssoc">Documents à fournir</label>
    <textarea class="form-control" id="descriptionAssoc" name="docDemarche" aria-describedby="descriptionAssoc" placeholder="Document à fournir"></textarea>
<?php if(isset($formError['docDemarche'])){?><p class="alert alert-danger"><?php echo $formError['docDemarche'];}?></p>
  </div>
  <div class="form-group">
    <label for="costDemarche">Coût de la démarche</label>
    <input type="text" class="form-control" id="nameAssoc" name="costDemarche" aria-describedby="nameAssoc" placeholder="Coût de la démarche">
    <?php if(isset($formError['costDemarche'])){?><p class="alert alert-danger"><?php echo $formError['costDemarche'];}?></p>
  </div>
  <div class="form-group">
    <label for="moreDemarche">Informations supplémentaires</label>
    <textarea class="form-control" id="descriptionAssoc" name="moreDemarche" aria-describedby="descriptionAssoc" placeholder="Informations supplémentaires"></textarea>
<?php if(isset($formError['moreDemarche'])){?><p class="alert alert-danger"><?php echo $formError['moreDemarche'];}?></p>
  </div>
  <button type="submit" class="btn btn-primary" name="addDemarche">Ajouter une démarche</button>
</form>
<?php if(isset($formError['errorFile'])){?><p class="alert alert-danger"><?php echo $formError['errorFile'];}?></p>
    <?php

/* CONSEIL */

  }elseif(isset($_GET['content']) && $_GET['content']=='conseil') {
    ?>
    <h3>Ajout d'un élu</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de l'élu</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de l'élu">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="namePresident">Fonction de l'élu</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Fonction de l'élu">
    <?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
  </div>
  <div class="form-group">
    <label for="pictureAssoc">Photo de l'élu</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addConseil">Ajouter l'élu</button>
</form>
<?php if(isset($formError['errorFile'])){?><p class="alert alert-danger"><?php echo $formError['errorFile'];}?></p>
    <?php

/* REUNIONS */

  }elseif(isset($_GET['content']) && $_GET['content']=='reunions') {
    ?>
    <h3>Ajout d'une réunion</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de la réunion</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de la réunion">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <button type="submit" class="btn btn-primary" name="addReunion">Ajouter une réunion</button>
</form>
<h3>Ajout d'un Compte-Rendu</h3>
<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
  <label for="concernActivity">Réunion concérnée</label>
  <select class="" name="concernActivity">
    <?php foreach ($allReunions as $allReunions){ ?>
    <option value="<?= $allReunions->id ?>"><?= $allReunions->name ?></option>
    <?php } ?>
  </select>
  <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
<div class="form-group">
<label for="nameAssoc">Nom du Compte-Rendu</label>
<input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom du Compte-Rendu">
<?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
</div>
<div class="form-group">
<label for="pictureAssoc">PDF du Compte-Rendu</label>
<input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
</div>
<button type="submit" class="btn btn-primary" name="addCr">Ajouter le Compte-Rendu</button>
</form>
<?php if(isset($formError['errorFile'])){?><p class="alert alert-danger"><?php echo $formError['errorFile'];}?></p>
    <?php

/* DOCUMENTS */

  }elseif(isset($_GET['content']) && $_GET['content']=='documents') {
    ?>
    <h3>Ajout d'une commission</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom de la commission</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom de la commission">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="namePresident">Objet de la commission</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Objet de la commission">
    <?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
  </div>
  <div class="form-group">
    <label for="nameTitu">Membres titulaires</label>
    <input type="text" class="form-control" id="nameTitu" name="nameTitu" aria-describedby="nameTitu" placeholder="Nom des titulaires">
    <?php if(isset($formError['nameTitu'])){?><p class="alert alert-danger"><?php echo $formError['nameTitu'];}?></p>
  </div>
  <div class="form-group">
    <label for="nameSup">Membres suppléants</label>
    <input type="text" class="form-control" id="nameSup" name="nameSup" aria-describedby="nameSup" placeholder="Nom des suppléants">
    <?php if(isset($formError['nameSup'])){?><p class="alert alert-danger"><?php echo $formError['nameSup'];}?></p>
  </div>
  <button type="submit" class="btn btn-primary" name="addCommissions">Ajouter la commission</button>
</form>
    <?php
  }

/* VILLINFOS */

  elseif(isset($_GET['content']) && $_GET['content']=='villinfo') {
    ?>
    <h3>Ajout d'un Vill'infos</h3>
    <form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameAssoc">Nom du Vill'Infos</label>
    <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" placeholder="Nom du Vill'Infos">
    <?php if(isset($formError['nameAssoc'])){?><p class="alert alert-danger"><?php echo $formError['nameAssoc'];}?></p>
  </div>
  <div class="form-group">
    <label for="namePresident">Trimestre du Vill'Infos</label>
    <input type="text" class="form-control" id="namePresident" name="namePresident" aria-describedby="namePresident" placeholder="Trimestre du Vill'Infos">
    <?php if(isset($formError['namePresident'])){?><p class="alert alert-danger"><?php echo $formError['namePresident'];}?></p>
  </div>
  <div class="form-group">
    <label for="yearInfo">Année du Vill'Infos</label>
    <input type="number" class="form-control" id="yearInfo" name="yearInfo" aria-describedby="yearInfo" placeholder="Année du Vill'Infos">
    <?php if(isset($formError['yearInfo'])){?><p class="alert alert-danger"><?php echo $formError['yearInfo'];}?></p>
  </div>
  <div class="form-group">
  <label for="pictureAssoc">PDF du Vill'Infos</label>
  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
  </div>
  <button type="submit" class="btn btn-primary" name="addVillinfo">Ajouter le Vill'Infos</button>
</form>
    <?php
  }
 ?>
