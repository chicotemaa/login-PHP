<?php
    $server= 'localhost';
    $basededatos= 'stampymail';
    $user= 'root';
    $contraseña= '36966519';
    session_start();

try {
        $link = new PDO("mysql:host=$server;dbname=$basededatos",$user,$contraseña);
        
	}catch (PDOException $e){
        die('connected filed:' .$e->getMessage());
    }

    
