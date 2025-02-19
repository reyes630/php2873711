<?php
if (!empty($_GET['caracter'])) {
    $caracter = $_GET['caracter'];
    
    if (strlen($caracter) != 1) {
        $mensaje = "Por favor, ingresa solo un carácter.";
    } else {
        $codigo = ord($caracter);

        if ($codigo >= 65 && $codigo <= 90) {
            $mensaje = "'$caracter' es una letra mayúscula.";
        } elseif ($codigo >= 97 && $codigo <= 122) {
            $mensaje = "'$caracter' es una letra minúscula.";
        } else {
            $mensaje = "'$caracter' no es una letra.";
        }
    }
}
?>

<form method="get">
    <input type="text" name="caracter" maxlength="1" placeholder="Ingresa un carácter" required>
    <button type="submit">Verificar</button>
</form>

<?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>
