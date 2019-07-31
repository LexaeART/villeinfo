<?php

class users extends dataBase {

    public $id = 0;
    public $pseudo = '';
    public $user = '';
    public $password = '';
    public $firstName = '';
    public $lastName = '';

    public function __construct() {
        parent::__construct();
    }

    /*
     * Méthode permettant de récupérer les données d'inscription en fonction du pseudo renseigné
     */

    public function loginIn() {
        $userLog = $this->db->prepare('SELECT `id`,`user`, `password` FROM `users` WHERE `user` = :pseudo');
        $userLog->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $userLog->execute();
        return $userLog = $userLog->fetch(PDO::FETCH_OBJ);
    }

    /*
     * Méthode permettant d'obtenirtoute les informations de l'utilisateur connecté
     */
     public function connectedInfos() {
         $connectedInfos = $this->db->prepare('SELECT `id`,`user`, `password`, `firstName`, `lastName` FROM `users` WHERE `id` = :id');
         $connectedInfos->bindValue(':id', $this->id, PDO::PARAM_INT);
         $connectedInfos->execute();
         return $connectedInfos = $connectedInfos->fetch(PDO::FETCH_OBJ);
     }

    /*
     * Méthode permettant de récupérer les informations de tous les utilisateurs hors utilisateur connécté
     */



    /*
     * Méthode permettant de récuper tous les pseudo déjà existant
     */

     public function allPseudoUser() {
         $query = 'SELECT `id`, `user` FROM `users`';
         $responseRequest = $this->db->query($query);
         if (is_object($responseRequest)) {
             $pseudoList = $responseRequest->fetchAll(PDO::FETCH_ASSOC);
         }
         return $pseudoList;
     }
     public function allOthersUsers() {
         $allOthersUsers = $this->db->prepare('SELECT `id`, `user`, `firstName`, `lastName` FROM `users` WHERE `id` != :id');
         $allOthersUsers->bindValue(':id', $this->id, PDO::PARAM_INT);
         $allOthersUsers->execute();
         return $allOthersUsers = $allOthersUsers->fetchAll(PDO::FETCH_OBJ);
     }
    /*
     * Méthode permettant de récupérer l'id du dérnier utilisateur et de l'incrémenté de 1
     */

    public function lastId() {
        $lastId = $this->db->prepare('SELECT MAX(`id`)+1 AS lastId FROM users');
        $lastId->execute();
        if (is_object($lastId)) {
            return $lastId = $lastId->fetch(PDO::FETCH_OBJ);
        }
    }

    /*
     * Méthode permettant de récupérer le mot de passe de l'utilisateur
     */

    public function usedPassword() {
        $usedPassword = $this->db->prepare('SELECT password FROM users WHERE id = :id');
        $usedPassword->bindValue(':id', $this->id, PDO::PARAM_STR);
        $usedPassword->execute();
        if (is_object($usedPassword)) {
            return $usedPassword = $usedPassword->fetch(PDO::FETCH_OBJ);
        }
    }

    /*
     * Méthode permettant d'ajouter un utilisateur à la base de données
     */

    public function addUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `users`(`user`, `password`, `firstName`, `lastName`) VALUES(:pseudo, :password, :firstName, :lastName)';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $addUser->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $addUser->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addUser->execute();
    }

    /*
     * Méthode permettant de modifier les informations de l'utilisateur
     */

    public function updateInfoUsers() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET user = :pseudo  WHERE id = :id';
        $updateInfoUsers = $this->db->prepare($query);
        $updateInfoUsers->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updateInfoUsers->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateInfoUsers->execute();
    }

    /*
     * Méthode permettant de modifier l'avatar de l'utilisateur
     */

     public function deleteUser() {
         $query = 'DELETE FROM `users` WHERE `id` = :id';
         $savedHuntCount = $this->db->prepare($query);
         $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
         $savedHuntCount->execute();
         return $savedHuntCount;
     }

    /*
     * Méthode permettant de modifier le ot de passe de l'utilisateur
     */

    public function updatePassword() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE users SET password = :password WHERE id = :id';
        $updatePassword = $this->db->prepare($query);
        $updatePassword->bindValue(':id', $this->id, PDO::PARAM_STR);
        $updatePassword->bindValue(':password', $this->password, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updatePassword->execute();
    }



    public function __destruct() {

    }

}

?>
