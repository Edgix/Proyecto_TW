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