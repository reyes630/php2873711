<?php
namespace App\Models;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class RolModel extends BaseModel{
    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
    )
    {
        $this->table = "rol";
        //Se llama a el contructor de el padre
        parent::__construct();
    }

    public function saveRol($nombre){
        try {
            $sql = "INSERT INTO $this->table (nombre) VALUES (:nombre)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $result = $statement->execute();
            print_r($result);
        } catch (PDOException $ex) {
            echo "Error al guardar el rol: ".$ex->getMessage();
        }
    }
}