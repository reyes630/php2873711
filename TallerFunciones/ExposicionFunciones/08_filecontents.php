<form method="post">
    <label for="archivo">Ingrese el nombre del archivo:</label>
    <input type="text" name="archivo" required>
    <button type="submit">Buscar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $archivo = $_POST["archivo"]; 

    
    if (is_file($archivo)) {
       
        $contenido = file_get_contents($archivo);
        echo "El archivo existe. Su contenido es:<br><pre>$contenido</pre>";
    } else {
        echo "El archivo no existe.";
    }
}
?>

