<?php
require_once '../app/config/global.php';
require_once '../app/controllers/homeController.php';
require_once '../app/controllers/rolController.php';
require_once '../app/controllers/actividadController.php'; 
require_once '../app/controllers/centroFormacionController.php';
require_once '../app/controllers/programaFormacionController.php';

$url = $_SERVER['REQUEST_URI']; //Lo que se ingresa en la URL
$routes = include_once '../app/config/routes.php';

$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if(preg_match("#^$route$#", $url, $matches)) {
        $matchedRoute = $routeConfig;
        break;
    }
    // Las expresiones regulares encuentra un patrón en un String
}
if($matchedRoute){
    $controllerName = $matchedRoute['controller'];
    $actionName = $matchedRoute['action'];
    if(class_exists($controllerName) && method_exists($controllerName, $actionName)){
        $parameters = array_slice($matches, 1);
        $controller = new $controllerName();
        $controller->$actionName(...$parameters);
        exit;
    }
}


// if (array_key_exists($url, $routes)) {
//     // $controller = new HomeController();
//     // $controller -> saludar();
//     $controllerName = $routes[$url]['controller'];
//     $actionName = $routes[$url]['action'];
//     $controller = new $controllerName(); //App\Controllers\HomeController
//     $controller->$actionName(); //index
// } else {
//     http_response_code(404);
//     echo "<br> Página no encontrada";
//     exit;
// }
