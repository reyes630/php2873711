<?php
namespace App\Controllers;
use App\Models\RolModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/RolModel.php";

class RolController extends BaseController{
    public function index(){
        echo "<br>CONTROLLER> RolController";
        echo "<br>ACTION> index";
        
        // $this->render();
    }     
    
    public function view(){
        // echo "<br>CONTROLLER> RolController";
        // echo "<br>ACTION> view";
        //LLamamos al modelo de Rol
        $rolObj = new RolModel();
        $roles = $rolObj->getAll();
        //LLamamos a la vista
        $data = ["roles"=>$roles];
        $this->render('rol/viewRol.php', $data);
    }

    public function newRol(){
        $this->render('rol/newRol.php');
    }

    public function createRol(){
        if (isset($_POST["txtNombre"])) {
            $nombre = $_POST["txtNombre"] ?? null;
            //Creamos instancia del modelo rol
            $rolObj = new RolModel();
            $rolObj->saveRol("$nombre");
            $this->redirectTo("rol/view");
        }
    }
}
