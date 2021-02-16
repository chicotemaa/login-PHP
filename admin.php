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
    
    require 'partials/registro.php';
  }else{
    header("Location: /login/");
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
              
                <br> bienvenido <?=$user['nombre'];?>
                <br>te logueaste correctamente 
                <a class="logout" href="logout.php">Salir</a>            

            </div>
            
        </header>
        <section class="content">
            <?php require 'partials/header.php'?>

            <h2>Crear nuevo usuario</h2>
            <form class="registro admin" action="signup.php" method="post">
             <input type="text" name="nombre" placeholder="Ingrese nombre de usuario">
             <input type="email" name="email" placeholder="Ingrese correo">
             <input type="password" name="password" placeholder="Ingrese contraseña">
             <input type="password" name="confirm_password" placeholder="Confirmar contraseña">
             <button class="btn" type="submit" value="enviar">enviar</button>
            </form>
            <h2>Lista de usuarios creados</h2>
        <table>    
            <thead>
        <tr>
          <th>Usuario</th>
          <th>Correo electronico </th>
          <th>contraseña</th>
          <th>acciones</th>
        </tr>
            </thead>
            <tbody>
            <?php 
            $lista = $link->prepare("SELECT * FROM users");
            $lista->execute();
            $usuarios = $lista->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario){?>
                <tr>
                <td>
                <?php echo $usuario['nombre'] ;?>
                </td>
                <td>
                <?php echo $usuario['email'] ;?>
                </td>
                <td>
                <?php echo substr($usuario['password'],-6);?>
                </td>
                <td>
                <a href='edit.php?id=<?php echo $usuario['id'] ;?>'>Editar</a>
                <a href='delete.php?id=<?php echo $usuario['id'] ;?>'>Borrar</a>
                </td>
                <tr>
            <?php } ?>
        </table>    
        </section>
    </body>


</html>
