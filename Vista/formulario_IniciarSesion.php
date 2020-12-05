<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Iniciar Sesión</title>
    
     
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Vista/Scripts/estilos/style.css" >

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
    <div class="form-group">
        <div >
        <h1> <img src="img/user.png"> <br> Iniciar Sesión</h1>
        <form name="loginform" id="loginform" action="../Modelos/procesar_validacion_usuarios.php" method="POST">
            <p>
                <label for="user_login">Nombre De Usuario<br />
                <input type="text" name="caja_usuario" id="caja_usuario" class="input" value="" size="20" /></label>
            </p>
            <p>
                <label for="user_pass">Contraseña<br />
                <input type="password" name="caja_contraseña" id="caja_contraseña" class="input" value="" size="20" /></label>
            </p>
            <button type="submit" class="button"><i class="fas fa-sign-in-alt"></i>  Ingresar </button><br>
            <p class="regtext">No estas registrado? <a href="formulario_registrar_usuario.php">Registrate Aquí</a>!</p>
        </form>
        
        </div>
               <!-- <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div> -->
          </div>
        </div>
    </div>   
    <br><br><br><br><br><br>
</body>
</html>
