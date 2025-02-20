<?php 
namespace App\Controllers;

class BaseController {
    public function render(string $view, array $arrayData=null) {
        foreach ($arrayData as $key => $value) {
            //Se crean variables de acuerdo a las keys 
            //Se extraen todos los datos que llegan en arrayData
            
            $$key = $value;

            
        }
        include_once MAIN_APP_ROUTE.'../views/'.$view;
    }
    public function formatNumber() {
        echo "<br>Formatea un numero";
    }
    public function redirectTo() {
        echo "<br>Reenvía la página";
    }
}