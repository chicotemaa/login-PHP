<?php
    $server= 'localhost';
    $basededatos= 'stampymail';
    $user= 'root';
    $contraseña= '36966519';


try {
        $link = new PDO("mysql:host=$server;dbname=$basededatos",$user,$contraseña);
        	return $link;
	}catch (PDOException $e){
        die('connected filed:' .$e->getMessage());
    }

