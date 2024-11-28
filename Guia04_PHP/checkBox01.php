<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
    <link rel="stylesheet" href="./css/check01.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar1.php" method="post">
            <h2>Control CheckBox - Operaciones</h2>
            <div class="form-group">
                <label for="txtNumero1">Número 1</label>
                <input type="number" name="txtNumero1" id="txtNumero1">
            </div>
            <div class="form-group">
                <label for="txtNumero2">Número 2</label>
                <input type="number" name="txtNumero2" id="txtNumero2">
            </div>
            <div class="form-group">
                <fieldset>
                    <legend>Operaciones</legend>
                    <label><input type="checkbox" name="operacion1" value="Sumar"> Sumar </label>
                    <label><input type="checkbox" name="operacion2" value="Restar"> Restar </label>
                    <label><input type="checkbox" name="operacion3" value="Multiplicar"> Multiplicar </label>
                    <label><input type="checkbox" name="operacion4" value="Dividir"> Dividir </label>
    
                </fieldset>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>