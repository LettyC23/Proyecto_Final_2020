<?php
  session_start();
include('../Conexion_BD/conexion_bd_usuarios.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    if($conexion){
        $usuario = $_POST['caja_usuario'];
        $contraseña = $_POST['caja_contraseña'];

        $usuario_cifrado =SHA1($usuario);
        $contraseña_cifrado = SHA1($contraseña);

    $sql = "SELECT * FROM Usuarios WHERE NombreDeUsuario='$usuario_cifrado' AND Contrasenia='$contraseña_cifrado'";
   
    $res = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($res)>0){
      
        $_SESSION['autenticado'] = true;
        $_SESSION['usuario'] = $usuario_cifrado;
        $_SESSION['contraseña'] = $contraseña_cifrado;
       // $_SESSION['e'] = "Usuario o contraseña incorrectos!!!";
        header('location:../Vista/formulario_dashboard.php');
        
    }else{
        $_SESSION['autenticado'] = false;
        $_SESSION['e'] = "Usuario o contraseña incorrectos!!!";
       header('location:../Vista/formulario_IniciarSesion.php');
    }
    

}
?>