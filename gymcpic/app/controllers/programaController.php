<?php
namespace App\Controllers;

use App\Models\ProgramaModel;
use App\Models\CentroModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/ProgramaModel.php";
require_once MAIN_APP_ROUTE."../models/CentroModel.php";


class ProgramaController extends BaseController{
    public function index(){
        echo "<br>CONTROLLER> RolController";
        echo "<br>ACTION> index";
       
    }     
    
    public function view(){
        $programaObj = new ProgramaModel();
        $programas = $programaObj->getAll();
        $this->render('programa/viewPrograma.php', ["programas"=>$programas]);
    }  
    
    public function newPrograma(){
        $centroObj = new CentroModel();
        $centros = $centroObj->getAll();

        $this->render('programa/newPrograma.php', ["centros"=>$centros]);
    }

    public function createPrograma(){
        if (isset($_POST["txtCodigo"]) || isset($_POST["txtNombre"]) || isset($_POST["FkIdCentroFormacion"])) {
            $codigo = $_POST["txtCodigo"] ?? null;
            $nombre = $_POST["txtNombre"] ?? null;
            $FkIdCentroFormacion = $_POST["FkIdCentroFormacion"] ?? null;
            //Creamos instancia del modelo rol
            $programaObj = new ProgramaModel();
            $programaObj->savePrograma($codigo, $nombre, (int)$FkIdCentroFormacion );
            $this->redirectTo("programa/view");
        }
    }
    
}