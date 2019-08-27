<?php

class ecoles extends dataBase {

    public $id = 0;
    public $name = '';
    public $nameBoss = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }
    public function allEcoles() {
        $allEcoles = $this->db->query('SELECT `id`,`name`,`nameBoss`, `picture` FROM `ecoles`');
        $allEcoles->execute();
        return $allEcoles = $allEcoles->fetchAll(PDO::FETCH_OBJ);
    }
    public function allProfs() {
        $query = 'SELECT `id`, `name` FROM `profs` WHERE `idEcole` = :id';
        $allProfs = $this->db->prepare($query);
        $allProfs->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allProfs->execute();
        return $allProfs = $allProfs->fetchAll(PDO::FETCH_OBJ);
    }
    public function addSchool() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `ecoles`(`name`, `nameBoss`, `picture`) VALUES(:name, :description, :picture)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':description', $this->description, PDO::PARAM_STR);
        $addAssoc->bindValue(':picture', $this->picture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function addTeacher() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `profs`(`name`, `idEcole`) VALUES(:name, :id)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteSchool() {
        $query = 'DELETE FROM `ecoles` WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function deleteTeacher() {
        $query = 'DELETE FROM `profs` WHERE `idEcole` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function updateSchool() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE ecoles SET name = :name,  nameBoss = :nameBoss, picture = :picture WHERE id = :id';
        $udateAssoc = $this->db->prepare($query);
        $udateAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        $udateAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $udateAssoc->bindValue(':nameBoss', $this->nameBoss, PDO::PARAM_STR);
        $udateAssoc->bindValue(':picture', $this->picture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $udateAssoc->execute();
    }
    public function updateTeacher() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE profs SET name = :name WHERE id = :id';
        $udateAssoc = $this->db->prepare($query);
        $udateAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        $udateAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $udateAssoc->execute();
    }
    public function __destruct() {

    }

}

?>
