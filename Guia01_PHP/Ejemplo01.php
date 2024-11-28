<html>
    <head>
    <title> Ejemplo Usando PHP</title>
    <style type="text/css">
        p{
            color:white;
        }
        #contenedor {
            background-color: green;
            width: 300px;
            text-align: center;
            margin: auto;
            padding: 15px;
        }
        section.html {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 500px;
            
        }
        img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        div.text p,
        div.cont-fusion p, h2{
            color: black;
            text-align: center;
        }
        section.fusion {
            display: flex;
            border: 3px solid green;
            flex-direction: column; 
            align-items: center;
            margin: auto;
            width: 500px;
            padding: 8px;
            
        }
        section.fusion img {  
            margin-left: 40%;
        }

        .heredoc {
            border: 3px solid green;
            display: flex;
            margin-top: 10px;
            width: 500px;
            margin: auto;
            padding: 8px;
        }

    </style>
    </head>
    <body>
        <?php 
            echo "<div id = 'contenedor'>";
            echo "<p>INFORMACIÓN</p>";
            echo "</div>";
        ?>
        <section class="html">
            <div class="img">
                <img  src="image.png" alt="imagen">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, cupiditate. Vel temporibus facere similique, culpa quis corrupti. Est voluptate dolorum fugit hic, repudiandae sunt dolorem unde accusamus corporis incidunt aspernatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatem accusantium ratione beatae esse porro incidunt quos? Beatae quam praesentium voluptas in eos, vero ipsa eius autem ad nisi placeat!</p>
            </div>
        </section>

        <section class="fusion">
            <div class="img">
            <img  src="image.png" alt="imagen">

            <?php 
                echo "<div class = 'cont-fusion'>";
                echo "<h2> AQUI HAY HTML Y PHP </h2>";
                echo "<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, cupiditate. Vel temporibus facere similique, culpa quis corrupti. Est voluptate dolorum fugit hic, repudiandae sunt dolorem unde accusamus corporis incidunt aspernatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatem accusantium ratione beatae esse porro incidunt quos? Beatae quam praesentium voluptas in eos, vero ipsa eius autem ad nisi placeat! </p>" ;
                echo  "</div>";
            ?>
            </div>
        </section>

        <section class="heredoc">
        <?php 
            echo <<<HER
            <div class="Bienvenido"> 
                <h1>Bienvenido a mi sitio web</h1>
                Este es un ejemplo de cómo usar heredoc para generar HTML.
                <div class="img">
                    <img  src="showerhomer.png" alt="imagen">
                </div>
            </div>
            HER;
            ?>  
        </section>
    </body>
</html>