<?php

class associations extends dataBase {

    public $id = 0;
    public $name = '';
    public $president = '';
    public $description = '';
    public $picture = '';

    public function __construct() {
        parent::__construct();
    }

    public function allAssoc() {
        $showConseil = $this->db->query('SELECT `id`,`name`,`president`,`description`, `picture` FROM `associations`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }
    public function addAssoc() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `associations`(`name`, `president`, `description`, `picture`) VALUES(:name, :president, :description, :picture)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':president', $this->president, PDO::PARAM_STR);
        $addAssoc->bindValue(':description', $this->description, PDO::PARAM_STR);
        $addAssoc->bindValue(':picture', $this->picture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }

    public function deleteAssoc() {
        $query = 'DELETE FROM `associations` WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }


    public function __destruct() {

    }

}

?>
