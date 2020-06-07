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

        
        if(buscaRepetido( $tarjeta,$correo,$conexion) == 1){
            echo '<script>alert("El cliente ya existe");</script>';
            include 'registrar.php';
        }else{
            $query= "INSERT INTO cuenta (correo,tarjeta,fechaEx,contrasenia,nombre,apellido) VALUES('$correo','$tarjeta','$fechaEx','$contrasenia','$nombre','$apellido')";
            $resultado= $conexion->query($query);
            if($resultado){
                echo '<script>alert("Se agrego correctamente");</script>';
                //include 'index.php';
            }else{
                echo '<script>alert("No se puedo agregar");</script>';
                include 'registrar.php';
            }
        }


        function buscaRepetido($nom,$ape,$conexion){
            $sql= "SELECT * from cuenta
                where correo='$nom' and tarjeta='$ape'";
                $result=mysqli_query($conexion,$sql);

            if(mysqli_num_rows($result) > 0){
                return 1;
            }else{
                return 0;
            }
        }
        
    ?>

</body> 
</html>