<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/check02.css">
</head>
<body>
<div class="form-container">
        <form action="procesar2.php" method="post">
            <h2>Deportes que practica</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <fieldset>
                    <legend>Seleccione los Deportes</legend>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Futbol">Futbol</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Natacion">Natación</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Ajedrez">Ajedrez</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Tenis de Meza">Tenis de Meza</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Baseball">Baseball</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Volleybal">Volleybal</input>
                    </label>
                    <label>
                    <input type="checkbox" name="deportes[]" value="Baloncesto">Baloncesto</input>
                    </label>
                    <label>
                        <input type="checkbox" name="deportes[]" value="Tenis">Tenis</input>
                    </label>
                </fieldset>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
            
        </form>
    </div>
</body>
</html>