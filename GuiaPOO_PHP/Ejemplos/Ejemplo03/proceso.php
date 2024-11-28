<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="GuiaPOO_PHP/Ejemplos/Ejemplo03/css/index.css">
</head>
<body>
    <div class="procesar-container">
        <?php 
            $tipoVehiculo = $_POST["tipoVehiculo"] ?? null;
            $marca = $_POST["marca"] ?? null;
            $cantRuedas = $_POST["cantRuedas"] ?? null;
            $cantPuertas = $_POST["cantPuertas"] ?? null;
            $encendido = $_POST["encendido"] ?? null;


            $output = <<<OUT

                <label>Tipo Vehiculo: $tipoVehiculo</label>
                <label>Marca: </label>
                <label>Cantidad de Ruedas: $cantRuedas</label>
                <label>Cantidad de Puertas: $cantPuertas</label>
                <label>¿Esta encendido?: $encendido</label>
                
            OUT;
            echo $output;

        ?>
    </div>
</body>
</html>