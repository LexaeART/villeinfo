<?php

class ecoles extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }
    public function allEcoles() {
        $allEcoles = $this->db->query('SELECT `id`,`name`, `picture` FROM `ecoles`');
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
    public function allDirectrice() {
        $query = 'SELECT `id`, `name` FROM `directrice` WHERE `idEcole` = :id';
        $allDirectrice = $this->db->prepare($query);
        $allDirectrice->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allDirectrice->execute();
        return $allDirectrice = $allDirectrice->fetch(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
