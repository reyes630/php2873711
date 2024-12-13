<?php
namespace App\Models;

class PacienteModel extends BaseModel
{
    public function __construct(
        private ?int $documento=null,
        private ?string $nombre=null,
        private ?string $direccion=null,
        private ?string $telefono=null,
        private ?string $fecha_nacimiento=null,
        private ?string $estado=null,
        private ?string $genero=null,
        private ?string $eps=null,
        private ?string $email=null,
        private ?string $fkUsuario=null,
    ) {
        // Defino la tabla específica
        $this->table = "paciente";
        //Se llama al constructor del padre para crear la conexión 
        parent::__construct();
    }

    //Resto de métodos propios del modelo
    public function getDocumento():int
    {
        return $this->documento;
    }
    public function setDocumento(int $doc):void
    {
        $this->documento = $doc;
    }
}