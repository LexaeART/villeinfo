<?php
include_once 'config.php';

class infos extends dataBase {

    public $id = 0;
    public $name = '';
    public $corpus = '';
    public $year = 0;

    public function __construct() {
        parent::__construct();
    }

    public function showInfo() {
        $showInfo = $this->db->query('SELECT `id`,`name`, `corpus`, `trimestre`, `year` FROM '.self::PREFIX.'villinfos');
        $showInfo->execute();
        return $showInfo = $showInfo->fetchAll(PDO::FETCH_OBJ);
    }
    public function allYears() {
        $allYears = $this->db->query('SELECT `id`,`year` FROM '.self::PREFIX.'villinfos GROUP BY `year`');
        $allYears->execute();
        return $allYears = $allYears->fetchAll(PDO::FETCH_OBJ);
    }

    public function infosByYear() {
        $query = 'SELECT `id`,`name`, `corpus`, `trimestre`, `year` FROM '.self::PREFIX.'villinfos WHERE `year`=:id';
        $allDemarchesInfos = $this->db->prepare($query);
        $allDemarchesInfos->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allDemarchesInfos->execute();
        return $allDemarchesInfos = $allDemarchesInfos->fetchAll(PDO::FETCH_OBJ);
    }
    public function addVillinfo() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO '.self::PREFIX.'villinfos(`name`, `corpus`, `trimestre`, `year`) VALUES(:name, :corpus, :trimestre, :year)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':corpus', $this->corpus, PDO::PARAM_STR);
        $addAssoc->bindValue(':trimestre', $this->trimestre, PDO::PARAM_STR);
        $addAssoc->bindValue(':year', $this->year, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteVillinfo() {
        $query = 'DELETE FROM '.self::PREFIX.'villinfos WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function updateVillinfo() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE '.self::PREFIX.'villinfos SET name = :name,  corpus = :corpus, trimestre = :trimestre, year=:year WHERE id = :id';
        $udateAssoc = $this->db->prepare($query);
        $udateAssoc->bindValue(':id', $this->id, PDO::PARAM_STR);
        $udateAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $udateAssoc->bindValue(':corpus', $this->corpus, PDO::PARAM_STR);
        $udateAssoc->bindValue(':trimestre', $this->trimestre, PDO::PARAM_STR);
        $udateAssoc->bindValue(':year', $this->year, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $udateAssoc->execute();
    }
    public function __destruct() {

    }

}

?>
