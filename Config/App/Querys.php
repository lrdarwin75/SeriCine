<?php
require_once(__DIR__ . '/Connection.php');

class Query extends Connection
{

    //Variable
    private $pdo, $con;

    //Constructor 
    public function __construct()
    {
        $this->pdo = new Connection();
        $this->con = $this->pdo->conectDb();
    }

    //funcion para obtener un registro
    public function selectRecord($sql, $array)
    {
        $result = $this->con->prepare($sql);
        $result->execute($array);
        $data =  $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    //funcion para obtener todos los registro
    public function selectRecords($sql)
    {
        $result = $this->con->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    //funcion para insertar un registro
    public function insertRecord($sql, $array)
    {
        $result = $this->con->prepare($sql);
        $data = $result->execute($array);
        if ($data) {
            $answer = $this->con->lastInsertId();
        } else {
            $answer = 0;
        }
        return $answer;
    }

    //funcion para salvar un registro
    public function saveRecord($sql, $array)
    {
        $result = $this->con->prepare($sql);
        $data = $result->execute($array);
        if ($data) {
            $answer = 1;
        } else {
            $answer = 0;
        }
        return $answer;
    }
}
