<?php 
namespace App\Controllers;
use App\Models\RolModel;

require_once 'BaseController.php';
require_once MAIN_APP_ROUTE."../models/RolModel.php";

class RolController extends BaseController{
    public function index(){
        // echo "<br>CONTROLLER > RolController";
        // echo "<br>ACTION > index";
        $this -> redirectTo();
        
    }
    public function view(){
        // echo "<br>CONTROLLER > RolController";
        // echo "<br>ACTION > view";
        //Llamamos al modelo de Rol 
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();
       //Llamamos a la vista 
       $this->render("rol/viewrol.php", ["roles"=>$roles]);
       
        
       

    }
}