<?php 
class Persona {
    public $nombre;
    public $email;
    public $edad;
        //Se ejecuta cuando se crea un objeto 
    public function __construct($nom=null, $email=null, $edad=null)
    {
        echo "Se crea un objeto persona<br>";
        $this->nombre = $nom;
        $this->email = $email;
        $this->edad = $edad;
    }
    public function saludar(){
        echo <<<TEXT
        Hola soy $this->nombre, tengo $this->edad y mi email es $this->email
        TEXT;
    }

    public function __destruct()
    {
        echo "<br> Se destruye el objeto persona ";
    }
}