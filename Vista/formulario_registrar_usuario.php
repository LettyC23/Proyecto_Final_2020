<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/styleRegistrer.css' />
</head>
<body>
    
<div class="container mregister">
<div id="login">
<h1>Registrar</h1>
<form name="registerform" id="registerform" method="POST" action="../Modelos/procesar_altas_usuarios.php">
<p>
<label for="user_login">Nombre Completo<br />
<input type="text" name="caja_nombre_completo" id="caja_nombre_completo" class="input" size="32" value="" /></label>
</p>

<p>
<label for="user_pass">E-mail<br />
<input type="email" name="caja_email" id="caja_email" class="input" value="" size="32" /></label>
</p>

<p>
<label for="user_pass">Nombre De Usuario<br />
<input type="text" name="caja_nombre_usuario" id="caja_nombre_usuario" class="input" value="" size="20" /></label>
</p>

<p>
<label for="user_pass">Contraseña<br />
<input type="password" name="caja_password" id="caja_password" class="input" value="" size="32" /></label>
</p>

<p class="submit">
<input type="submit" name="register" id="register" class="button" value="Registrar" />
</p>

<p class="regtext">Ya tienes una cuenta? <a href="pagina_iniciarSesion.html" >Entra Aquí!</a>!</p>
</form>

</div>
</div>
     </form>

</div>
</body>
</html>
