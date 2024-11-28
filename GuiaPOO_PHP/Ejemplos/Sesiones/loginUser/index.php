<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="procesarLogin.php" method="post">
            <h2>Inicio Sesión</h2>
            <div class="form-group">
            <label for="txtTipoUsuario">Tipo Usuario</label>
            <select name="txtTipoUsuario" id="txtTipoUsuario">
                <option value="estudiante">estudiante</option>
                <option value="profesor">profesor</option>
                <option value="administrativo">administrativo</option>
            </select>
            </div>
            <div class="form-group">
                <label for="txtUsuario">Usuario</label>
                <input type="text" name="txtUsuario" id="txtUsuario">
            </div>
            <div class="form-group">
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" id="txtPassword">
            </div>
            
            <div class="form-group">
                <button type="submit">Iniciar Sesion</button>
            </div>
            <div class="form-group">
            <a href="Registro.php">Registrar</a>
            </div>
        </form>
        
    </div>
</body>
</html>