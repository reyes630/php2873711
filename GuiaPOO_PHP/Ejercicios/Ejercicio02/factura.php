<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar Factura</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Pagar Factura</h2>
        <form action="procesarPago.php" method="POST">
            <div class="form-group">
                <label for="numeroFactura">Número de factura:</label>
                <input type="text" id="numeroFactura" name="numeroFactura" placeholder="Ingrese el número de factura" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto a pagar:</label>
                <input type="number" id="monto" name="monto" placeholder="Ingrese el monto" required>
            </div>
            <div class="form-group">
            <a href="procesarAcciones.ph">

                <button type="submit">Confirmar</button>
            </a>
            </div>
        </form>
        <div class="form-group">
            <a href="acciones.php"><button class="regresar-btn">Regresar</button></a>
        </div>
    </div>
</body>
</html>
