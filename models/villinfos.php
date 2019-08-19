<?php

class infos extends dataBase {

    public $id = 0;
    public $name = '';
    public $corpus = '';
    public $year = 0;

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
    public function addVillinfo() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `villinfos`(`name`, `corpus`, `trimestre`, `year`) VALUES(:name, :corpus, :trimestre, :year)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':corpus', $this->corpus, PDO::PARAM_STR);
        $addAssoc->bindValue(':trimestre', $this->trimestre, PDO::PARAM_STR);
        $addAssoc->bindValue(':year', $this->year, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteVillinfo() {
        $query = 'DELETE FROM `villinfos` WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function __destruct() {

    }

}

?>
