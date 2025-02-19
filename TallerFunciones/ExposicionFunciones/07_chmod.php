<?php
$archivo = "ejemplo.txt"; 

if (!file_exists($archivo)) {
    file_put_contents($archivo, "Contenido de prueba.");
}

if (chmod($archivo, 0755)) {
    echo "Permisos cambiados correctamente.";
} else {
    echo "Error al cambiar permisos.";
}
?>