<?php

class patrimoine extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }

    public function allPatrimoine() {
        $showConseil = $this->db->query('SELECT `id`,`name`,`description`, `picture` FROM `patrimoine`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }

    public function addPatrimoine() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `patrimoine`(`name`, `description`, `picture`) VALUES(:name, :description, :picture)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':description', $this->description, PDO::PARAM_STR);
        $addAssoc->bindValue(':picture', $this->picture, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }

    public function __destruct() {

    }

}

?>
