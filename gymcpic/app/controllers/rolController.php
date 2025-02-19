<?php 
namespace App\Controllers;

require_once 'BaseController.php';

class RolControllers extends BaseController{
    public function index(){
        echo "<br>CONTROLLER > RolController";
        echo "<br>ACTION > index";
        $this -> redirectTo();
        $this -> render();
        
    }
    public function view(){
        echo "<br>CONTROLLER > RolController";
        echo "<br>ACTION > view";
    }
}