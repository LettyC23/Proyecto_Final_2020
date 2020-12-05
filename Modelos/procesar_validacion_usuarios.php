<?php

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
        session_start();
        $_SESSION['autenticado'] = true;
        $_SESSION['usuario'] = $usuario;
        header('location../Vista/formulario_dashboard.php');
        echo"si";
    }else{
        header('location../Vista/formulario_IniciarSesion.php');
    }

}
?>