<?php session_start();?>
<?php
if(!isset($_SESSION['id'])){
  ?>
  <h2>Vous n'êtes pas autorisé à acceder à cette page veuillez vous connecter</h2>
  <?php
}else{
  ?>
  <!doctype html>
  <html lang="fr">
  <head>
    <!--        <base href="https://www.villeinfo.fr" />-->
    <!--        <meta name="generator" content="Jekyll v3.8.5" />-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Kaiartsu est une agence web basée en Hauts-de-France. Spécialisée dans le développement de site web et d'identité visuelle." />
    <meta name="publisher" content="Kaiartsu">
    <meta name="author" content="Kaiartsu" />
    <meta name="reply-to" content="contact@kaiartsu.fr">
    <title>Accueil | Mairie de la commune de Ville | Hauts-de-France</title>
    <!-- Link CSS -->
    <link rel="shortcut icon" type="assets/images/logo/fav.png" href="assets/images/logo/fav.png"/>
    <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/admin.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/9d0dc13277.js"></script>
  </head>
  <?php
  include_once 'models/dataBase.php';
  include_once 'models/users.php';
  include_once 'models/newsModel.php';
  include_once 'controlers/adminController.php';
  include_once 'controlers/addContentControler.php';
  ?>
  <body>
    <div class="container-fluid">
      <h3>Ajout d'un article</h3>
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titleNews">Titre de l'article</label>
          <input type="text" class="form-control" id="titleNews" name="titleNews" aria-describedby="titleNews" placeholder="Titre de l'article">
          <?= isset($formError['titleNews']) ? $formError['titleNews'] : '' ?>
        </div>
        <div class="form-group">
          <label for="bodyNews">Contenu de l'article</label>
          <textarea class="form-control" id="bodyNews" name="bodyNews" aria-describedby="bodyNews" placeholder="Corps de l'article"></textarea>
          <?= isset($formError['bodyNews']) ? $formError['bodyNews'] : '' ?>
        </div>
        <div class="form-group">
          <label for="catNews">Catégorie de l'article</label>
          <input type="text" class="form-control" id="catNews" name="catNews" aria-describedby="catNews" placeholder="Catégorie de l'article">
          <?= isset($formError['catNews']) ? $formError['catNews'] : '' ?>
        </div>
        <div class="form-group">
          <label for="pictureAssoc">Image de l'article</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture">
        </div>
        <button type="submit" class="btn btn-primary" name="addNews">Ajouter l'article</button>
      </form>
    </div>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/addContent.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({
      selector: 'textarea',  // change this value according to your HTML
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table directionality emoticons template paste'
      ],
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    });
    </script>
  </body>
  </html>
  <?php
  var_dump($_POST);
  var_dump($_SESSION['id']);
  var_dump(date("Y-n-j"));
}
?>
