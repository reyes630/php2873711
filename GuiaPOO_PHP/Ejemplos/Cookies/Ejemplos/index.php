<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
    $color = $_COOKIE 
    ?>
    <div class="container">
        <div class="content-header">
            <?php
            if (isset($_COOKIE["usuario"])) {
                echo "<h2> Tonces parcero" .$_COOKIE["usuario"]."</h2>";
            } else {
                echo "<h2> Usuario no logeado </h2>";
                echo "<a href='login.php'>Iniciar Sesión </a>";
            }

            ?>
            
        </div>
    </div>
</body>
</html>