<?php

include("conectar.php");
$correo = $_POST['username'];
$contrasenia = $_POST['password'];
$query = "SELECT * FROM cuenta WHERE correo = '$correo' AND contrasenia = '$contrasenia'";
$resultado= $conexion->query($query);
if($resultado->rowCount()){
    header("location: inicio.php");
}else{
    header("location: index.php?fallo=true");
}



?>