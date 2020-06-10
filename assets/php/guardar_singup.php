<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php 
$variable1=" PHP 5";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
</head>
<body>
    <?php
        include("conectar.php");
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['mail'];
        $contrasenia= $_POST['contrasenia'];
        $tarjeta= $_POST['tarjeta'];
        $fechaEx = $_POST['fechaEx'];

        
        if(buscaRepetido( $correo, $tarjeta,$conexion)){
            header("location: signup.php?fallo=true");
        }else{
            $query= "INSERT INTO cuenta (correo,tarjeta,fechaEx,contrasenia,nombre,apellido) VALUES('$correo','$tarjeta','$fechaEx','$contrasenia','$nombre','$apellido')";
            $resultado= $conexion->query($query);
            if($resultado){
                session_start();
                $query2 = "SELECT  idCuenta  FROM cuenta WHERE correo = '$correo' AND contrasenia = '$contrasenia'  ";
                $resultado= $conexion->query($query2);
                $resultado = $resultado->fetch_assoc();
                $_SESSION["usuario"] =$resultado["idCuenta"];
                include 'agregar_perfil.php';
            }
        }


        function buscaRepetido($nom,$ape,$conexion){
            $query= "SELECT * FROM cuenta WHERE correo =' $nom ' OR tarjeta = ' $ape ' ";
            $resultado= $conexion->query($query);
            if($resultado->num_rows>0){
                return true;
            }else{
                return false;
            }
        }
        
    ?>

</body> 
</html>