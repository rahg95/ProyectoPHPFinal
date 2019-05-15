<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Sesiones</title>

    <link rel="stylesheet" href="css/Login.css">
</head>
<body><br><br><br><br><br><br><br><br><br>
    <form action="" method="POST">
       <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
       ?>
        <h2>Iniciar sesión</h2>
        <p><a href="Publica/index.php">Inicio</a></p>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <p><a href="Registrarse.php">Registrarse</a></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
</body>
</html>