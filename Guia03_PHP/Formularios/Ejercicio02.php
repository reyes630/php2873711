<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/Ejercicio02.css">
</head>
<body>
<div class="form-container">
        <form action="eje02_pro.php" method="post">
            <h2>Datos de Usuario</h2>
            <div class="form-group">
                <label for="txtNobre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtedad">Telefono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad"> 
                <option value="" disabled selected>Elige una opción</option>
                <option value="Manizales">Manizales</option>
                <option value="Bogota">Bogota</option>
                <option value="Medellin">Medellin</option>
                <option value="Pereira">Pereira</option>
                <option value="Chinchina">Chicnhina</option>
                <option value="VillaMaria">VillaMaria</option>
                <option value="Calarcasa">Calarcasa</option>
                <option value="Arauca">Arauca</option>
                <option value="Choco">Choco</option>
                <option value="Cartagena">Cartagena</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtedad">Fecha Nacimiento</label>
                <input type="date" name="txtedad" id="txtedad">
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
    
</body>
</html>