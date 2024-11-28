<?php 
    $fechaActual = date("d-m-y");
    echo "Fecha Actual> $fechaActual ";
    echo "<br>";
    echo 'Fecha Actual> $fechaActual';
    echo "<br>";
    echo 'Fecha Actual>'.$fechaActual;
    $dia = date("d");
    $mes = date("m");
    $year = date("Y");

    print("<br>Dia: $dia");
    print("<br>Mes: $mes");
    print("<br>Año: $year<br>");

    $hoy = date("F j, Y,");;
    $hora= date( "g:i a");
    print("La fecha de hoy es: $hoy");
    print("<br> La hora es: $hora");
    
?>