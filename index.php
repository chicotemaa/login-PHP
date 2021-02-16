<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /login/admin.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles.css">
        <title>Login StampyMail</title>
    </head>
    <body>
        <header>

            <div id="top-header">
                <div id="menu-register">
                        <ul class="nav">
                            <li class="register">¿Quieres registrarte?
                                <a href="signup.php">Registrarme</a>
                            </li>
                        </ul>
                </div>
                <div id="menu-login">

                        <ul class="nav">
                             <li class="login">¿Tienes un Usuario? <a href="login.php">loguerme</a></a> </li>
                        </ul>
                </div>
               

            </div>
            
        </header>
        <section class="content">
            <?php require 'partials/header.php'?>
            
            <p> Bienvenidos, para ver y modificar la lista de usuarios debe loguearse</p>
        </section>
    </body>
</html>

