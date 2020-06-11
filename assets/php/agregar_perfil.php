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
            <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
        </span>
    </nav>

    <div class="perfilContainer">

        <div class="column">

            <div class="header">
                <img src="../images/logo.png" title="Logo" alt="Domingo logo">
                <h2>Crea tu perfil!</h2>
            </div>

            <label>Selecciona una foto para tu perfil!</label>
            <center>
                <label><input type="image" src="../images/user.png" width="50px" name="user" id="user"></label>
                <label><input type="image" src="../images/user1.png" width="50px" name="user1" id="user1"></label>
                <label><input type="image" src="../images/user2.png" width="50px" name="user2" id="user2"></label>
                <label><input type="image" src="../images/user3.png" width="50px" name="user3" id="user3"></label>
                <label><input type="image" src="../images/user4.png" width="50px" name="user4" id="user4"></label>
            </center>

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

                <input type="text" id="nombre" name="foto" style="display:none"><br>

                <label><input id="botonEnvio1" type="submit" value="Enviar"></label>


            </form>
        </div>

    </div>

    <script src="../js/main.js"></script>
    <script src="avatar.js"></script>
</body>
<script>
</script>

</html>