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
           <form action="/centro/create" method="post">
                <div class="form-group">
                    <label for="">Nombre del Centro de fomacion</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
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