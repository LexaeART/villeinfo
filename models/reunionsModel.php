<?php

class reunions extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }
    public function allReunions() {
        $allReunions = $this->db->query('SELECT `id`,`name` FROM `reunions`');
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


    public function __destruct() {

    }

}

?>
