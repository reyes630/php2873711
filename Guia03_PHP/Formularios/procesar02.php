<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form02.css">
</head>
<body>
    <div class="info-container">
        <?php  
        //Validacion con operador Ternario
        $nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"]:null;
        $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"]:null;
        //Validacion null seguro 
        $telefono = $_POST["txtTelefono"] ?? null;
        $contraseña = $_POST["txtContraseña"] ?? null;
        echo "<span> Nombre: $nombre </span>";
        echo "<span> Email: $email </span>";
        echo "<span> Telefono: $telefono </span>";
        echo "<span> Contraseña: $contraseña </span>";
        ?>
    </div>
</body>
</html>