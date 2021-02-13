<?php require 'conection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Login</title>
</head>
<body>
    <?php require 'partials/header.php'?>

    <h1>Login</h1>
    <span>o <a href="signup.php">Registrarte</a></span>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Ingrese correo">
        <input type="password" name="password" placeholder="Ingrese contraseña">
        <button class="btn" type="submit" value="enviar">enviar</button>
    </form>
</body>
</html>