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
  <link rel="icon" type="image/png" href="assets/images/logovillet.png" />
  <link href="assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/admin.css" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 titlePage">
        <div class="row">
          <div class="col-1">
            <img src="assets/images/logovillet.png" />
          </div>
          <div class="col-10 title">
            <h1>Page d'administration de Ville</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="btnAdd">
        <button class="fill" data-toggle="modal" data-target="#add">Ajouter</button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Rajout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="nomEcole">École</label>
                  <input type="text" class="form-control" id="nomEcole" placeholder="Nom de l'école">
                </div>
                <div class="form-group">
                  <label for="nomDirecteur">Directeur</label>
                  <input type="text" class="form-control" id="nomDirecteur" placeholder="Nom du Directeur">
                </div>
                <div class="form-group">
                  <label for="nomEnseignant1">Enseignant</label>
                  <input type="text" class="form-control" id="nomEnseignant1" placeholder="Nom de l'enseignant">
                </div>
                <div class="form-group">
                  <label for="nomEnseignant2">Enseignant</label>
                  <input type="text" class="form-control" id="nomEnseignant2" placeholder="Nom de l'enseignant">
                </div>
                <div class="form-group">
                  <label for="nomEnseignant3">Enseignant</label>
                  <input type="text" class="form-control" id="nomEnseignant3" placeholder="Nom de l'enseignant">
                </div>
                <div class="form-group">
                  <label for="nomEnseignant4">Enseignant</label>
                  <input type="text" class="form-control" id="nomEnseignant4" placeholder="Nom de l'enseignant">
                </div>
                <div class="form-group">
                  <label for="file">Image</label>
                  <input type="file" name="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <caption>Liste des écoles</caption>
        <thead>
          <tr>
            <th scope="col">Libélé</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Modifier</th>
            <th scope="col">Dernière modification</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ecole de Suzoy</td>
            <td class="delete" data-toggle="modal" data-target="#exampleModal">
              <div style="height:100%;width:100%">
                Supprimer
              </div>
            </td>
            <td class="modify"><a href="http://example.com">
              <div style="height:100%;width:100%">
                Modifier
              </div>
            </a></td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Vous êtes sur le point d'effacer "Ecole de Suzoy".<br />
                    Confirmer l'action pour le supprimer définitivement.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer </button>
                  </div>
                </div>
              </div>
            </div>
            <td></td>
          </tr>
          <tr>
            <td>Ecole de Ville</td>
            <td class="delete" data-toggle="modal" data-target="#deleteVille">
              <div style="height:100%;width:100%">
                Supprimer
              </div>
            </td>
            <td class="modify"><a href="http://example.com">
              <div style="height:100%;width:100%">
                Modifier
              </div>
            </a></td>

            <div class="modal fade" id="deleteVille" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Vous êtes sur le point d'effacer "Ecole de Ville".<br />
                    Confirmer l'action pour le supprimer définitivement.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer </button>
                  </div>
                </div>
              </div>
            </div>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Ecole de Passel</td>
            <td class="delete" data-toggle="modal" data-target="#deletePassel">
              <div style="height:100%;width:100%">
                Supprimer
              </div>
            </td>
            <td class="modify"><a href="http://example.com">
              <div style="height:100%;width:100%">
                Modifier
              </div>
            </a></td>

            <div class="modal fade" id="deletePassel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Vous êtes sur le point d'effacer "Ecole de Passel".<br />
                    Confirmer l'action pour le supprimer définitivement.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer </button>
                  </div>
                </div>
              </div>
            </div>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <script src="assets/lib/bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="assets/js/main.js" type="text/javascript"></script>
</body>
</html>
