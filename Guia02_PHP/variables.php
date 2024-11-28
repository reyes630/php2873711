<?php 
    $nombre = "Juan"; //String
    $edad = 25; //Int
    $estado = true; //Bool
    $peso = 65.5; //Double

    //Operador Ternario
    $estadoTxt = ($estado)?"Activo":"Inactivo";
    //$estadoTxt = (!$estado)?"Inactivo":"Activo";

    $output = <<<OUT
        Nombre: $nombre. <br>
        Edad: $edad. <br>
        Peso: $peso. <br>
        Estado: $estadoTxt.<br> 
    OUT;

    echo $output;

    $estaLloviendo = false;

    //$clima= ($estaLloviendo)? "Esta Lloviendo":"Hace Sol";
    $clima= (!$estaLloviendo)? "Hace Sol":"Esta Lloviendo";

    echo "¿Como esta el clima? <br> $clima <br>";

    //Arrays (Listas)
    echo "<br><hr>";

    //Array escalar (Inidces numérico desde cero)
    $arrayFrutas = ["Mango","Pera","Piña","Kiwi"];
    echo $arrayFrutas[2];

    //Array asociativo ( Indices son cadenas)
    $arrayUsuario = ["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true];
    echo "<br>Edad> ".$arrayUsuario["edad"];

    //Array Multiple 
    $arrayMultiple = ["nombre" => "Juan", "email" => "j@gmail.com", "edad" => 20, "estado" => true, 365, "SENA", $arrayUsuario, "frutas" => $arrayFrutas];

    echo "<br>Dias del año>".$arrayMultiple[0];
    echo "<br>Nombre>".$arrayMultiple["nombre"];
    echo "<br>Edad>".$arrayMultiple["edad"];
    echo "<br>Institucion de colombia>".$arrayMultiple[1];
    echo "<br>Fruta>".$arrayMultiple["frutas"][1];
    echo "<br>Nombre Usuario>".$arrayMultiple[2]["nombre"];