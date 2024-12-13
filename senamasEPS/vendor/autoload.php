<?php 
spl_autoload_register(function($className)) {
    $prefix = 'App\\';
    //Remover el prefijo al namespace
    $className = str_replace($prefix, '/', $className);
    //Remplazar las barras invertidas por barras diagonales 
    $className = str_replace('\\', '/', $className);
    //Obtener la ruta completa del archivo d ela clase 
    $file = MAIN_APP_ROUTE . $className. '.php';
    //Siel archivo existe, se incluye 

    if (file_exists($file)) {
        require_once $file;
    }
}