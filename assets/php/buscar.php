<?php

$connexion = new mysqli("localhost","root","root1234","domingo");
 
$html = '';
$html2 = '';

$key = $_POST['key'];
 
$result = $connexion->query(
    'SELECT *
    FROM pelicula
    WHERE pelicula.Titulo LIKE "%'.strip_tags($key).'%"
    ORDER BY idPelicula DESC LIMIT 0,5'
    
);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        $html .= '<div><a class="suggest-element" data="'.utf8_encode($row['Titulo']).'" id="pelicula'.$row['Titulo'].'">'.utf8_encode($row['Titulo']).'</a></div>';    
        $html2 .= "<div><img src='../images/peliculas/" . $row['Imagen'] . "' class='suggest-element' style=width:4em; height:6em; ></div>";

}
}
echo $html;
echo $html2;


?>