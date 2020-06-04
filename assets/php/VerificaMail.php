<?php
  include("conectar.php");
  
if(!empty($_POST["email"])) {
  $query = "SELECT * FROM cuenta  WHERE correo='" . $_POST["email"] . "'";
  $resultado= $conexion->query($query);
  $user_count = mysqli_num_rows ( $resultado );
  if($user_count>0) {
      echo "<span class='estado-no-disponible-email'> Email no Disponible.</span>";
  }else{
      echo "<span class='estado-disponible-email'> Email Disponible.</span>";
  }
}
 