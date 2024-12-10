<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulario usuario</title>
    <link rel="stylesheet" href="./css/style.css">
   
</head>
<body>
    
    <div class="form-container">
        <h1>Gestión de Cuentas</h1>
        <h2>Crear Cuenta</h2>
        <form action="procesar.php" method="POST">
            <input type="hidden" name="accion" value="crear">
            <label for="numeroCuenta">Número de Cuenta:</label>
            <input type="text" id="numeroCuenta" name="numeroCuenta" required><br>

            <label for="nombreTitular">Nombre Titular:</label>
            <input type="text" id="nombreTitular" name="nombreTitular" required><br>

            <label for="saldo">Saldo Inicial:</label>
            <input type="number" id="saldo" name="saldo" required><br>

            <label for="tipoCuenta">Tipo de Cuenta:</label>
            <select id="tipoCuenta" name="tipoCuenta" required>
                <option value="Ahorros">Ahorros</option>
                <option value="Corriente">Corriente</option>
            </select><br>

            <button type="submit">Crear Cuenta</button>
        </form>
        <div class="line"></div>
        <h2>Operaciones</h2>
        <form action="procesar.php" method="POST">
            <input type="hidden" name="accion" value="operar">
            <label for="cuenta">Número de Cuenta:</label>
            <input type="text" id="cuenta" name="cuenta" required><br>

            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion" required>
                <option value="ingresar">Ingresar Dinero</option>
                <option value="retirar">Retirar Dinero</option>
                <option value="pagar">Pagar Factura</option>
                <option value="transferir">Transferir Saldo</option>
                <option value="consultar">Consultar Saldo</option> 
            </select>

            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto"><br>

            <label for="destino">Cuenta Destino (si aplica):</label>
            <input type="text" id="destino" name="destino"><br>

            <button type="submit">Realizar Operación</button>
        </form>
    </div>
</body>
</html>