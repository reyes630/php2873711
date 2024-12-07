<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Dinero</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Ingresar Dinero</h2>
        <form action="procesarIngreso.php" method="POST">
            <div class="form-group">
                <label for="monto">Monto a ingresar:</label>
                <input type="number" id="monto" name="monto" placeholder="Ingrese el monto" required>
            </div>
            <div class="form-group">
                <button type="submit">Confirmar</button>
            </div>
        </form>
        <div class="form-group">
            <a href="acciones.php"><button class="regresar-btn">Regresar</button></a>
        </div>
    </div>
</body>
</html>
