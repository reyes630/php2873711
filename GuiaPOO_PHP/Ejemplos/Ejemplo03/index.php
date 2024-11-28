<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
    <style>
        .esconder {
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="proceso.php" method="post" >
            <h2>Registro Vehiculo</h2>
            <div class="form-group">
            <label for="tipoVehiculo">Tipo Vehiculo</label>
                <select name="" id="tipoVehiculo"> 
                <option value="" disabled selected>Elige una opción</option>
                <option value="Auto">Auto</option>
                <option value="Moto">Moto</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Marca">Marca</label>
                <input type="text" name="Marca" id="">
            </div>
            <div class="form-group">
                <label for="cantRuedas">Cantidad de Ruedas</label>
                <input type="Number" name="cantRuedas" id="">
            </div>
            <div class="form-group" id="cantPuertas">
                <label for="cantPuertas">Cantidad de Puertas</label>
                <input type="Number" name="cantPuertas" id="">
            </div>
            <div class="form-group">
            <label for="encendido">¿Vehiculo Encendido?</label>
                <div class="radio-option">
                    <label for="">Si</label>
                    <input type="radio" name="encendido" id="" value="Si">
                </div>
                <div class="radio-option">
                    <label for="">No</label>
                    <input type="radio" name="encendido" id="" value="No">
                </div>
            </div>
            
            
            <button type="submit">Registar</button>
          
            
        </form>
    </div>

    <script>
        const cantPuertas =document.querySelector('#cantPuertas')
        const tipoVehiculo =document.querySelector('#tipoVehiculo')

        tipoVehiculo.addEventListener("input", function(){
            if(tipoVehiculo.value == "Moto") {
                cantPuertas.classList.add("esconder")
            }else {
                cantPuertas.classList.remove("esconder")
            }
        })
    </script>
</body>
</html>