<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action= "validar.php" method="post">
        <h1>Sistema de Login</h1>
        <p>usuario <input type= "text" placeholder="ingrese su nombre"></p> 
        <p>contraseña <input type= "text" placeholder="ingrese su contraseña"></p>
        <?php
        $contraseña=base64_encode('contraseña') //encripta la contraseña
        ?>
        <input type="submit" value="ingresar">
        
    </form>
</body>
</html>