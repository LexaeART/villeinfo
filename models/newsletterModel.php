<?php

class newsletter extends dataBase {

    public $id = 0;
    public $prenom = '';
    public $nom = '';
    public $mail = '';

    public function __construct() {
        parent::__construct();
    }

    public function allNews() {
        $showConseil = $this->db->query('SELECT `id`,`nom`, `prenom`, `mail` FROM `newsletter`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }
    public function addNews() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `newsletter`(`prenom`, `nom`, `mail`) VALUES(:prenom, :nom, :mail)';
        $addAssoc = $this->db->prepare($query);
        $addAssoc->bindValue(':prenom', $this->prenom, PDO::PARAM_STR);
        $addAssoc->bindValue(':nom', $this->nom, PDO::PARAM_STR);
        $addAssoc->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addAssoc->execute();
    }

    public function __destruct() {

    }

}

?>
