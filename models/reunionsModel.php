<?php

class reunions extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';
    public $pdf = '';

    public function __construct() {
        parent::__construct();
    }
    public function allReunions() {
        $allReunions = $this->db->query('SELECT `id`,`name` FROM `reunions` ORDER BY `name` DESC');
        $allReunions->execute();
        return $allReunions = $allReunions->fetchAll(PDO::FETCH_OBJ);
    }
    public function allCr() {
        $query = 'SELECT `id`, `name`, `pdf` FROM `compterendus` WHERE `idReunion` = :id';
        $allCr = $this->db->prepare($query);
        $allCr->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allCr->execute();
        return $allCr = $allCr->fetchAll(PDO::FETCH_OBJ);
    }
    public function addReunion() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `reunions`(`name`) VALUES(:name)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function addCr() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `compterendus`(`name`, `pdf`, `idReunion`) VALUES(:name, :pdf, :id)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':pdf', $this->pdf, PDO::PARAM_STR);
        $addAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }

    public function __destruct() {

    }

}

?>
