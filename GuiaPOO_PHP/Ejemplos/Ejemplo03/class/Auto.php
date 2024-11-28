<?php 
require_once 'vehiculo.php';
class Auto extends Vehiculo {
    private $cantidadPuertas;

    public function __construct($cantidadPuertas = null,$motor = null, $cantR = null, $marca = null)
    {
        $this->cantidadPuertas = $cantidadPuertas;
        //Se llama al constructor del padre 
        parent::__construct($motor=null, $cantR=null, $marca=null);
    }
    public function setPuertas($cantidadPuertas) {
        $this->cantidadPuertas = $cantidadPuertas;
    }
    public function getPuertas() {
        return $this->cantidadPuertas;
    }
}