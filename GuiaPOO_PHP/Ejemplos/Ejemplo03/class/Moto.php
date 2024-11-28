<?php 
require_once 'Vehiculo.php';
class Moto extends Vehiculo {
    
    public function __construct($motor = null, $cantR = null, $marca = null)
    {
        parent::__construct($motor=null, $cantR=null, $marca=null);
    } 
}