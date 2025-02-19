<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Taller Funciones PHP</h1>
    
    <section class="Ejercicio1">
        <h2>Ejercicio 1:</h2>
        <div class="fecha">
            <h3> Formato Básico</h3>
            <?php 
            $basico = date("Y-m-d H:i:s");
            echo "<p> $basico </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato Corto</h3>
            <?php 
            $corto = date("d/m/y");
            echo "<p> $corto </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato largo</h3>
            <?php 
            $largo = date("l, j F Y");;
            echo "<p> $largo </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato 12 Horas</h3>
            <?php 
            $doceHoras = date("h:i:s A");;
            echo "<p> $doceHoras </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato 24 Horas</h3>
            <?php 
            $militar =  date("H:i:s");
            echo "<p> $militar </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato con texto</h3>
            <?php 
            $withText=  "Hoy es " . date("l") . " y son las " . date("h:i A");
            echo "<p> $withText </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato iso</h3>
            <?php 
            $iso =  date("c");
            echo "<p> $iso </p>";
            ?>
        </div>
        <div class="fecha">
            <h3> Formato RFE</h3>
            <?php 
            $rfe =  date("r");
            echo "<p> $rfe </p>";
            ?>
        </div>
    </section>
    <section class="ejercicio2">
        <h2>Ejercicio 2:</h2>
        <div class="type">
            <p>$a = 5;</p>
            <p>$b = "Hola";</p>
            <p>$c = 5.7;</p>
            <p>$d = True;</p>
        </div>
        <div class="type">
            <?php 

                $a = 5;
                $b = "Hola";
                $c = 5.7;
                $d = True;
                
                $entero = gettype($a);
                echo "<p> Tipo de dato: $entero</p>";
                $text= gettype($b);
                echo "<p> Tipo de dato: $text</p>";
                $decimal= gettype($c);
                echo "<p> Tipo de dato: $decimal</p>";
                $booleano= gettype($d);
                echo "<p> Tipo de dato: $booleano</p>";

            ?>
        </div>
    </section>
    <section class="ejercicios3-4-5">
        <div class="yesornot">
            <h2>Ejercicio 3:</h2>
        <?php 

            if (isset($b)) {
                echo "<p> La variable está definida. </p>";
            } else {
                echo "<p> La variable  no está definida o es null </p>";
            }
        ?>
        </div>
        <div class="deletevar">
            <h2>Ejercicio 4:</h2>

            <?php 
                unset($b);
                if (isset($b)) {
                    echo "<p> La variable está definida. </p>";
                } else {
                    echo "<p> La variable  no está definida o es null </p>";
                }
            ?>
        </div>
        <div class="exist">
        <h2>Ejercicio 5:</h2>
        <?php 
                if (empty($c)) {
                    echo "<p> La variable esta vacia. </p>";
                } else {
                    echo "<p> La variable No esta vacia. </p>";
                }
            ?>
        </div>

    </section>

    <section class="ejercicio6">
        <h2>Ejercicio 6:</h2>
        <?php 
            $nombres = [
                "Ana", "Juan", "Pedro", "Maria", "Esteban", "Luis", "Jose", "Alejandro"
            ];
        ?>
        <h3>Sort</h3>
        <div class="orden">
            <div class="key">
                <?php 
                    sort($nombres);
                    foreach ($nombres as $key => $value) {
                        echo "<p>" . $key . " ===> </p>";
                    }
                ?>
            </div>
            <div class="value">
            <?php 
                    foreach ($nombres as $key) {
                        echo "<p>" . $key . "</p>";
                    }
                ?>
            </div>
        </div>
        <h3>Rsort</h3>
        <div class="orden">
        <div class="key">
                <?php 
                    rsort($nombres);
                    foreach ($nombres as $key => $value) {
                        echo "<p>" . $key . " ===> </p>";
                    }
                ?>
            </div>
            <div class="value">
            <?php 
                    foreach ($nombres as $key) {
                        echo "<p>" . $key . "</p>";
                    }
                ?>
            </div>

    </section>
    <section class="ejercicio7">
        <h2>Ejercicio 7:</h2>
        <?php 
            $prendas = [
                48 => "Camisa",
                75 => "Pantalon",
                26 => "Chaqueta",
                35 => "Gorra",
                45 => "Camiseta",
                22 => "Medias",
                17 => "Correo",
                15 => "Zapatos"
            ];

             
             
        ?>
            <h3>Ksort</h3>
        <div class="orden">
            <div class="key">
                <?php 
                    ksort($prendas);
                    foreach ($prendas as $key => $value) {
                        echo "<p>" . $key . " ===> </p>";
                    }
                ?>
            </div>
            <div class="value">
            <?php 
                    foreach ($prendas as $key) {
                        echo "<p>" . $key . "</p>";
                    }
                ?>
            </div>
            
        </div>
        <h3>Krsort</h3>
        <div class="orden">
        <div class="key">
                <?php 
                    krsort($prendas);
                    foreach ($prendas as $key => $value) {
                        echo "<p>" . $key . " ===> </p>";
                    }
                ?>
            </div>
            <div class="value">
            <?php 
                    foreach ($prendas as $key) {
                        echo "<p>" . $key . "</p>";
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="ejercicio8">
        <h2>Ejercicio 8:</h2>
        <?php 
           $cadena = "Devuelve una parte del string definida por los parametros start y length.";
            $subcadena = substr($cadena,30,28)
        ?>
        <p>La cadena es: <?php echo $cadena ?></p>

        <h4>La sub_cadena es: <?php echo $subcadena ?></h4>
    </section>

    <section class="ejercicio9">
        <h2>Ejercicio 9</h2>
        <div class="textoeje">

        <?php 
            $frase = "El formulario de inscripción podra imprimirse descargandose de la pagina institucional del SENA";
            $cantidadCaracteres = strlen($frase);
            echo "<p>La frase '$frase' </p>";
            echo "<p>Tiene <h3>$cantidadCaracteres</h3> Caracteres</p>";
        ?>
        </div>
    </section>
    <section class="ejercicio10">
        <h2>Ejercicio 10</h2>
        <div class="textoeje">
            <?php 
                $frase1 = "Rosa*Juan*Pedro*Jose";
                echo "<p>La frase, $frase1 ,se debe convertir en un array </p>";
                $array1 = explode("*", $frase1);
                echo "<p>El array es:   </p>";
                
            ?>
            <div class="orden">
            <div class="key">
                <?php 
                    ksort($array1);
                    foreach ($array1 as $key => $value) {
                        echo "<p>" . $key . " ===> </p>";
                    }
                ?>
            </div>
            <div class="value">
            <?php 
                    foreach ($array1 as $key) {
                        echo "<p>" . $key . "</p>";
                    }
                ?>
            </div>
            
        </div>
        </div>


    </section>

    <section class="ejercicio11">
        <h2>Ejercicio 11</h2>
        <?php 
            $fraseLetras = "PHP es un lenguaje de porgramacion interpretado, diseñado originalmente para la creacion de paginas web dinamicas";

            $reemplazar = str_replace(
                ['a','e','i','o','u'],
                ['A','E','I','O','U'],
                $fraseLetras
            );

            echo "<h4>Frase Normal</h4>";
            echo "<p>$fraseLetras</p>";
            echo "<h4>Frase Modificada</h4>";
            echo "<p>$reemplazar</p>";
        ?>        
    </section>

    <section class="ejercicio12-13-14-15">
        <div class="eje">
            <h2>Ejercicio 12</h2>
                <?php
                $nombre = "juan";
                $nombreMayuscula = ucfirst($nombre);
                echo "<p>$nombre </p>";
                echo "<h3>$nombreMayuscula</h3>"; 
            ?>
        </div>
        <div class="eje">
        <h2>Ejercicio 13</h2>
        <?php
            $email = "REYESAGUDELOESTEBAN9@GMAIL.COM";
            $emailMinusculas = strtolower($email);
            echo "<p>$email  </p>";
            echo "<h3>$emailMinusculas</h3>";
        ?>
        </div>
        <div class="eje">
        <h2>Ejercicio 14</h2>
        <?php
        $nombre = "Esteban";
        $longitud = strlen($nombre);
        echo "<p>$nombre  </p>";
        echo "<h3>El nombre tiene " . $longitud . " letras.</h3>"; 
        ?>
        </div>
        <div class="eje">
        <h2>Ejercicio 15</h2>
        <?php
            $email = "esteban.reyes@gmail.com";
            $nombre = strstr($email, '@', true); 
            echo "<p>$email </p>";
            echo "<h3>El nombre del correo es: " . $nombre . "</h3>"; 
        ?>
        </div>

    </section>
    <section class="ejercicio16-17-18-19-20">
    <div class="eje">
        <h2>Ejercicio 16</h2>
        <?php
            $texto = "Hola, me llamo esteban y estoy programando";
            $textoReemplazado = str_replace(
                ['a', 'e', 'i'], 
                ['@', '3', '1'], 
                $texto     
            );
            echo "<p>$texto </p>";
            echo "<h3>$textoReemplazado </h3>"; 

            ?>

        </div>
        <div class="eje">
            <h2>Ejercicio 17</h2>
            <?php
                $email = "reyesagudeloesteban9@gmail.com";
                $posicionArroba = strpos($email, '@');
                echo "<p>$email </p>";
                echo "<h3>El símbolo '@' se encuentra en la posición: " . $posicionArroba ."</h3>";
                ?>


        </div>
        <div class="eje">
            <h2>Ejercicio 18</h2>
                <?php
                    $peso = 64;
                    $raiz_cuadrada = sqrt($peso);
                    echo "<p>Peso: $peso </p>";
                    echo "<h3>La raiz cuadrada es " . $raiz_cuadrada ."</h3>";
                    ?>


        </div>
        <div class="eje">
            <h2>Ejercicio 19</h2>
            <?php
                $nombre = "Esteban"; 
                $ultimos = substr($nombre, -4);
                echo "<p>$nombre </p>";
                echo "<h3>Los últimos 4 caracteres del nombre son: $ultimos </h3>";

                ?>


        </div>

    </section>
    <section class="ejercicio20">
    <h2>Ejercicio 20</h2>
    <form method="POST">
        <label for="nombre">Ingresa el nombre a verificar:</label>
        <input type="text" id="nombre" name="nombre">
        <button type="submit">Verificar</button>
    </form>
    <div class="eje">

    <?php
        $nombres = ["sebitas", "reyes", "juan daniel", "andres", "angie", "pablo", "samuel"];

        
        if (isset($_POST['nombre'])) {
            $nombre_ingresado = strtolower($_POST['nombre']);  

            if (in_array($nombre_ingresado, $nombres)) {
                echo "<h3>El nombre $nombre_ingresado ya existe en la lista.</h3>";
            } else {
                echo "<h3>El nombre $nombre_ingresado no se encuentra en la lista.</h3>";
            }
        } 
    ?>
    </div>
    
    
</section>


</body>
</html>
