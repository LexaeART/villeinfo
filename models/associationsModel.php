<?php

class associations extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }

    public function allAssoc() {
        $showConseil = $this->db->query('SELECT `name`,`president`,`description`, `picture` FROM `associations`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
