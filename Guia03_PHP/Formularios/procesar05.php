<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form05.css">
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="info-container">
        <?php
        $name = $_POST['txtName'] ?? null;
        $identification = $_POST['txtId'] ?? null;
        $Phone = $_POST["txtPhone"] ?? null;
        $email = $_POST["txtEmail"] ?? null;
        $studies = $_POST['studies'] ?? null;

        echo "<h2>Personal Data</h2>";
        echo "<span><h4>User Name:</h4> $name </span>";
        echo "<span><h4>Identification: </h4>$identification</span>";
        echo "<span><h4>Phone Number:</h4> $Phone</span>";
        echo "<span><h4>Email:</h4> $email</span>";
        echo "<span><h4>Studies :</h4> $studies</span>"
        ?>
    </div>
    </body>
    </html>
</body>
</html>
 
