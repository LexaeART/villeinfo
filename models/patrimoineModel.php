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


    public function __destruct() {

    }

}

?>
