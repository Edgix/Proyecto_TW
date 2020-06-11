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
$usu =$resultado["idCuenta"];
$query3 = "SELECT idPerfil FROM `perfil` WHERE `idCuenta` = '$usu'";
$resultado= $conexion->query($query3);
$resultado = $resultado->fetch_assoc();
$_SESSION["perfil"] =$resultado["idPerfil"];
$resultado= $conexion->query($query);
if($resultado->num_rows>0){  
    header("location: inicio.php");
}else{
   header("location: ../../index.php?fallo=true");
}


?>