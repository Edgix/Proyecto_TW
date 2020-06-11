<!DOCTYPE html>
<html lang=es>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link id="estilo" rel="stylesheet" href="../css/bootstrap.min.css">
    <link id="estilo" rel="stylesheet" href="../css/estilo.css">
    <title>Domingo</title>
</head>

<body>
    <nav>
        <div class="enlaces">
            <button class="switch" id="switch">
                <span><i class="fas fa-sun"></i></span>
                <span><i class="fas fa-moon"></i></span>
            </button>
            <header>
                <ul>
                    <li class="submenu"><a href="#" class="ne">&#9776;</a>
                        <ul class="children">
                            <?php
                            session_start();
                            $usu = $_SESSION["usuario"];
                            include("conectar.php");
                            $query = "SELECT * FROM `perfil` WHERE `idCuenta` = '$usu'";
                            $resultado = $conexion->query($query);
                            $cont = 1;
                            while ($valores = mysqli_fetch_array($resultado)) {

                                echo '<li> <a  href="#" class= "perf "id= " ' . $valores["idPerfil"] . ' ">' . $valores["nombre"] . '</a></li>';
                                $cont++;
                            }
                            ?>
                            <li><a href="agregar_perfil.php">Agregar Perfil</a></li>
                            <li class="cerrar-sesion"><a href="../../includes/logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <button class="switch" id="switch">
                    <span><i class="fas fa-sun"></i></span>
                    <span><i class="fas fa-moon"></i></span>
            </button> -->
            </header>
        </div>
    </nav>
    <header>
        <div class="contenedor">
            <img src="../images/logo.png" title="Logo" alt="Site logo" />
            <nav>
                <a href="#" class="activo"> Inicio</a>
                <a href="#"> Programas </a>
                <a href="#"> Películas </a>
                <a href="#"> Más Recientes </a>
                <a href="#"> Mi lista </a>
                <a href="#" class="buscador">
                    Buscar:
                    <input id="buscador" type="input" value="">
                </a>
            </nav>
        </div>
    </header>
    <div class="Carruseles">

    </div>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/multiple-image-slider.js"></script>
    <script>
        $(document).ready(function() {
            $(".Carruseles").load('carruseles.php');
            $(".perf").click(function(evento) {
                evento.preventDefault();
                $.ajax({
                    url: 'perfil.php',
                    data: 'perfil=' + $(this).attr('id'),
                    type: "POST",
                    success: function(data) {
                        $(".Carruseles").load('carruseles.php');
                    }
                });
            });


        });
    </script>
    <script>
    </script>
</body>

</html>