<?php

include("conectar.php");

 $correo = 

  //por clasificacion
  if(!empty($_POST["clasificacion"])) {
    $query2 = "SELECT * FROM pelicula  WHERE clasificacion='" . $_POST["clasificacion"] . "'";
  }
    $resultado= $conexion->query($query2);



?>