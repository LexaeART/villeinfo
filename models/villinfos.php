<?php

class infos extends dataBase {

    public $id = 0;
    public $name = '';
    public $corpus = '';
    public $date = '';

    public function __construct() {
        parent::__construct();
    }

    public function showInfo() {
        $showInfo = $this->db->query('SELECT `id`,`name`, `corpus`, `date` FROM `villinfos`');
        $showInfo->execute();
        return $showInfo = $showInfo->fetchAll(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
