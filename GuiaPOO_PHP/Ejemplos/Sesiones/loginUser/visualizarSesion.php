<?php
session_start();
$tipoUsuario = $_SESSION['tipoUsuario'];
$usuario = $_SESSION['usuario'];
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
        if ($tipoUsuario != null && $usuario !==null) { ?>
            <h2>Bienvenido <?php echo $usuario;?></h2>
            <p> Usted es un <?php echo $tipoUsuario ;?></p>
            <?php echo '<br>' ?>
            <h2>Datos de usuario Registardos:</h2>
                                                            
        <?php
        if(isset($_SESSION['usuarios']) && count($_SESSION['usuarios'])>0){
            foreach ($_SESSION['usuarios'] as $clave => $valor) {?>
            <div class="form-item">
                <p>Tipo Usuario: <?php echo$valor['tipoUsuario'];?></p>
                <p>usuario: <?php echo$valor['usuario'];?></p>
                <p>Contraseña: <?php echo$valor['password'];?></p>
                <p>Direccion:  <?php echo$valor['direccion'];?></p>
                <p>Telefono: <?php echo$valor['telefono'];?></p>
            </div>
            <?php
                
            }
        }
        ?>
        <a href="index.php">Regresar</a>
        <a href="seetAndDestroy.php">Destruir Sesion</a>
        
    <?php
    }else{
    ?>
    <h2>Usted no tiene acceso a esta pagina</h2>
    <?php } ?>
        
    </div>
</body>
</html>