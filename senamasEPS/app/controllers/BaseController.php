<?php

namespace App\Controllers

class BaseController {
    protected function render($view, $data= []) {
        //Logica poara mostrar o renderizar en la vista
        foreach ($data as $key => $value) {
            #Extraigo los datos en data y se crean las variables 
            $$key = $value; 
        }
        include_once MAIN_APP_ROUTE. "views/".$view."View.php";

    }
    protected function redirectTo(string $url){
        header ("Location: $url");
        exit();
    }

    protected formCurrency($amount) {
        return '$'.number_format($amount, 2);
    }

}