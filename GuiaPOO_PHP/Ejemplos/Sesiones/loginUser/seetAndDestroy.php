<?php 
session_start();
session_destroy(); //Destruye la sesio
header("Location:index.php"); //Redirrecciona al index 