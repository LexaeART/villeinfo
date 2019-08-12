<?php

class activites extends dataBase {

    public $id = 0;
    public $name = '';
    public $description = '';
    public $picture = '';
    public $statut = '';
    public $prix = '';
    public $caution = '';
    public $idActivite = '';

    public function __construct() {
        parent::__construct();
    }
    public function allActivites() {
        $showConseil = $this->db->query('SELECT `id`,`name`, `description`, `picture` FROM `activites`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }
    public function allTarifs() {
        $query = 'SELECT `statut`, `prix`, `caution` FROM `tarifs` WHERE `idActivite` = :id';
        $allTarifs = $this->db->prepare($query);
        $allTarifs->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $allTarifs->execute();
        return $allTarifs = $allTarifs->fetchAll(PDO::FETCH_OBJ);
    }
    public function addActivity() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `activites`(`name`, `description`, `picture`) VALUES(:name, :description, :picture)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':description', $this->description, PDO::PARAM_STR);
        $addAssoc->bindValue(':picture', $this->picture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function addPrice() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `tarifs`(`statut`, `prix`, `caution`, `idActivite`) VALUES(:statut, :prix, :caution, :idActivite)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':statut', $this->statut, PDO::PARAM_STR);
        $addAssoc->bindValue(':prix', $this->prix, PDO::PARAM_STR);
        $addAssoc->bindValue(':caution', $this->caution, PDO::PARAM_STR);
        $addAssoc->bindValue(':idActivite', $this->idActivite, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function __destruct() {

    }

}

?>
