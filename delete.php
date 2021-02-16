<?php
require_once "conection.php";
$id =$_GET['id'];
$delete =$link->prepare("DELETE FROM users WHERE id=:id");
$delete ->bindParam(":id",$id);

if ($delete->execute()){
    header("Location: /login/admin.php");
   
}else{
    echo "no se ha eliminado";
}