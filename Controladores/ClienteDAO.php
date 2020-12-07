<?php

include('../Conexion_BD/conexion_bd.php');

class ClienteDAO{
    private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }
      
      //--------------------------------------- ALTAS -------------------------------------------

      public function agregarCliente($id, $nombre, $direccion, $telefono, $correo){
        $sql= "INSERT INTO Clientes VALUES ('$id', '$nombre','$direccion','$telefono','$correo');";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
           // echo("<script> alert('Agregado con Exito')</script>");
            header('location:../Vista/pagina_clientes.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
           
            //echo("<script> alert('Seleccione Tipo de producto y Proveedor')</script>");
            header('location:../Vista/pagina_clientes.php');
            echo mysqli_error($this->conexion->getConexion());
            
        }
    }//agregar



    //--------------------------------------- BAJAS -------------------------------------------
    public function eliminarcliente($nc){
        $sql= "DELETE FROM Clientes WHERE id_Cliente ='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../Vista/pagina_clientes.php');
        }else{
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            //echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar


    //----------------------------- MODIFICAR ---------------------------------

    public function modificarCliente($id, $nombre, $direccion, $telefono, $correo){
        $sql= "UPDATE Clientes SET NombreCliente='$nombre',Direccion='$direccion',Telefono='$telefono',
        Correo='$correo' WHERE id_Cliente='$id';";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../Vista/pagina_clientes.php');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
            echo $sql;
        }
    }//modificar


  
}

?>