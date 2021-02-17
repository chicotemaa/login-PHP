<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php require 'partials/header.php'?>

    <div class="container">
        <div class="col">
            <form action="">
                <?php 
                    include_once 'conection.php';
                    include 'partials/edit.php'               
                        
                ?>
                <div class="formulario">
                    <form action="edit.php?id=<?php echo $editar['id'] ;?>" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $editar['nombre'];?>">
                    <label for="nombre">Correo</label>
                    <input type="email" name="email" value="<?php echo $editar['email'];?>">
                    <label for="nombre">Contraseña</label>
                    <input type="text" name="password" value="<?php echo substr($editar['password'],-6);?>">
                    
                </div>
                <input type="hidden" name="id" value="<?php echo $editar['id'];?>">
                <button type="submit" name="guardar">guardar</button>
                </form>
            </form>
           
        </div>
    </div>
    
</body>
</html>