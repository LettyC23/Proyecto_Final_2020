<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
     <!--JQUERY-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/style.css' />
</head>
<body>
<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
    <div class="form-group">
        <div>
<h1>Registrar</h1><br>
<form name="registerform" id="registerform" method="POST" action="../Modelos/procesar_altas_usuarios.php">
    <p>
    <label for="user_login">Nombre Completo<br />
    <input type="text" name="caja_nombre_completo" id="caja_nombre_completo" class="input" size="28" value="" /></label>
    </p>

    <p>
    <label for="user_pass">E-mail<br />
    <input type="email" name="caja_email" id="caja_email" class="input" value="" size="28" /></label>
    </p>

    <p>
    <label for="user_pass">Nombre De Usuario<br />
    <input type="text" name="caja_nombre_usuario" id="caja_nombre_usuario" class="input" value="" size="20" /></label>
    </p>

    <p>
    <label for="user_pass">Contraseña<br />
    <input type="password" name="caja_password" id="caja_password" class="input" value="" size="25" /></label>
    </p>


    <button type="submit" class="button">  Registrar </button><br>


    <p class="regtext">Ya tienes una cuenta? <a href="formulario_iniciarSesion.php" >Entra Aquí!</a>!</p>
</form>


</div>
</div>
        </div>
    </div>   
    <br><br><br><br><br><br>
</body>
</html>

