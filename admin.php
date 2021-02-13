<?php
  session_start();

  require 'conection.php';

  if (isset($_SESSION['user_id'])) {
    $records = $link->prepare('SELECT id, nombre, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
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
              
                <br> bienvenido <?=$user['nombre']; ?>
                <br>te logueaste correctamente 
                <a href="logout.php">Salir</a>            

            </div>
            
        </header>
        <section class="content">
            <?php require 'partials/header.php'?>
            <form action="create()" method="POST" onsubmit=app.agregar()></form>
        <table>    
            <thead>
        <tr>
          <th>Usuario</th>
          <th>Correo electronico </th>
          <th>contraseña</th>
        </tr>
            </thead>
        </table>    
        </section>
    </body>
</html>

