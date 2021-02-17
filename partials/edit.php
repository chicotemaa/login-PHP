<?php
                    if (isset($_GET['id'])) {
                        $edit = $link->prepare('SELECT id, nombre, email, password FROM users WHERE id = :id');
                        $edit->bindParam(':id', $_GET['id']);
                        $edit->execute();
                        $editar = $edit->fetch(PDO::FETCH_ASSOC);
                    }
                    if (isset($_REQUEST['guardar'])) {
                        $id=$_GET['id'];
                        $nombre=$_GET['nombre'];
                        $email=$_GET['email'];
                        $password = password_hash($_GET['password'], PASSWORD_BCRYPT);
                        $actualizar= "UPDATE users SET nombre='$nombre', email='$email' , password='$password' WHERE id = '$id'";
                        $actualizado=$link->prepare($actualizar);
                        $actualizado->execute();
                        header("Location: /login/admin.php");
                    }