<?php
session_start();
if (!isset($_SESSION['numeroCuenta'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>¡Bienvenido, <?php echo $_SESSION['nombreTitular']; ?>!</h2>
        <p><span class="strong-data">Número de Cuenta:</span> <?php echo $_SESSION['numeroCuenta']; ?></p>
        <p><span class="strong-data">Saldo:</span> $<?php echo number_format($_SESSION['saldo'], 2); ?></p>
        <p><span class="strong-data">Tipo de Cuenta:</span> <?php echo $_SESSION['tipoCuenta']; ?></p>

        <?php if (isset($_SESSION['mensaje'])): ?>
            <div class="mensaje">
                <p><?php echo $_SESSION['mensaje']; ?></p>
            </div>
            <?php unset($_SESSION['mensaje']);?>
        <?php endif; ?>

        
        <div class="form-group">
            <h3>Opciones disponibles</h3>
            <a href="ingresarDinero.php"><button class="extra-btn">Ingresar Dinero</button></a>
            <a href="retirar.php"><button class="extra-btn">Retirar</button></a>
            <a href="pagarFactura.php"><button class="extra-btn">Pagar Factura</button></a>
            <a href="transferir.php"><button class="extra-btn">Transferir</button></a>
        </div>
        <div class="form-group">
            <a href="salir.php"><button class="salir-btn">Salir</button></a>
        </div> 
    </div>
</body>
</html>
