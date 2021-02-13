<?php require 'conection.php';
    
    $message="";
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
    
        if ($stmt->execute()) {
          $message = 'Se ha creado exitosamente el usuario';
        } else {
          $message = 'Lo sentimos hubo un problema al crear su cuenta';
        }
      }
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
<?php if(!empty($message)):?>
    <p><?= $message ?></p>
    <?php endif;?>
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