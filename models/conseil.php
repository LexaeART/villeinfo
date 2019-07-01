<?php

class conseil extends dataBase {

    public $id = 0;
    public $name = '';
    public $fonction = '';
    public $img = '';

    public function __construct() {
        parent::__construct();
    }

    public function showConseiller() {
        $showConseil = $this->db->query('SELECT `id`,`name`, `fonction`, `img` FROM `conseil`');
        $showConseil->execute();
        return $showConseil = $showConseil->fetchAll(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
