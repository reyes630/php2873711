<?php 
    //Arrays asociativos nativos de PHP
    /* 
    $_POST: Array asosiativo que almacena las variables enviadas desde el metodo POST
        $_POST['txtNombre']
    
    $_GET: Array asosiativo que almacena las variables enviadas por metodo GET 
        $_GET['txtEmail']

    $_REQUEST: Array asosiativo que almacena variables de ambos metodos (GET, POST y COOKIE)
        $_REQUEST['txtTelefono']
    */
   $nombre = $_POST['txtNombre'];
   print("Nombre: $nombre");