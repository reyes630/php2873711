<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $dbConnection;
    protected $table;

    public function __construct() {
        try {
            $dbConfig = require_once MAIN_APP_ROUTE."../config/database.php";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
    
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";
            $this->dbConnection = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $options);
        } catch (PDOException $ex) {
            echo "Error > " .$ex -> getMessage();
        
            
        };
    } //Cierra el contructor

    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $statement = $this->dbConnection->query($sql);
        //Obtenemos resultados de la BD en un array aosciativo
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        //Devolvemos el array con los datos 
        return $result;

    }
}