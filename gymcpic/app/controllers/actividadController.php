<?php
namespace App\Controllers;
use App\Models\ActividadModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/ActividadModel.php";

class ActividadController extends BaseController{
    public function index(){
        echo "<br>CONTROLLER> RolController";
        echo "<br>ACTION> index";
        
    }     
    
    public function view(){
        $actividadObj = new ActividadModel();
        $actividades = $actividadObj->getAll();
        $this->render('actividad/viewActividad.php', ["actividades"=>$actividades]);
    }     

    public function newActividad(){
        $this->render('actividad/newActividad.php');
    }

    public function createActividad(){
        if (isset($_POST["txtNombre"]) || isset($_POST["txtDescripcion"])) {
            $nombre = $_POST["txtNombre"] ?? null;
            $descripcion = $_POST["txtDescripcion"] ?? null;
            //Creamos instancia del modelo rol
            $actividadObj = new ActividadModel();
            $actividadObj->saveActividad("$nombre", "$descripcion");
            $this->redirectTo("actividad/view");
        }
    }
}