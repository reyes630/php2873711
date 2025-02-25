<?php
namespace App\Controllers;
use App\Models\ProgramaModel;

require_once "baseController.php";
require_once MAIN_APP_ROUTE."../models/ProgramaModel.php";

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
        $this->render('programa/newPrograma.php');
    }

    public function createPrograma(){
        if (isset($_POST["txtCodigo"]) || isset($_POST["txtNombre"]) || isset($_POST["FKcentroFormacion"])) {
            $codigo = $_POST["txtCodigo"] ?? null;
            $nombre = $_POST["txtNombre"] ?? null;
            $FKcentroFormación = $_POST["FKcentroFormacion"] ?? null;
            //Creamos instancia del modelo rol
            $programaObj = new ProgramaModel();
            $programaObj->savePrograma("$codigo", "$nombre", "$FKcentroFormación" );
            $this->redirectTo("programa/view");
        }
    }
}