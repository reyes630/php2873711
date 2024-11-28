<?php 
session_start();

//Captura los datos del formulario q lllegan por POST 
$tipoUsuario = $_POST['txtTipoUsuario'] ?? null;
$usuario = $_POST['txtUsuario'] ?? null;
$password = $_POST['txtPassword'] ?? null;

$listaUsuarios = $_SESSION['usuarios'] ?? null;

$encontrado = false;
if($listaUsuarios != null) {
    for ($i=0; $i < count($listaUsuarios); $i++) { 
        if ($listaUsuarios[$i]["tipoUsuario"] == $tipoUsuario && $listaUsuarios[$i]["usuario"] == $usuario && $listaUsuarios[$i]["password"] == $password) { 
        $encontrado = true;
        $_SESSION['tipoUsuario'] = $tipoUsuario;
        $_SESSION['usuario'] = $usuario;
        }
    } 

}
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
        <?php 
        if ($encontrado) {
            echo"<h2>Bienvenido $usuario</h2>";
            echo "<p> Usted es un $tipoUsuario</p>";
            if ($tipoUsuario == "administrativo") {
                echo '<a href="visualizarSesion.php">Visualizar Usuarios</a>';
                
            }
        }else{
            echo"<p>Usted no se encuentra registrado</p>";
            echo '<a href="registro.php">Registrarme</a>';
        }
        ?>
    </div>
</body>
</html>