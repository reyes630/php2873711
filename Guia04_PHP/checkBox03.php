<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/check3.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar3.php" method="post" enctype="multipart/form-data">
            <h2>Hoja de vida</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtPerfil">Perfil</label>
                <textarea name="txtPerfil" id="txtPerfil"></textarea> 
            </div>
            <div class="form-group">
                <label for="txtExperiencia">Experiencia</label>
                <textarea name="txtExperiencia" id="txtExperiencia"></textarea> 
            </div>
            <div class="form-group">
                <label for="txtCedula">Cedula</label>
                <input type="file" name="txtCedula" id="txtCedula">
            </div>

            
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
            
        </form>
    </div>
</body>
</html>