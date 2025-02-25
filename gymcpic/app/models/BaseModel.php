<?php
namespace App\Models;

use PDO;
use PDOException;

abstract class BaseModel{
    protected $dbConnection;
    protected $table;
    
    public function __construct()
    {
        try {
            $dbConfig = require_once MAIN_APP_ROUTE . "../config/database.php";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $dns = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";
            $this->dbConnection = new PDO($dns, $dbConfig["username"], $dbConfig["password"], $options);
        } catch (PDOException $ex) {
            echo "Error: ".$ex->getMessage();
        }
    }//Cierra constructor

    public function getAll():array
    {
        try {
            $sql = "SELECT * FROM $this->table";
            $statement = $this->dbConnection->query($sql);
            //Obtenemos resultado de la BD en un array asociativo
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            //Devolvemos el array con los datos
            return $result;
        } catch (PDOException $ex) {
            // echo "Error en consulta> {$ex->getMessage()}";
            echo "Error en consulta> ".$ex->getMessage();
            return [];
        }
    }
}