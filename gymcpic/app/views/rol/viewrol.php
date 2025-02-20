<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;

    }

    header, footer {
        background-color: gray;
        color: white;
        
    }
    .container {
        align-items: center;
        display: flex;
        flex-direction: row;
        flex: 1;
        justify-content: center;


    }
    .data-container {
        border: 2px solid black;
        border-radius: 0.3rem;
        padding: 1.5rem;

    }
    .record {
        display: flex;
        font-display: row;
        justify-content: space-between;
        gap: 1rem;
        padding:  0.2rem 0;
    }
    .buttons {
        display: flex;
        font-display: row;
        gap: 0.4rem;
    }
    .buttons button {
        cursor: pointer;
        padding: 0.1rem 0.5rem;
        background-color: black;
        color: #fff;
        border-bottom: none;
    }
    </style>
</head>
<body>
    <header>
        <h1>GYMCPIC - Software de gestion Gimnacsio CPIC</h1>
    </header>
    <div class="container">
        <div class="data-container">
            
            <?php 
                    if (empty($roles)) {
                    echo "<br>No se encuentran roles en la base de datos";
                }else {
                    foreach ($roles as $key => $value) {
                       
                       echo "<div class='record'> 
                        <span>
                            ID: $value->id - $value->nombre
                        </span>
                        <div class='buttons'>
                            <button>Consultar</button>
                            <button>Editar</button>
                            <button>Eliminar</button>
                        </div>
                       </div>";
                       
                    }
                }
            ?>
            
        </div>
    </div>
    <footer>
        <p>Desarrollado por ADSO 2873711</p>
    </footer>
</body>
</html>