<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
    <link rel="stylesheet" href="./css/form02.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar02.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtNobre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtContraseña">Contraseña</label>
                <input type="password" name="txtContraseña" id="txtContraseña">
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
    
</body>
</html>