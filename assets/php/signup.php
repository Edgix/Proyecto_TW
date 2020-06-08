
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido a DOMINGO!!!</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src= "../js/jquery.js"></script>
        <link  id="estilo" rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript">
			function comprobarDatosFormulario(){
				var comprobacion = false;
				var expReg = /[\s\S]{3}/;		
                var nombre = document.getElementById('NombreFormUsuario').value;
                var apellido = document.getElementById('NombreAP').value;
                var mail = document.getElementById('Nombremail').value;
                var contra = document.getElementById('Nombrecontra').value;
                var tarj = document.getElementById('Nombretarj').value;
                var fecha = document.getElementById('Nombrefecha').value;

				if(!expReg.test(nombre) ){
					alert('falta nombre');
					return false;
                }
                if(!expReg.test(ap) ){
					alert('falta apellido');
					return false;
				}
                if(!expReg.test(mail)){
					alert('Ingrese su e-mail');
					return false;
				}
                if(!expReg.test(contra)){
					alert('Ingrese su contraseña');
					return false;
				}
        
                if(!expReg.test(tarj)){
					alert('Ingrese su numero de tarjeta');
					return false;
				}
                if(!expReg.test(fecha)){
					alert('Ingrese su fecha de expracion');
					return false;
				}

                else{
				
				}
        
				
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

        <div class="signInContainer">
        
            <div class="column">

                <div class="header">
                <img src="../images/logo.png" title="Logo" alt="Domingo logo">
                    <h3>Registrate</h3>
                    <span>Para continuar Domingo</span>
                </div>
            
                <h1>Crea tu cuenta!</h1>
    <form name ="formularioUsuario" action= "guardar_singup.php" method="POST" onsubmit="return comprobarDatosFormulario()">
            
            <label>Nombre:<input id="NombreFormUsuario" type="text" name="nombre" /></label><br/>
            <label>Apellidos: <input id="NombreAP" type="text" name="apellido" /></label><br/>
            <label>E-mail:<input id="Nombremail" type="email" name="mail" onBlur="comprobarEmail()" /> <span id="estadoemail"> </span></label >  <br />
            <label>Contraseña:<input id="Nombrecontra" type="password" name="contrasenia" /></label><br/>
            <label>Numero de la tarjeta: <input id="Nombretarj" type="number" name="tarjeta" /></label><br/>
            <label>Fecha de expiracion <input id="Nombrefecha" type="date" name="fechaEx" /></label><br/>
            <label><input id ="botonEnvio1" type="submit" value="Enviar"></a>
        </p>

    </form>
            </div>
        
        </div>

        <script src="../js/main.js"></script>
</body>
<script>
function comprobarEmail() {
	jQuery.ajax({
	url: "VerificaMail.php",
	data:'email='+$("#Nombremail").val(),
	type: "POST",
	success:function(data){
		$("#estadoemail").html(data);
	},
	error:function (){}
	});
}
</script>
</html>