<?php
$array1    = array("a" => "green", "red", "blue", "red");
$array2    = array("b" => "green", "yellow", "red");
$resultado = array_diff($array1, $array2);

print_r($resultado);
?>