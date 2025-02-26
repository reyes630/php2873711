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
            <?php
            if ($rol && is_object($rol)) {
               
                echo "<div class='record'>
                <span>ID: $rol->id - </span>
                <span>Nombre: $rol->nombre - </span>
                </div>";
               
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>

</html>