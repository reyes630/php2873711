<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/Ejercicio02.css">
</head>
<body>
    <div class="info-container">
        <?php 
        //Validacion con operador Ternario
        $nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"]:null;
        $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"]:null;
        //Validacion null seguro 
        $telefono = $_POST["txtTelefono"] ?? null;
        $ciudad = $_POST ["txtCiudad"] ?? null;
        $FechaNacimiento = $_POST["txtedad"] ?? null;

        if ($FechaNacimiento) {
            // Convierte las fechas a objetos DateTime
            $fechaNacimiento = new DateTime($FechaNacimiento);
            $fechaActual = new DateTime(date('Y-m-d'));

            // Calcula la diferencia de años
            $edad = $fechaActual->diff($fechaNacimiento)->y;

        } else {
            $FechaNacimiento= "";
            $edad = "";
        }

        
        echo "<h2> Resultados </h2>";
        echo "<span> Nombre: $nombre </span>";
        echo "<span> Email: $email </span>";
        echo "<span> Telefono: $telefono </span>";
        echo "<span> Ciudad: $ciudad </span>";
        echo "<span> Fecha Nacimiento:  $FechaNacimiento </span>";
        echo "<span> Edad: $edad </span>";
        if($edad >= 18) {
            echo "<span> Usted es mayor de edad </span>";
        } elseif($edad < 18 && $edad != null) {
            echo "<span> Usted es menor de edad </span>";
        }
        
        
        ?>
    </div>
</body>
</html>