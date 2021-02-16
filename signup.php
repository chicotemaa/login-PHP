<?php require 'conection.php';
    
    require 'partials/registro.php';
    require 'partials/login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Signup</title>
</head>
<body>

<?php require 'partials/header.php'?>
<h1>Registrate</h1>
<span>o <a href="login.php">Loguearte</a></span>

<form class="registro" action="signup.php" method="post">
        <input type="text" name="nombre" placeholder="Ingrese nombre de usuario">
        <input type="email" name="email" placeholder="Ingrese correo">
        <input type="password" name="password" placeholder="Ingrese contraseña">
        <input type="password" name="confirm_password" placeholder="Confirmar contraseña">
        <button class="btn" type="submit" value="enviar">enviar</button>
    </form>

</body>
</html>