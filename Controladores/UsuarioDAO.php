<?php

include('../Conexion_BD/conexion_bd_usuarios.php');

class UsuarioDAO{
    private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }
      
      //--------------------------------------- ALTAS -------------------------------------------

      public function agregarUsuario($id, $nombreUsuario, $correo, $nombreDeUsuario, $contraseña){
        $sql= "INSERT INTO Usuarios VALUES ('$id', '$nombreUsuario','$correo',SHA1('$nombreDeUsuario'),SHA1('$contraseña'));";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            //echo("<script> alert('Agregado con Exito')</script>");
            header('location:../Vista/formulario_IniciarSesion.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//agregar



    //--------------------------------------- BAJAS -------------------------------------------
    public function eliminarUsuario($nc){
        $sql= "DELETE FROM Usuarios WHERE id_Producto ='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../Vista/pagina_IniciarSesion.html');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar


    //----------------------------- MODIFICAR ---------------------------------

    public function modificarUsuario($id, $nombreUsuario, $correo, $nombreDeUsuario, $contraseña){
        $sql= "UPDATE Usuarios SET NombreUsuario='$nombreUsuario',Correo='$correo',NombreDeUsuario='$nombreDeUsuario',
        Contraseña='$contraseña' WHERE id_Usuario='$id';";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../vista/pagina_productos.php');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
            echo $sql;
        }
    }//modificar


    
}

?>