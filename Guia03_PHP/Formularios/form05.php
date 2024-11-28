<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 05</title>
    <link rel="stylesheet" href="./css/form05.css">
</head>
<body>
<div class="form-container">
    <form action="procesar05.php" method="post">
        <h2>Personal Data</h2>
        <div class="form-group">
            <label for="txtName">User Name</label>
            <input type="text" name="txtName" id="txtName">
        </div>
        <div class="form-group">
            <label for="txtId">Identification</label>
            <input type="text" name="txtId" id="txtId">
        </div>
        <div class="form-group">
            <label for="txtPhone">Phone</label>
            <input type="tel" name="txtPhone" id="txtPhone">
        </div>
        <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="email" name="txtEmail" id="txtEmail">
        </div>
        <div class="form-group">
            <h3>Options</h3>
            <div class="radio-option">
                <input type="radio" name="studies" id="txtNotStudies" value="Not Studies">
                <label for="txtNotStudies">Not Studies</label>
            </div>
            <div class="radio-option">
                <input type="radio" name="studies" id="txtprimaryStudies" value="Primary Studies">
                <label for="txtprimaryStudies">Primary Studies</label>
            </div>
            <div class="radio-option">
                <input type="radio" name="studies" id="txtsecondaryStudies" value="Secondary Studies">
                <label for="txtsecondaryStudies">Secondary Studies</label>
            </div>
        </div>
        <div class="form-group">
                <button type="submit">Mostrar</button>
            </div>
        </div>
    </form>   
    
</body>
</html>