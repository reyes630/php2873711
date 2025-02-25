<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <h1>CPICGym - software gestion gimnasio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
           <form action="/actividad/create" method="post">
                <div class="form-group">
                    <label for="">Ficha de programa de formación</label>
                    <input type="text" name="txtcodigo" id="txtcodigo" class="form-control">
                    <label for="">Nombre Programa</label>
                    <input type="text" name="txtnombre" id="txtnombre" class="form-control">
                    <label for="">Centro de formación</label>
                    <select name="FKcentroFormacion" id="FKcentroFormacion">
                        <option value="" selected>Selecciones Centro de Formación</option>
                        <?php 
                            foreach ($centros as $centro) {
                                echo "<option value='".$centro->id."'>".$centro->$nombre."</option>";
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