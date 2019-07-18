<?php

class activites extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

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


    public function __destruct() {

    }

}

?>
