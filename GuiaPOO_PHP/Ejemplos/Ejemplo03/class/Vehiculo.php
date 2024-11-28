<?php 
class Vehiculo{
    private $motorEncendido = false;
    private $cantidadRuedas;
    private $marca;

    public function __construct($motor=null, $cantR=null, $marca=null)
    {
        $this->motorEncendido = $motor; 
        $this->cantidadRuedas = $cantR;
        $this->marca = $marca;
    }

    public function setMotor($motorEncendido) {
        $this->motorEncendido = $motorEncendido;
    }
    public function getMotor() {
        return $this->motorEncendido;
    }
    public function setRuedad($cantidadRuedas) {
        $this->cantidadRuedas = $cantidadRuedas;
    }
    public function getRuedad() {
        return $this->cantidadRuedas;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getMarca() {
        return $this->marca;
    }


    public function encenderMotor(){
        $this->motorEncendido = true;
    }
    public function apagarMotor(){
        $this->motorEncendido = false;
    }
    public function arrancar(){
        if($this->motorEncendido){
            echo "<br>El auto arranca";
        }else{
            echo "Primero debe encender el vehiculo";
        }
    }
}