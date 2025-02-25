<?php
namespace App\Controllers;
use App\Models\CentroModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/CentroModel.php";

class CentroController extends BaseController{
    public function index(){
        echo "<br>CONTROLLER> RolController";
        echo "<br>ACTION> index";
        
    }     
    
    public function view(){
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();
        $this->render('centro/viewCentro.php', ["centros"=>$centros]);
    }     

    

    public function newCentro(){
        $this->render('Centro/newCentro.php');
    }

    public function createCentro(){
        if (isset($_POST["txtNombre"])) {
            $nombre = $_POST["txtNombre"] ?? null;
            //Creamos instancia del modelo rol
            $centroObj = new CentroModel();
            $centroObj->saveCentro("$nombre");
            $this->redirectTo("centro/view");
        }
    }
}