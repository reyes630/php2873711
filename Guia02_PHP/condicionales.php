<?php 
    $aleatorio = rand(1,999);
    echo "El número es: $aleatorio <br>";
    if($aleatorio >= 50) {
        echo "El numero es mayor o igual a 50 <br>";
    } else {
        echo "El numero es menor de 50 <br>";
    }
    /* Generar un valor aleatorio entre 1 y 999
    Luego mostrar. Si tiene 1,2 o 3 digitos */

    if($aleatorio < 10) {
        echo "El número tiene 1 digito";
    }elseif($aleatorio < 100) {
        echo "El número tiene 2 digitos";
    } else {
        echo "El numero tiene 3 digitos";
    }
