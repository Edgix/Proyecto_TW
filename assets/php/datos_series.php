<?php
  include("conectar.php");
  $query = "SELECT * FROM serie";
  $resultado= $conexion->query($query);  

  //por clasificacion
  if(!empty($_POST["genero"])) {
    $query2 = "SELECT * FROM serie  WHERE genero='" . $_POST["serie"] . "'";
  }
    $resultado= $conexion->query($query2);
  

 ?>