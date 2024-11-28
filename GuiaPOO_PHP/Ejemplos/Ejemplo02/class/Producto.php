<?php
class Producto{
    private $id;
    private $Nombre;
    private $precio; 
    private $descripcion;

    public function __construct($id=null,$nom=null,$pre=null,$desc=null)
    {
        $this->id=$id;
        $this->Nombre=$nom;
        $this->precio=$pre;
        $this->descripcion=$desc;

    }
    public function __destruct()
    {
        echo "<br> Se detruye el producto";
    }

    // Setters y Getters
    public function setId($id) {
        //Settea un nuevo valor al atributo id
        $this-> id=$id;
    }
    public function getId(){
        //Retorn el valor actual d eid
        return $this->id;
    }
    public function setNombre($nom) {
        //Settea un nuevo valor al atributo Nombre
        $this-> Nombre=$nom;
    }
    public function getNombre(){
        //Retorn el valor actual d eNombre
        return $this->Nombre;
    }
    public function setprecio($precio) {
        //Settea un nuevo valor al atributo precio
        $this-> precio=$precio;
    }
    public function getprecio(){
        //Retorn el valor actual d eprecio
        return $this->precio;
    }
    public function setdesc($desc) {
        //Settea un nuevo valor al atributo descrpcion
        $this-> descripcion=$desc;
    }
    public function getdesc(){
        //Retorn el valor actual d  descrpcion
        return $this->descripcion;
    }
}