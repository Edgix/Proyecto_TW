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
5

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
                            <li><a href="">Perfil 1</a></li>
                            <li><a href="">Perfil 2</a></li>
                            <li><a href="">Perfil 3</a></li>
                            <li><a href="">Agregar Perfil</a></li>
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
    <h3>Tus peliculas:</h3>
                </br>
    <div class="container">
        <div class="col-md-15">
            <div class="carousel slide multi-image-slider" id="theCarousel">
                <div class="carousel-inner">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "root1234", "Domingo");
                    $sqlQuery = "SELECT * FROM pelicula WHERE idClasificacion = 3 ORDER BY pelicula.idPelicula ASC";
                    $resultSet = mysqli_query($conn, $sqlQuery);
                    $setActive = 0;
                    $sliderHtml = '';
                    while ($sliderImage = mysqli_fetch_assoc($resultSet)) {
                        $activeClass = "";
                        if (!$setActive) {
                            $setActive = 1;
                            $activeClass = 'active';
                        }
                        $sliderHtml .= "<div class='item " . $activeClass . "'>";
                        $sliderHtml .= "<div class='col-xs-2'><a href='" . $sliderImage['idPelicula'] . "'>";
                        $sliderHtml .= "<img src='../images/peliculas/" . $sliderImage['Imagen'] . "' class='img-responsive'>";
                        $sliderHtml .= "</a></div></div>";
                    }
                    echo $sliderHtml;
                    ?>
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            
        </div>
    </div>
   <h3>Tus series:</h3>
                </br>
    <div class="container">
        <div class="col-md-15">
            <div class="carousel slide multi-image-slider" id="theCarousel2">
                <div class="carousel-inner">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "root1234", "Domingo");
                    $sqlQuery = "SELECT * FROM serie WHERE idClasificacion = 3 ORDER BY serie.idSerie ASC";
                    $resultSet = mysqli_query($conn, $sqlQuery);
                    $setActive = 0;
                    $sliderHtml = '';
                    while ($sliderImage = mysqli_fetch_assoc($resultSet)) {
                        $activeClass = "";
                        if (!$setActive) {
                            $setActive = 1;
                            $activeClass = 'active';
                        }
                        $sliderHtml .= "<div class='item " . $activeClass . "'>";
                        $sliderHtml .= "<div class='col-xs-2'><a href='" . $sliderImage['idSerie'] . "'>";
                        $sliderHtml .= "<img src='../images/series/" . $sliderImage['Imagen'] . "' class='img-responsive'>";
                        $sliderHtml .= "</a></div></div>";
                    }
                    echo $sliderHtml;
                    ?>
                </div>
                <a class="left carousel-control" href="#theCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            
        </div>
    </div>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/multiple-image-slider.js"></script>
</body>

</html>