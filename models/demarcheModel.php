<?php

class demarches extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

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

    public function __destruct() {

    }

}

?>
