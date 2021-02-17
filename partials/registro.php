<?php
      /**REGISTRO DE USUARIOS */
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        
        if ($stmt->execute()) {          
          header('Location: /login/admin.php');
          
        } else {
          $mensaje='Lo sentimos hubo un problema al crear su cuenta';
           echo "<script type='text/javascript'>{alert('$mensaje');</script>";
        }
        
      }