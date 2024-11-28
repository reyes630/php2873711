<?php 
session_start();
//Capturamos los datos del formulario q llegan por POST
$tipoUsuario = $_POST['txtTipoUsuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;
$direccion = $_POST['txtDireccion'] ?? null;
$telefono = $_POST['txtTelefono'] ?? null;



if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = []; //Se crea un array vacio
   
}
$arrayUsuarios = $_SESSION['usuarios'];
$arrayElemento = array(
    "tipoUsuario"=>$tipoUsuario, 
    "usuario"=>$usuario, 
    "password"=>$password,
    "direccion" => $direccion,
    "telefono" => $telefono

);
$arrayUsuarios[] = $arrayElemento; //Se agrega un usuario a la array de usuarios 
$_SESSION['usuarios'] = $arrayUsuarios;

header("Location: index.php");