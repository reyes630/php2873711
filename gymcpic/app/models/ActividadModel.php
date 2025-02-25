<?php
namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class ActividadModel extends BaseModel{
    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $descripcion = null
    )
    {
        $this->table = "actividad";
        //Se llama a el contructor de el padre
        parent::__construct();
    }

    public function saveActividad($nombre, $descripcion){
        try {
            $sql = "INSERT INTO $this->table (nombre, descripcion) VALUES (:nombre, :descripcion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $result = $statement->execute();
            print_r($result);
        } catch (PDOException $ex) {
            echo "Error al guardar el rol: ".$ex->getMessage();
        }
    }
}