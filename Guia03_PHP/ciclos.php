<?php 
    //CICLO FOR 
    for ($i=0; $i < 10; $i++) { 
        print("Numero $i <br>");
    }
    echo "<hr>";

    $arrayFrutas = ["Mango","Pera","Piña","Kiwi"];
    for ($i=0; $i < count($arrayFrutas); $i++) { 
        echo "<br>".$arrayFrutas[$i];
    }
    echo "<hr>";
    
    foreach ($arrayFrutas as $items) {
        echo "<br>$items";
    }
    echo "<hr>";

    $arrayUsuario = ["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true];
    echo"<br>Edad >".$arrayUsuario["edad"];
    foreach ($arrayUsuario as $clave => $value) {
        echo "<br>Clave: $clave => Valor: $value";
    }

    //WHILE 
    $valor = rand(1,100);
    $inicio = 1;

    echo "<br> Valor Generado: $valor";
    while($inicio<=$valor) {
        echo "<br> $inicio";
        $inicio++;
    }

    //DOWHILE

    $dia = date("d");
    $inicio = 1;

    do {
        echo "<br>$inicio";
        $inicio++;
    } while ($inicio <= $dia);