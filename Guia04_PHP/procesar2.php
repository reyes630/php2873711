<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/check02.css">
</head>
<body>
    <div class="info-container">
        <?php
        $nombre = $_POST["txtNombre"] ?? "";
        $deportes = $_POST["deportes"] ?? null;
        $cantidadDeportes = count($deportes);

        $htmlDeportes = "";
        foreach ($deportes as $item) {
            $htmlDeportes .= "<label> $item</label>";
        }

       /*  $output =<<<OUT 
            <label> Nombre: $nombre </label>
            <label> Cantidad Deportes: $cantidadDeportes </label>
            <label> Deportes Seleccionados:  </label> 
            $htmlDeportes  

        OUT;
        echo $output; */
        echo "<h3>Resultados</h3>";
        echo " <label> <h4>Nombre:</h4> $nombre </label>";
        echo "<label> <h4>Cantidad Deportes:</h4> $cantidadDeportes </label>";
        echo "<label> <h4>Deportes Seleccionados:</h4>  </label>";
        echo $htmlDeportes;


        /* echo "<pre>";
        print_r($deportes);
        echo "</pre>"; */
        ?>
    </div>
</body>
</html>