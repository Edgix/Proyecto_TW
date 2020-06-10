<link id="estilo" rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/multiple-image-slider.js"></script>
<div class="container">
    <h3>Tus Peliculas:</h3>
    </br>
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
                    $sliderHtml .= "<div class='col-xs-2'>";
                    $sliderHtml .= "<img src='../images/peliculas/" . $sliderImage['Imagen'] . "' class='img-responsive'>";
                    $sliderHtml .= "</div></div>";
                }
                echo $sliderHtml;
                ?>
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>

    </div>
</div>

<div class="container">
    <h3>Tus series:</h3>
    </br>
    <div class="col-md-15">
        <div class="carousel slide multi-image-slider" id="theCarousel2">
            <div class="carousel-inner">
                <?php
                $conn = mysqli_connect("localhost", "root", "root1234", "Domingo");
                $sqlQuery = "SELECT * FROM serie WHERE idClasificacion = 4 ORDER BY serie.idSerie ASC";
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