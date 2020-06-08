<?php
session_start();
include("conectar.php");
$correo = $_POST['username'];
$contra = $_POST['password'];
$query = "SELECT * FROM cuenta WHERE correo = '$correo' AND contrasenia = '$contra'  ";
$query2 = "SELECT  idCuenta  FROM cuenta WHERE correo = '$correo' AND contrasenia = '$contra'  ";
$resultado= $conexion->query($query2);
$resultado = $resultado->fetch_assoc();
$_SESSION["usuario"] =$resultado["idCuenta"];
$resultado= $conexion->query($query);
if($resultado->num_rows>0){  
    header("location: inicio.php");
}else{
   header("location: ../../index.php?fallo=true");
}


?>