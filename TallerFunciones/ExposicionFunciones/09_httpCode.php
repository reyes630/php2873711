<?php
http_response_code(404); //  código de estado HTTP 404 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error 404</title>
    <style>
        body { 
            text-align: center; 
            font-family: Arial, 
            sans-serif; 
            padding: 50px; 
        }
        h1 { 
            color: red; 
            font-size: 48px; 
        }
        p { 
            font-size: 18px; 
        }
        a { 
            text-decoration: none; 
            color: blue; 
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Página no encontrada.</p>
    <p><a href="/">Volver al inicio</a></p>
</body>
</html>
