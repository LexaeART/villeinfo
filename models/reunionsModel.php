<?php
include_once 'config.php';

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
        $allReunions = $this->db->query('SELECT `id`,`name` FROM '.self::PREFIX.'reunions ORDER BY `name` DESC');
        $allReunions->execute();
        return $allReunions = $allReunions->fetchAll(PDO::FETCH_OBJ);
    }
    public function allCr() {
        $query = 'SELECT `id`, `name`, `pdf` FROM '.self::PREFIX.'compterendus WHERE `idReunion` = :id';
        $allCr = $this->db->prepare($query);
        $allCr->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allCr->execute();
        return $allCr = $allCr->fetchAll(PDO::FETCH_OBJ);
    }
    public function allCrBis() {
        $allReunions = $this->db->query('SELECT `id`,`name`, `pdf` FROM '.self::PREFIX.'compterendus');
        $allReunions->execute();
        return $allReunions = $allReunions->fetchAll(PDO::FETCH_OBJ);
    }
    public function addReunion() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO '.self::PREFIX.'reunions(`name`) VALUES(:name)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function addCr() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO '.self::PREFIX.'compterendus(`name`, `pdf`, `idReunion`) VALUES(:name, :pdf, :id)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':pdf', $this->pdf, PDO::PARAM_STR);
        $addAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteCr() {
        $query = 'DELETE FROM '.self::PREFIX.'compterendus WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function updateCr() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE '.self::PREFIX.'compterendus SET name = :name,  pdf = :pdf WHERE id = :id';
        $udateAssoc = $this->db->prepare($query);
        $udateAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        $udateAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $udateAssoc->bindValue(':pdf', $this->pdf, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $udateAssoc->execute();
    }
    public function __destruct() {

    }

}

?>
