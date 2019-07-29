<?php

class infos extends dataBase {

    public $id = 0;
    public $name = '';
    public $corpus = '';
    public $date = '';

    public function __construct() {
        parent::__construct();
    }

    public function showInfo() {
        $showInfo = $this->db->query('SELECT `id`,`name`, `corpus`, `trimestre`, `year` FROM `villinfos`');
        $showInfo->execute();
        return $showInfo = $showInfo->fetchAll(PDO::FETCH_OBJ);
    }
    public function allYears() {
        $allYears = $this->db->query('SELECT `id`,`year` FROM `villinfos` GROUP BY `year`');
        $allYears->execute();
        return $allYears = $allYears->fetchAll(PDO::FETCH_OBJ);
    }

    public function infosByYear() {
        $query = 'SELECT `id`,`name`, `corpus`, `trimestre`, `year` FROM `villinfos` WHERE `year`=:id';
        $allDemarchesInfos = $this->db->prepare($query);
        $allDemarchesInfos->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allDemarchesInfos->execute();
        return $allDemarchesInfos = $allDemarchesInfos->fetchAll(PDO::FETCH_OBJ);
    }

    public function __destruct() {

    }

}

?>
