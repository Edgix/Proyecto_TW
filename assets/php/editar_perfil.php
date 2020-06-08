<?php
require 'conectar.php';
$nombreP=$_POST['nombreP'];
$categoria=$_POST['check'];
$idioma=$_POST['idioma'];
$id=$_POST['id'];
$query=mysqli_query($conexion,"UPDATE perfil SET categoria='$categoria', nombre='$nombreP' WHERE idPerfil IS NOT NULL");
header('location: vista_categoria.php');
?>