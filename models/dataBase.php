<?php
include_once 'config.php';
class dataBase extends config {
    //L'attribut $db sera disponible dans ses enfants
    protected $db;
    /*
     * Méthode magique qui permet e ce connecter à la base de données
     * @return type
     */
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host='.self::HOSTNAME.';dbname='.self::DBNAME.';charset=utf8', ''.self::USERDB.'', ''.self::PSWDB.'');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function __destruct() {
    }
}
?>
