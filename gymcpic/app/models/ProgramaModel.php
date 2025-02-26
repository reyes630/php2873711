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

    public function savePrograma($codigo, $nombre, $FkIdCentroFormacion){
        try {
            // Preparar la sentencia SQL para insertar un nuevo programa
            $sql = "INSERT INTO $this->table (codigo, nombre, FkIdCentroFormacion) VALUES (:codigo, :nombre, :FkIdCentroFormacion)";
            
            // Preparar la declaración SQL
            $statement = $this->dbConnection->prepare($sql);
            
            // Vincular los parámetros con sus valores
            $statement->bindParam(":codigo", $codigo, PDO::PARAM_STR);
            $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $statement->bindParam(":FkIdCentroFormacion", $FkIdCentroFormacion, PDO::PARAM_INT);
            
            // Ejecutar la sentencia SQL
            $result = $statement->execute();
            print_r($result);
            
            return $result;
        } catch (PDOException $ex) {
           
            echo "Error al guardar el programa de formación: ".$ex->getMessage();
        }
    }
    
}