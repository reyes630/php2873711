<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/check3.css">
</head>
<body>
    <div class="info-container">
        <?php 
            $nombre = $_POST["txtNombre"] ?? null;
            $perfil = $_POST["txtPerfil"] ?? null;
            $experiencia = $_POST["txtExperiencia"] ?? null;
            //$_FILES: Array asosiativo que contiene los archivos subidos por POST

            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            $name = $_FILES['txtCedula']['name'];
            $full_path = $_FILES['txtCedula']['full_path'];;
            $type = $_FILES['txtCedula']['type']; 
            $tmp_name = $_FILES['txtCedula']['tmp_name']; 
            $error = $_FILES['txtCedula']['error']; 
            $size = $_FILES['txtCedula']['size']; 

            $subirArchivo = "uploads/".$name;
            if (move_uploaded_file($tmp_name,$subirArchivo)) {
                echo "Se subio Correctamente";
            }else{
                echo"Error";
            }


        ?>
    </div>
</body>
</html>