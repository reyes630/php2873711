<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/check01.css">
</head>
<body>
    <div class="info-container">
        <?php 
        $numero1 = $_POST['txtNumero1'] ?? 0;
        $numero1 = $numero1 == "" ? 0: $numero1;
        $numero2 = isset($_POST['txtNumero2']) ? $_POST['txtNumero2']: 0;
        $numero2 = $numero2 == "" ? 0: $numero2;

        print("<h5>Número: $numero1</h5>");
        print("<h5>Número: $numero2</h5>");
        if(isset($_POST['operacion1']) && $_POST['operacion1']=="Sumar") {
            $suma = $numero1 + $numero2;
            print("<h2> Suma </h2>");
            print("<label> Resusltado de la Suma: $numero1 + $numero2 = $suma");
        }
        if(isset($_POST['operacion2']) && $_POST['operacion2']=="Restar") {
            $resta = $numero1 - $numero2;
            print("<h2> Resta </h2>");
            print("<label> Resusltado de la Resta: $numero1 - $numero2 = $resta");
        }
        if(isset($_POST['operacion3']) && $_POST['operacion3']=="Multiplicar") {
            $multiplicacion = $numero1 * $numero2;
            print("<h2> Multiplicación </h2>");
            print("<label> Resusltado de la Multiplicación: $numero1 * $numero2 = $multiplicacion");
        }
        if(isset($_POST['operacion4']) && $_POST['operacion4']=="Dividir") {
            if($numero2 != 0) {
                $division = $numero1 / $numero2;
            } else {
                $division = "No se puede operar";
            }
            print("<h2> División </h2>");
            print("<label> Resusltado de la División: $numero1 / $numero2 = $division");

        }
        ?>
    </div>
</body>
</html>