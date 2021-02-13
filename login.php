<?php

  session_start();


  require 'conection.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $link->prepare('SELECT id, nombre, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /login/admin.php");
    } else {
      $message = 'La contraseña es incorrecta';
    }
  }

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