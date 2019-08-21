<?php

class news extends dataBase {

    public $id = 0;
    public $title = '';
    public $body = '';
    public $categorie = '';
    public $mainPicture = '';
    public $dateDay = '';
    public $idUser = 0;

    public function __construct() {
        parent::__construct();
    }
    public function allNews() {
        $allDemarches = $this->db->query('SELECT `id`,`title`, `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` ORDER BY `id` DESC LIMIT 1,6');
        $allDemarches->execute();
        return $allDemarches = $allDemarches->fetchAll(PDO::FETCH_OBJ);
    }
    public function lastNews() {
        $allDemarches = $this->db->query('SELECT `id`,`title`, `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` WHERE `id` = ( SELECT MAX(`id`)FROM `news`)');
        $allDemarches->execute();
        return $allDemarches = $allDemarches->fetch(PDO::FETCH_OBJ);
    }
    public function maxNews() {
        $allDemarches = $this->db->query('SELECT `id`,`title`, `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` WHERE `id` = ( SELECT MAX(`id`)FROM `news`)');
        $allDemarches->execute();
        return $allDemarches = $allDemarches->fetch(PDO::FETCH_OBJ);
    }
    public function oneNews() {
        $query = 'SELECT `id`,`title`, `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` WHERE `id` = :id';
        $allProfs = $this->db->prepare($query);
        $allProfs->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allProfs->execute();
        return $allProfs = $allProfs->fetch(PDO::FETCH_OBJ);
    }
    public function newsPagination($offset) {
        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT `id`,`title`, SUBSTRING(`body`,1,350) AS `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` ORDER BY `id` DESC LIMIT 10 OFFSET :offset';
        $pokemonPage = $this->db->prepare($query);
        $pokemonPage->bindValue(':offset', $offset, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($pokemonPage->execute()) {
            $pokemonPage = $pokemonPage->fetchAll(PDO::FETCH_OBJ);
        } else {
            $pokemonPage = false;
        }
        return $pokemonPage;
    }
    public function newsPaginationAsc($offset) {
        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT `id`,`title`, SUBSTRING(`body`,1,350) AS `body`, `categorie`, `mainPicture`, `date`, `idUser` FROM `news` ORDER BY `id` ASC LIMIT 10 OFFSET :offset';
        $pokemonPage = $this->db->prepare($query);
        $pokemonPage->bindValue(':offset', $offset, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($pokemonPage->execute()) {
            $pokemonPage = $pokemonPage->fetchAll(PDO::FETCH_OBJ);
        } else {
            $pokemonPage = false;
        }
        return $pokemonPage;
    }
    public function addNews() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `news`(`title`, `body`, `categorie`, `mainPicture`, `date`, `idUser`) VALUES(:title, :body, :categorie, :mainPicture, :dateDay, :idUser)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':title', $this->title, PDO::PARAM_STR);
        $addAssoc->bindValue(':body', $this->body, PDO::PARAM_STR);
        $addAssoc->bindValue(':categorie', $this->categorie, PDO::PARAM_STR);
        $addAssoc->bindValue(':mainPicture', $this->mainPicture, PDO::PARAM_STR);
        $addAssoc->bindValue(':dateDay', $this->dateDay, PDO::PARAM_STR);
        $addAssoc->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteNews() {
        $query = 'DELETE FROM `demarche` WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function __destruct() {

    }

}

?>
