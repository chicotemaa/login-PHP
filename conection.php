
<?php
/** 
 * 
 * Conexión al servidor
 * 
*/


    $server= 'localhost';/* aca se puede modificar el nombre de servidor para facilitar acceso*/
    $basededatos= 'stampymail';/* aca se puede modificar el nombre de la base de datos para facilitar acceso*/
    $user= 'root'; /* aca se puede modificar el nombre de usuario para facilitar acceso*/
    $contraseña= '36966519'; /* aca se puede modificar el nombre de contraseña para facilitar acceso*/
    session_start();

try {
        $link = new PDO("mysql:host=$server;dbname=$basededatos",$user,$contraseña);
        
	}catch (PDOException $e){
        die('connected filed:' .$e->getMessage());
    }

    


$tabla="CREATE TABLE users(
    id INT(11) AUTO_INCREMENT PRIMARY_KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCAR(100) NOT NULL
    )";