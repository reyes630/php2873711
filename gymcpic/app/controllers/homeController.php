<?php
namespace App\Controllers;
use App\Controllers\BaseController;
require_once "baseController.php";

class HomeController extends BaseController
{
    public function index(){
        echo "<br>CONTROLLER> HomeController";
        echo "<br>ACTION> index";
        // $this -> render(); // se llama el metodo del papa
    }
    public function saludar(){
        echo "<br>CONTROLLER> HomeController";
        echo "<br>ACTION> saludos!!";
    }
}
