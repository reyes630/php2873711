<?php
require_once 'class/producto.php';
$id=1;
$nombre="Posrtatil Lenovo";
$precio=2000000;
$descripcion="Equipo random";

$prod_obj = new Producto($id,$nombre,$precio,$descripcion);
echo "El id es: ".$prod_obj->getId();
echo "<br>Nombre: ".$prod_obj->getNombre();
echo "<br>Precio: ".$prod_obj->getPrecio();
echo "<br>Descripción: ".$prod_obj->getdesc();
$prod_obj->setprecio(3500000);
echo "<br>El Nuevo precio: ".$prod_obj->getprecio();