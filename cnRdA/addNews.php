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
    <meta name="description" content="Retrouvez tous les services et démarches, les infos pratiques, les actualités et événements de la commune de Ville." />
    <meta name="publisher" content="Kaiartsu">
    <meta name="author" content="Kaiartsu" />
    <meta name="reply-to" content="contact@kaiartsu.fr">
    <title>Accueil | Mairie de la commune de Ville | Hauts-de-France</title>
    <!-- Link CSS -->
    <link rel="icon" type="image/png" href="/assets/images/logovillet.png" />
    <link href="/assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="/assets/css/admin.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://kit.fontawesome.com/9d0dc13277.js"></script>
  </head>
  <?php
  include_once '../models/dataBase.php';
  include_once '../models/users.php';
  include_once '../models/newsModel.php';
  include_once '../controlers/adminController.php';
  include_once '../controlers/newsControler.php';
  ?>
  <body>
    <div class="container-fluid">

<!-- AJOUT NEWS -->

      <?php if (isset($_GET['newsGestion']) && $_GET['newsGestion']=="addNews"){ ?>
      <div class="row">
        <div class="col-12 titlePage">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-3">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-8 title">
              <h1>Page d'administration des News du site</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="containerAdmin">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12" id="navAdmin">
            <h2>Ajout d'un article</h2>
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="titleNews">Titre de l'article</label>
                <input type="text" class="form-control" id="titleNews" name="titleNews" aria-describedby="titleNews" placeholder="Titre de l'article">
                <?= isset($formError['titleNews']) ? $formError['titleNews'] : '' ?>
              </div>
              <div class="form-group">
                <label for="bodyNews">Corps de l'article</label>
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
          <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 d-none d-lg-block d-xl-block" id="profilAdmin">
            <div class="row">
              <div class="col-10 offset-1" id="imgProfilAdmin">
              </div>

              <div class="col-10 offset-1" id="profil">
                <div class="row">
                  <div class="col-12" id="nameProfil">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                  </div>
                  <a href="gestion_articles">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retour
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="accueil_ville">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retournez sur le site
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="logout.php">
                    <div class="col-12" id="decoProfil">
                      <div class="row">
                        <div class="col-3">
                          <i class="fas fa-power-off"></i>
                        </div>
                        <div class="col-6">
                          <p>Déconnexion</p>
                        </div>
                      </div>
                  </div></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Version mobile -->
          <div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none" id="profilAdminMobile">
            <div class="row">
              <div class="col-10 offset-1" id="profilMobile">
                <div class="row">
                  <div class="col-7" id="nameProfilMobile">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                    <a href="logout.php">
                      <div class="col-12" id="decoProfilMobile">
                        <div class="row">
                          <div class="col-12">
                            <i class="fas fa-power-off"></i>Déconnexion
                          </div>
                        </div>
                    </div></a>
                  </div>
                  <div class="col-5" id="menuProfilMobi">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }elseif (isset($_GET['newsGestion']) && $_GET['newsGestion']=="updateNews") {?>
      <div class="row">
        <div class="col-12 titlePage">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-3">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-8 title">
              <h1>Page d'administration de Ville</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12" id="navAdmin">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom de l'article </th>
                    <th scope="col">Modifier</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($associationQuery as $associationQuery){ ?>
                    <div class="modal fade" id="EditProfile<?= $associationQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <p>Modification de <?= $associationQuery->title ?></p>
                          </div>
                          <div class="modal-body">
                            <form action="addNews.php?newsGestion=updateNews&confirmUpdate=<?= $associationQuery->id ?>" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="nameAssoc">Titre de l'article</label>
                            <input type="text" class="form-control" id="nameAssoc" name="nameAssoc" aria-describedby="nameAssoc" value="<?= $associationQuery->title ?>">
                            <?= isset($formError['nameAssoc']) ? $formError['nameAssoc'] : '' ?>
                          </div>
                          <div class="form-group">
                            <label for="categorieNews">Catégorie de l'article</label>
                            <input type="text" class="form-control" id="categorieNews" name="categorieNews" aria-describedby="categorieNews" value="<?= $associationQuery->categorie ?>">
                            <?= isset($formError['categorieNews']) ? $formError['categorieNews'] : '' ?>
                          </div>
                          <div class="form-group">
                            <label for="descriptionAssoc">Corps de l'article</label>
                            <textarea class="form-control" id="descriptionAssoc" name="descriptionAssoc" aria-describedby="descriptionAssoc" value=""><?= $associationQuery->body ?></textarea>
                        <?= isset($formError['descriptionAssoc']) ? $formError['descriptionAssoc'] : '' ?>
                          </div>
                          <div class="form-group">
                            <label for="pictureAssoc">Image de l'article</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profilePicture" value="<?= $associationQuery->mainPicture ?>">
                          </div>
                          <button type="submit" class="btn btn-primary" name="confirmUpdate">Modifier l'article</button>
                        </form>
                          </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <tr>
                    <th scope="row"><?= $associationQuery->id ?></th>
                    <td><?= $associationQuery->title ?></td>
                    <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $associationQuery->id ?>"><i class="fas fa-lock"></i> Modifier</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 d-none d-lg-block d-xl-block" id="profilAdmin">
            <div class="row">
              <div class="col-10 offset-1" id="imgProfilAdmin">
              </div>

              <div class="col-10 offset-1" id="profil">
                <div class="row">
                  <div class="col-12" id="nameProfil">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                  </div>
                  <a href="menu_admin">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retour
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="accueil_ville">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retournez sur le site
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="logout.php">
                    <div class="col-12" id="decoProfil">
                      <div class="row">
                        <div class="col-3">
                          <i class="fas fa-power-off"></i>
                        </div>
                        <div class="col-6">
                          <p>Déconnexion</p>
                        </div>
                      </div>
                  </div></a>
                </div>
              </div>
              </div>
            </div>
            <!-- Version mobile -->
            <div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none" id="profilAdminMobile">
              <div class="row">
                <div class="col-10 offset-1" id="profilMobile">
                  <div class="row">
                    <div class="col-7" id="nameProfilMobile">
                      <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                      <a href="logout.php">
                        <div class="col-12" id="decoProfilMobile">
                          <div class="row">
                            <div class="col-12">
                              <i class="fas fa-power-off"></i>Déconnexion
                            </div>
                          </div>
                        </div></a>
                      </div>
                      <div class="col-5" id="menuProfilMobi">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php }elseif (isset($_GET['newsGestion']) && $_GET['newsGestion']=="deleteNews") { ?>
        <div class="row">
          <div class="col-12 titlePage">
            <div class="row">
              <div class="col-lg-1 col-md-2 col-sm-3 col-3">
              </div>
              <div class="col-lg-10 col-md-9 col-sm-8 col-8 title">
                <h1>Page d'administration de Ville</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12" id="navAdmin">
              <h2>Page de suppresion d'un article</h2>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom de l'article </th>
                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($takeAllQuery as $takeAllQuery){ ?>
                    <div class="modal fade" id="EditProfile<?= $takeAllQuery->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <p>Valider la suppresion de l'article :</p>
                          </div>
                          <div class="modal-body">
                            <center><p><?= $takeAllQuery->title ?></p></center>
                          </div>
                          <div class="modal-footer">
                            <form action="addNews.php?newsGestion=deleteNews&confirmDelete=<?= $takeAllQuery->id ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-6">
                                  <input type="submit" class="btn" name="yesDelete" value="Oui">
                                </div>
                              </div>
                            </form>
                            <form action="supprimer_news" method="post" enctype="multipart/form-data">
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
                    <td><?= $takeAllQuery->title ?></td>
                    <td><a name="registration-button" class="registration-link btn btn-danger" data-toggle="modal" data-target="#EditProfile<?= $takeAllQuery->id ?>"><i class="fas fa-lock"></i> Supprimer</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 d-none d-lg-block d-xl-block" id="profilAdmin">
              <div class="row">
                <div class="col-10 offset-1" id="imgProfilAdmin">
                </div>

                <div class="col-10 offset-1" id="profil">
                  <div class="row">
                    <div class="col-12" id="nameProfil">
                      <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                    </div>
                    <a href="gestion_articles">
                      <div class="row">
                        <div class="col-12" id="backToWeb">
                          <p>
                            Retour
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="accueil_ville">
                      <div class="row">
                        <div class="col-12" id="backToWeb">
                          <p>
                            Retournez sur le site
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="logout.php">
                      <div class="col-12" id="decoProfil">
                        <div class="row">
                          <div class="col-3">
                            <i class="fas fa-power-off"></i>
                          </div>
                          <div class="col-6">
                            <p>Déconnexion</p>
                          </div>
                        </div>
                      </div></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Version mobile -->
              <div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none" id="profilAdminMobile">
                <div class="row">
                  <div class="col-10 offset-1" id="profilMobile">
                    <div class="row">
                      <div class="col-7" id="nameProfilMobile">
                        <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                        <a href="logout.php">
                          <div class="col-12" id="decoProfilMobile">
                            <div class="row">
                              <div class="col-12">
                                <i class="fas fa-power-off"></i>Déconnexion
                              </div>
                            </div>
                          </div></a>
                        </div>
                        <div class="col-5" id="menuProfilMobi">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <?php }else{ ?>
      <div class="row">
        <div class="col-12 titlePage">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-3">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-8 title">
              <h1>Page d'administration des News du site</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="containerAdmin">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12" id="navAdmin">
            <div class="row">
              <div class="col-12">
                <h2>Bonjour <?= $connectedInfos->firstName ?>, sélectionnez ce que vous souhaitez faire.</h2>
              </div>
            </div>
            <div class="row">
              <a href="ajout_news">
                <div class="col-12 lineAdmin">
                  <h3>Ajouter un article</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="modifier_news">
                <div class="col-12 lineAdmin">
                  <h3>Modifier un article</h3>
                </div>
              </a>
            </div>
            <div class="row">
              <a href="supprimer_news">
                <div class="col-12 lineAdmin">
                  <h3>Supprimer un article</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 d-none d-lg-block d-xl-block" id="profilAdmin">
            <div class="row">
              <div class="col-10 offset-1" id="imgProfilAdmin">
              </div>

              <div class="col-10 offset-1" id="profil">
                <div class="row">
                  <div class="col-12" id="nameProfil">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                  </div>
                  <a href="menu_admin">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retour
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="accueil_ville">
                    <div class="row">
                      <div class="col-12" id="backToWeb">
                        <p>
                          Retournez sur le site
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="logout.php">
                    <div class="col-12" id="decoProfil">
                      <div class="row">
                        <div class="col-3">
                          <i class="fas fa-power-off"></i>
                        </div>
                        <div class="col-6">
                          <p>Déconnexion</p>
                        </div>
                      </div>
                  </div></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Version mobile -->
          <div class="col-md-12 col-sm-12 col-12 d-lg-none d-xl-none" id="profilAdminMobile">
            <div class="row">
              <div class="col-10 offset-1" id="profilMobile">
                <div class="row">
                  <div class="col-7" id="nameProfilMobile">
                    <h3><?= $connectedInfos->firstName ?> <?= $connectedInfos->lastName ?></h3>
                    <a href="logout.php">
                      <div class="col-12" id="decoProfilMobile">
                        <div class="row">
                          <div class="col-12">
                            <i class="fas fa-power-off"></i>Déconnexion
                          </div>
                        </div>
                    </div></a>
                  </div>
                  <div class="col-5" id="menuProfilMobi">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>
    <script src="/assets/js/main.js" type="text/javascript"></script>
    <script src="/assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="/assets/js/addContent.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({
      selector: 'textarea',
      height : 400,  // change this value according to your HTML
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
}
?>
