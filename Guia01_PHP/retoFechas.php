 <?php 
    date_default_timezone_set("America/Bogota");
    setlocale(LC_TIME,"Spanish_Spain.1252");
    $year = date("Y");
    $nameMonth = strftime("%B");
    $numDay = date("d");
    $nameDay = strftime("%A");
    $hrs= date( "g:i a");

    
    echo <<<HER
    Hola, Hoy es $nameDay $numDay de $nameMonth de 
    $year y son las $hrs
    HER;

 ?>