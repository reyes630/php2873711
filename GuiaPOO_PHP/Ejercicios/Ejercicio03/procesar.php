<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../poo_php/ejemplos/eje03/css/style.css">

    <title>procesar</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <div class="info-container">
    <?php
        include 'cuentaClass.php';
        session_start();

        if (!isset($_SESSION['cuentas'])) {
            $_SESSION['cuentas'] = [];
        }



        $accion = $_POST['accion'] ?? null;

        if ($accion === 'crear') {
            // Crear una nueva cuenta
            $cuenta = new Cuenta($_POST['numeroCuenta'], $_POST['nombreTitular'], $_POST['saldo'], $_POST['tipoCuenta']);
            $_SESSION['cuentas'][$_POST['numeroCuenta']] = $cuenta;
            echo "Cuenta creada con éxito.<br>";
        } elseif ($accion === 'operar') {
            $numeroCuenta = $_POST['cuenta'];
            if (isset($_SESSION['cuentas'][$numeroCuenta])) {
                $cuenta = $_SESSION['cuentas'][$numeroCuenta];
                $operacion = $_POST['operacion'];
                $monto = $_POST['monto'] ?? 0;
                $destino = $_POST['destino'] ?? null;

        switch ($operacion) {
            case 'ingresar':
                echo $cuenta->ingresarDinero($monto);
                break;
            case 'retirar':
                echo $cuenta->retirarDinero($monto);
                break;
            case 'pagar':
                echo $cuenta->pagarFactura($monto);
                break;
            case 'transferir':
                if (isset($_SESSION['cuentas'][$destino])) {
                    $cuentaDestino = $_SESSION['cuentas'][$destino];
                    echo $cuenta->transferirSaldo($monto, $cuentaDestino);
                } else {
                    echo "La cuenta destino no existe.<br>";
                }
                break;
            case 'consultar': 
                echo $cuenta->obtenerSaldo();
                break;
            default:
                echo "Operación inválida.<br>";
                break;
        }
        $_SESSION['cuentas'][$numeroCuenta] = $cuenta; 
    } else {
        echo "La cuenta no existe.<br>";
    }
} else {
    echo "Acción no válida o no especificada.";
}

echo "<br><a href='index.php'>Volver</a>";
?>

    </div>
    
</body>
</html>