<?php
$user = new users();
$user->id = $_SESSION['id'];
$userConnected = $user->connectedInfos();
// On instensie la class user()
//La variable $pseudoList obtient le résultat de la méthode allPseudoUser() de la class user
$pseudoList = $user->allPseudoUser();

$lastId = $user->lastId();
//On crée le tableau vide des erreur
$formErrorPseudo = array();
$formError = array();
//On crée les regex
$regPseudo = '#^\S{2,36}$#';
$regMail = '#^[A-Z-a-z-0-9-.éàèîÏôöùüûêëç]{2,}@[A-Z-a-z-0-9éèàêâùïüëç]{2,}[.][a-z]{2,6}$#';
$regPassword = '#^\S{8,36}$#';
$regFriendCode = '/([0-9]{4}(-)){3}[0-9]{4}/';

/*
 * On vérifie que le champs pseudo existe et si il n'est pas vide
 * L'attribut pseudo de la class user obtient le pseudo entré "anti-injectionné de code"
 * On vérifi que l'attribut pseudo de la class user passe la regex
 * On parcourt le tableau $pseudoList élément par élément , 1 élement vaut $onePseudo
 * On vérifie que le pseudo est pas déjà utilisé en vérifiant que l'attribut pseudo de la class user ne soit pas égale à l'élément pseudo du tableau $onePseudo
 */

if (isset($_POST['updateInfos'])) {
    if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
        $user->pseudo = htmlspecialchars($_POST['pseudo']);
        if (!preg_match($regPseudo, $user->pseudo)) {
            $formErrorPseudo['pseudo'] = 'Le pseudo n\'est pas correct';
        } else {
            foreach ($pseudoList as $onePseudo) {
                if ($user->pseudo == $onePseudo['user']) {
                    $formErrorPseudo['pseudo'] = 'Le pseudo est déjà utilisé';
                }
            }
        }
    } else {
        $formErrorPseudo['pseudo'] = 'Le champ est vide';
    }





    if (isset($_POST['updateInfos']) && count($formErrorPseudo) == 0) {
        $user->id = $_SESSION['id'];
        $user->updateInfoUsers();
        $formErrorPseudo['validInfos'] = 'Modification enregistrées ! Redirection vers la page de profil !';
        ?>
        <meta http-equiv="refresh" content="1;URL=/connexion">
        <?php
    }
}



if (isset($_POST['updatePassword'])) {
    $passwordLog = htmlspecialchars($_POST['currentPassword']);
        if (isset($_POST['newPassword']) && !empty($_POST['newPassword'])) {
            if (isset($_POST['confirmNewPassword']) && !empty($_POST['confirmNewPassword'])) {
                if ($_POST['confirmNewPassword'] == $_POST['newPassword']) {
                    $user->password = htmlspecialchars($_POST['newPassword']);
                    if (preg_match($regPassword, $user->password)) {
                        $user->password = password_hash($user->password, PASSWORD_BCRYPT);
                        $updatePassword = $user->updatePassword();
                        $formError['validPassword'] = 'Mot de passe modifié ! Merci de vous reconnectez ! Rédirection dans 5sec';
                        ?>
                        <meta http-equiv="refresh" content="5;URL=/controllers/logout.php">
                        <?php
                    } else {
                        $formError['password'] = 'Le mot de passe n\'est pas correct';
                        $formError['confPassword'] = 'Le mot de passe n\'est pas correct';
                    }
                } else {
                    $formError['password'] = 'Le mot de passe et la confirmation du mot de passe ne sont pas les mêmes';
                }
            } else {
                $formError['confPassword'] = 'Le champ de la confirmation du mot de passe est vide';
            }
        } else {
            $formError['password'] = 'Un des champs est vide';
        }
}
?>
