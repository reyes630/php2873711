<?php 
setcookie("usuario", "Esteban", time() + 3600, "/");

echo "Cookie Cerrada.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="index.php">Volver</a>
</body>
</html>