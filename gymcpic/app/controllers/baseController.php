<?php 
namespace App\Controllers;

class BaseController {
    public function render() {
        echo "<br>Renderiza la pagina con datos";
    }
    public function formatNumber() {
        echo "<br>Formatea un numero";
    }
    public function redirectTo() {
        echo "<br>Reenvía la página";
    }
}