<?php
  include("conectar.php");
  $query = "SELECT * FROM perfil";
  $resultado= $conexion->query($query);  

  //MUESTRA DATOS
    $query2= "SELECT nombre, foto, idioma FROM perfil WHERE nombre IS NOT NULL";
    $resultado= $conexion->query($query2);
  

 ?>