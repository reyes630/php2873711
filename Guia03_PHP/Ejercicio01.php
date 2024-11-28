<?php
    $numMultiplicar = 2;

    for ($i=1; $i <= 10; $i++) { 
        $resultado = $numMultiplicar * $i;
        print("$i X $numMultiplicar = $resultado<br>");
    }

    echo "<hr>";
    $num = 1;
    while ($num <= 10) {
        $resultado = $numMultiplicar * $num;
        print("$num X $numMultiplicar = $resultado<br>");
        $num++;
        
    }

    echo "<hr>";
    $num = 1;
    do {
        $resultado = $numMultiplicar * $num;
        print("$num X $numMultiplicar = $resultado<br>");
        $num++;
    } while ($num <= 10);

