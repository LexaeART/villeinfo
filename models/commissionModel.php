<?php

class commission extends dataBase {

    public $id = 0;
    public $name = '';
    public $objet = '';
    public $titulaire = '';
    public $suppleant = '';

    public function __construct() {
        parent::__construct();
    }

    public function showCommission() {
        $showCommission = $this->db->query('SELECT `id`,`commission`, `objet`, `titulaire`, `suppleant` FROM `commissions`');
        $showCommission->execute();
        return $showCommission = $showCommission->fetchAll(PDO::FETCH_OBJ);
    }
    public function addCommission() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `commissions`(`commission`, `objet`, `titulaire`, `suppleant`) VALUES(:name, :objet, :titulaire, :suppleant)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addAssoc->bindValue(':objet', $this->objet, PDO::PARAM_STR);
        $addAssoc->bindValue(':titulaire', $this->titulaire, PDO::PARAM_STR);
        $addAssoc->bindValue(':suppleant', $this->suppleant, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }
    public function deleteCom() {
        $query = 'DELETE FROM `commissions` WHERE `id` = :id';
        $savedHuntCount = $this->db->prepare($query);
        $savedHuntCount->bindValue(':id', $this->id, PDO::PARAM_INT);
        $savedHuntCount->execute();
        return $savedHuntCount;
    }
    public function __destruct() {

    }

}

?>
