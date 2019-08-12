<?php

class demarches extends dataBase {

    public $id = 0;
    public $name = '';
    public $contact = '';
    public $doc = '';
    public $prix = '';
    public $more = '';

    public function __construct() {
        parent::__construct();
    }
    public function allDemarches() {
        $allDemarches = $this->db->query('SELECT `id`,`name`, `contact`, `doc`, `prix`, `more` FROM `demarche`');
        $allDemarches->execute();
        return $allDemarches = $allDemarches->fetchAll(PDO::FETCH_OBJ);
    }
    public function allDemarchesInfos() {
        $query = 'SELECT `id`,`name`, `contact`, `doc`, `prix`, `more` FROM `demarche` WHERE `id` = :id';
        $allDemarchesInfos = $this->db->prepare($query);
        $allDemarchesInfos->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allDemarchesInfos->execute();
        return $allDemarchesInfos = $allDemarchesInfos->fetch(PDO::FETCH_OBJ);
    }
    public function addDemarche() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `demarche`(`name`, `contact`, `doc`, `prix`, `more`) VALUES(:name, :contact, :doc, :prix, :more)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':contact', $this->contact, PDO::PARAM_STR);
        $addAssoc->bindValue(':doc', $this->doc, PDO::PARAM_STR);
        $addAssoc->bindValue(':prix', $this->prix, PDO::PARAM_STR);
        $addAssoc->bindValue(':more', $this->more, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function __destruct() {

    }

}

?>
