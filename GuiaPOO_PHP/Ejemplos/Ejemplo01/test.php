<?php 
//Se incluye el archivo Persona.php una sola vez 
require_once('class/Persona.php');
$persona1 = new Persona(); //Se crea el objeto persona
//Setteamos los atributos
$persona1 -> nombre= "Ana";
$persona1 -> email= "anamaria@gmail.com";
$persona1-> edad = 25;
//Mostrar los resultados 
// echo "Su nombre es ".$persona1->nombre;
// print("<br>Su email es: ".$persona1->email);
// echo <<< TEST
//     <br>su edad es: $persona1->edad
// TEST;
$persona1->saludar();

$persona2 = new Persona("Paco","emailpaco@gmail.co",20);
$persona2 -> saludar();