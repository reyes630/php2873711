<?php


require_once '../app/config/global.php';
require_once "../app/controllers/homeController.php";
require_once "../app/controllers/rolController.php";


$url = $_SERVER['REQUEST_URI']; // Lo que se ingresa en la URL

$routes = [
    '/' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/home' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/hello' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'saludar'
    ],
    '/rol/index' => [
        'controller' => 'App\Controllers\RolcOntroller',
        'action' => 'index'
    ],
    '/rol/view' => [
        'controller' => 'App\Controllers\RolcOntroller',
        'action' => 'view'
    ],
];


if (array_key_exists($url, $routes)) {
    // $controller = new HomeController();
    // $controller -> saludar();
    $controllerName = $routes[$url]['controller'];
    $actionName = $routes[$url]['action'];
    $controller = new $controllerName(); //app/controllers/homeController.php
    $controller->$actionName();
}else {
    http_response_code(404);
    echo "Pagina no encontrada";
}
