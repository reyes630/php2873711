<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Programa</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <h1>CPICGym - software gestion gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
        <form action="/programa/createPrograma" method="post">
            <div class="form-group">
                <label for="txtCodigo">Ficha de programa de formación</label>
                <input type="text" name="txtCodigo" id="txtcodigo" class="form-control">
                <label for="txtNombre">Nombre Programa</label>
                <input type="text" name="txtNombre" id="txtnombre" class="form-control">
                <label for="FkIdCentroFormacion">Centro de formación</label>
                <select name="FkIdCentroFormacion" id="FkIdCentroFormacion">
                    <option value="" selected>Selecciona Centro de Formación</option>
                    <?php 
                        foreach ($centros as $centro) {
                            echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>

        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>