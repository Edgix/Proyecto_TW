<?php
$connect = mysqli_connect("localhost", "root", "root1234", "Domingo");
function make_query($connect)
{
 $query = "SELECT * FROM pelicula ORDER BY idPelicula ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#carrusel_dinamico" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#carrusel_dinamico" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
  <center><img src="data:image/jpeg;base64,'.base64_encode($row['Imagen']).'"/></center>
  <br/>
  <div class="carousel-caption">
  <h3>'.$row["Titulo"].'</h3>
 </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link  id="estilo" rel="stylesheet" href="../css/estilos.css">
    <link  id="estilo" rel="stylesheet" href="../css/style.css">
    <link  id="estilo" rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Domingo</title>
</head>
<body>
    <nav>
        <button class="switch" id="switch">
            <span><i class="fas fa-sun"></i></span>
            <span><i class="fas fa-moon"></i></span>
        </button>			
    </nav>

	<header>
  <header>
		<div class="contenedor">
            <center><img src="../images/logo.png" title="Logo" alt="Site logo" /></center>
			<nav>
				<a href="#" class="activo">Inicio</a>
				<a href="#">Programas</a>
				<a href="#">Películas</a>
				<a href="#">Más Recientes</a>
				<a href="#">Mi lista</a>
			</nav>
		</div>
  </header>
  
  <div class="container">
   <br />
   <div id="carrusel_dinamico" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#carrusel_dinamico" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#carrusel_dinamico" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
   <div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Pelicula</h3>
				<p class="Sintesis">
                    nepe
                </p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
      </div>
  </div>
	
            <script src="../js/main.js"></script>
            <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>
</html>