<?php
require_once(__DIR__ . '/../Config.php');

class Connection
{
    //Variable
    private $conect;

    //Constructor 
    public function __construct()
    {
        $pdo = "mysql:host=" . DBHOST . ";dbname=" . DBNAME ;
        try {
            $this->conect = new PDO($pdo, DBUSER, DBPASS);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error en la conexion: ' . $e->getMessage();
        }
    }

    //Funcion para conectarse con la base de datos 
    public function conectDb()
    {
        return $this->conect;
    }
}
