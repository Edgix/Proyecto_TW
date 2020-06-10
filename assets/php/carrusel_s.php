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