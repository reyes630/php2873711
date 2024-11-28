<?php 
session_start();
//Capturamos los datos del formulario q llegan por POST
$tipoUsuario = $_POST['txtTipoUsuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;

//Creamos nuestras variables de sesion 
$_SESSION['tipoUsuario'] = $tipoUsuario;
$_SESSION['usuario'] = $usuario;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Variables de Sesion Guardada</h2>
        <a href="visualizarSesion.php">Visualizar Sesion</a>
    </div>
</body>
</html>