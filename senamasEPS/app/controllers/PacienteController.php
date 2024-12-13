<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class PacienteController extends BaseController
{
    public function indexTest(){
        //Nuestro controlador va a llamar al modelo Pacinete
        $pacienteModel = new PacienteModel();
        //Obtener todos los pacientes del modelo
        $pacientes = $pacienteModel->getAll();
        /* echo "<pre>";
        print_r($pacinetes);
        echo "</pre>"; */
        $data = [
            "patients" => $pacientes,
        ];
        //Renderizar la vista directamente desde el controlador
        require_once MAIN_APP_ROUTE. "views/paciente/indexView.php";
    }
}