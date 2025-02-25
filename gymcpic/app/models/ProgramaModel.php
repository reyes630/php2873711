<?php
namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE."../models/BaseModel.php";

class ProgramaModel extends BaseModel{
    public function __construct(
        ?int $id = null,
        ?string $codigo = null,
        ?string $nombre = null,
        ?string $FkIdCentroFormacion = null
    )
    {
        $this->table = "programaformacion";
        //Se llama a el contructor de el padre
        parent::__construct();
    }

    public function savePrograma($codigo, $nombre, $FKcentroFormacion){
        try {
            $sql = "INSERT INTO $this->table (codigo, nombre, fkCentroFormacion) VALUES (:codigo, :nombre, :fkCentroFormacion)";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":codigo", $codigo, PDO::PARAM_STR);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":fkCentroFormacion", $FKcentroFormacion, PDO::PARAM_STR);
            
            $result = $statement->execute();
            print_r($result);
        } catch (PDOException $ex) {
            echo "Error al guardar el Programa de formación: ".$ex->getMessage();
        }
    }
}