<?php
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
