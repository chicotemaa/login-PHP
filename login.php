<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /login/admin.php');
  }

  require 'conection.php';

 require 'partials/login.php'

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
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Login</h1>
    <span>o <a href="signup.php">Registrarte</a></span>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Ingrese correo">
        <input type="password" name="password" placeholder="Ingrese contraseña">
        <button class="btn" type="submit" value="enviar">enviar</button>
    </form>
</body>
</html>