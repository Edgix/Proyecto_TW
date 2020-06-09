<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
$variable1 = " PHP 5";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
  <?php
  include("conectar.php");
  session_start();
  $_SESSION['usuario'];
  $nepe = $_SESSION['usuario'];
  echo "<script>alert('" . $nepe . "');</script>";
  $nombre = $_POST['nombreP'];
  $varcheck = $_POST['check'];
  $idioma = $_POST['idioma'];

  $query = "INSERT INTO perfil (idCuenta,nombre,idioma, idContenido) VALUES ('$nepe','$nombre', '$idioma', '$varcheck')";


  //$resultado= $conexion->query($query);S
  if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
  }



  ?>

</body>

</html>