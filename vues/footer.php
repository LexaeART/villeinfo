<footer>
  <?php
  include_once 'models/dataBase.php';
  include_once 'models/newsletterModel.php';
  include_once 'controlers/newsletterControler.php';
  ?>
  <div class="container">
    <div class="modal fade bd-example-modal-lg" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h2>Inscription à la newsletter</h2>
            <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="mail">Votre adresse Mail</label>
            <input type="mail" class="form-control" id="mail" name="mail" aria-describedby="mail" value="">
          </div>
          <?= isset($formError['mail']) ? $formError['mail'] : '' ?>
          <div class="form-group">
            <label for="lastName">Votre Nom</label>
            <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastName" value="">
          </div>
          <?= isset($formError['lastName']) ? $formError['lastName'] : '' ?>
          <div class="form-group">
            <label for="firstName">Votre Prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName" value="">
          </div>
          <?= isset($formError['firstName']) ? $formError['firstName'] : '' ?>
          <div class="form-group">
            <div class="row">
              <div class="col-12">
                <input type="checkbox" name="accept" id="accept" value="accept" class="checkbox" tabindex="1">
<label for="accept" class="checkbox__label"><span class="checkbox__text">Vos informations serrons conservées afin que vous puissiez recevoir les newsletters, il vous serra possible de vous désabonner sans frais supplémentaires et à tout moment sur le site de la commune de ville ou via chaque mail que vous recevrez.</span></label>
              </div>
                  <?= isset($formError['accept']) ? $formError['accept'] : '' ?>

            </div>
          </div>
          <button type="submit" class="btn btn-primary btnAccept" name="confirmNews">S'inscrire</button>
        </form>
          </div>
            </div>
        </div>
      </div>
    <div class="row">
      <div class="col-12">
        <h3>Restez connecté</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs12 col-sm-12 col-md-6 col-lg-4">
        <h4>Newsletter</h4>
        <hr />
        <p>
          Chaque mois, recevez l’essentiel de Ville pour savoir tout ce qu’il se passe dans la commune.
        </p>
        <button class="fill"><a name="registration-button" data-toggle="modal" data-target="#newsModal"> S'inscrire</a></button>
      </div>
      <div class="col-xs12 col-sm-12 col-md-6 col-lg-4">
        <h4>Contactez Ville</h4>
        <hr />
        <p>
          La Mairie de Ville répond à toutes vos questions. A votre service du lundi au vendredi.
        </p>
        <button class="fill" onclick="window.location.href='mailto:san@antonio.net'">Contact</button>
      </div>
      <div class="col-xs12 col-sm-12 col-md-6 col-lg-4">
        <h4>Liens pratiques</h4>
        <hr />
        <ul>
          <li>
            <a href="mentions_legales">Mentions Légales</a>
          </li>
          <li>
            <a href="charte_de_confidencialite">Charte de confidentialité</a>
          </li>
          <li>
            <a href="nous_contacter">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
