<?php

class commission extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }

    public function showCommission() {
        $showCommission = $this->db->query('SELECT `id`,`commission`, `objet`, `titulaire`, `suppleant` FROM `commissions`');
        $showCommission->execute();
        return $showCommission = $showCommission->fetchAll(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
