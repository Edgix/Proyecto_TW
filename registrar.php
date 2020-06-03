<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a DOMINGO!!!</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <script type="text/javascript">
        function comprobarDatosFormulario() {
            var comprobacion = false;
            var expReg = /[\s\S]{3}/;
            var nombre = document.getElementById('NombreFormUsuario').value;
            var apellido = document.getElementById('NombreAP').value;
            var mail = document.getElementById('Nombremail').value;
            var contra = document.getElementById('Nombrecontra').value;
            var tarj = document.getElementById('Nombretarj').value;
            var fecha = document.getElementById('Nombrefecha').value;

            if (!expReg.test(nombre)) {
                alert('falta nombre');
                return false;
            }
            if (!expReg.test(ap)) {
                alert('falta apellido');
                return false;
            }
            if (!expReg.test(mail)) {
                alert('Ingrese su e-mail');
                return false;
            }
            if (!expReg.test(contra)) {
                alert('Ingrese su contraseña');
                return false;
            }

            if (!expReg.test(tarj)) {
                alert('Ingrese su numero de tarjeta');
                return false;
            }
            if (!expReg.test(fecha)) {
                alert('Ingrese su fecha de expracion');
                return false;
            } else {

            }


        }
    </script>
</head>

<body>


    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="Domingo logo">
                <h3>Registrate</h3>
                <span>Para continuar Domingo</span>
            </div>

            <h1>Crea tu cuenta!</h1>
            <form name="formularioUsuario" action="exito.php" method="get" onsubmit="return comprobarDatosFormulario()">
                <label>Nombre:<input id="NombreFormUsuario" type="text" name="nombre" /></label><br />
                <label>Apellidos: <input id="NombreAP" type="text" name="ap" /></label><br />
                <label>E-mail:<input id="Nombremail" type="email" name="mail" /></label><br />
                <label>Contraseña:<input id="Nombrecontra" type="password" name="contra" /></label><br />
                <label>Numero de la tarjeta: <input id="Nombretarj" type="number" name="tarj" /></label><br />
                <label>Fecha de expiracion <input id="Nombrefecha" type="date" name="fecha" /></label><br />

                <label><input id="botonEnvio1" type="submit" value="Enviar"></label>

                <input type="reset">
                </p>

            </form>
        </div>

    </div>

</body>

</html>