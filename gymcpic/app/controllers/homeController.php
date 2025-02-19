<?php 
namespace App\Controllers;

require_once 'BaseController.php';

class HomeController extends BaseController {
    public function index() {
        echo "<br CONTROLLER > HomeController";
        echo "<br>ACTION > index";
        $this->render(); //Se llama el método del papá
        $this->formatNumber(); 
    }
    public function saludar(){
        echo "<br>CONTROLLER > HomeController";
        echo "<br>ACTION > index";
    }
}