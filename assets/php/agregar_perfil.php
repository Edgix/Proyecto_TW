<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a DOMINGO!!!</title>
    <link rel="shortcut icon" type="image/ico" href="assets/images/monflix.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="../js/jquery.js"></script>
    <link id="estilo" rel="stylesheet" href="../css/estilos.css">
    <link id="estilo" rel="stylesheet" href="../css/style.css">

    <script>
        function selectOnlyThis(id) {
            var myCheckbox = document.getElementsByName("myCheckbox");
            Array.prototype.forEach.call(myCheckbox, function(el) {
                el.checked = false;
            });
            id.checked = true;
        }
    </script>
</head>

<body>
    <nav>
        <button class="switch" id="switch">
            <span><i class="fas fa-sun"></i></span>
            <span><i class="fas fa-moon"></i></span>
        </button>
        <span>
            <i class="cerrar-sesion"><a href="../../includes/logout.php">Cerrar sesión</a></i>
        </span>
    </nav>

    <div class="perfilContainer">

        <div class="column">

            <div class="header">
                <img src="../images/logo.png" title="Logo" alt="Domingo logo">
                <h2>Crea tu perfil!</h2>
            </div>

            <form name="formularioPerfil" action="guardar_perfil.php" method="POST" onsubmit="return comprobarDatosFormulario()">

                <label>Nombre:<input id="NombreFormPerfil" type="text" name="nombreP" /></label><br />
                <h3> Clasificación favorita</h3>
                <select id='Select' name='check'>
                    <?php
                    include("conectar.php");
                    $query = "SELECT * FROM `clasificacion` ";
                    $resultado = $conexion->query($query);
                    while ($valores = mysqli_fetch_array($resultado)) {
                        echo '<option value="' . $valores["idClasificacion"] . '">' . $valores["Nombre"] . '</option>';
                    }
                    ?>
                </select>

                <h3>Idioma:</h3>
                <select name='idioma'>
                    <option value='espaniol'>Español</option>
                    <option value='ingles'>Ingles</option>
                </select>



                <label><input id="botonEnvio1" type="submit" value="Enviar"></label>


            </form>
        </div>

    </div>

    <script src="../js/main.js"></script>
</body>
<script>
</script>

</html>