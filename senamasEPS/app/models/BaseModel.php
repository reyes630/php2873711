<?php

namespace App\Models;

use PDO;
use PDOException;

// Se crea una clase abstracta la cual  no puede ser instanciada
abstract class BaseModel
{
    protected $dbConnection; // Atributo que contine la conexión a la BD con PDO
    protected $table; // Representa la tabla actual

    public function __construct()
    {
        $dbConfig = require_once MAIN_APP_ROUTE . "../config/dataBase.php";
        try{// Establecer la conexxión a la base de datos
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";
            $username = $dbConfig["username"];
            $password = $dbConfig["password"];
            // Se crea un objeto de la clase PDO para la conexión a la BD
            $this->dbConnection = new PDO($dsn, $username, $password);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_STLENT);
        } catch (PDOException $exc){
            die("Error en la conexión".$exc->getMessage());
        }
    }

    public function getAll():array
    {
        try {
            $query = "SELECT * FROM $this->table";
            $statement = $this->dbConnection->query($query);
            // Obtener los resultados como un array asociativo
            $resultSet = $statement->fetchAll(PDO::FETCH_OBJ);
            // Se devuelve el array con los registros de la BD
            return $resultSet;
        } catch (PDOException) {
            die("Error en la consulta> ".$exc->getMessage());
        }
    }
    public function getOne():array
    {
        try {
            $query = "SELECT * FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($query);
            $statement->bindParam(":id", $id);
            // Obtener los resultados como un array asociativo
            $resultSet = $statement->fetch(PDO::FETCH_OBJ);
            // Se devuelve el array con los registros de la BD
            return $resultSet;
        } catch (PDOException) {
            die("Error en la consulta> ".$exc->getMessage());
        }
    }
    // Acá van los demás métodos que sean generales a todos los modelos
}