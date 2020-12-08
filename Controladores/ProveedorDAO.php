<?php

include('../Conexion_BD/conexion_bd.php');

class ProveedorDAO{
    private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }
      
      //--------------------------------------- ALTAS -------------------------------------------

      public function agregarProveedor($id, $nombre, $empresa, $direccion, $telefono){
        $sql= "INSERT INTO Proveedores VALUES ('$id', '$nombre','$empresa','$direccion','$telefono');";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
           // echo("<script> alert('Agregado con Exito')</script>");
            header('location:../Vista/formulario_proveedores.php.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
           
            //echo("<script> alert('Seleccione Tipo de producto y Proveedor')</script>");
            //header('location:../Vista/pagina_clientes.php');
           // echo mysqli_error($this->conexion->getConexion());
            
        }
    }//agregar



    //--------------------------------------- BAJAS -------------------------------------------
    public function eliminarProveedor($nc){
        $sql= "DELETE FROM Proveedores WHERE id_Proveedor ='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../Vista/formulario_proveedores.php');
        }else{
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            //echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar


    //----------------------------- MODIFICAR ---------------------------------

    public function modificarProveedor($id, $nombre, $empresa, $direccion, $telefono){
        $sql= "UPDATE Proveedores SET NombreProveedor='$nombre',NombreEmpresa='$empresa',Direccion='$direccion',Telefono='$telefono'
         WHERE id_Proveedor='$id';";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../Vista/formulario_proveedores.php');
        }else{
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            //echo mysqli_error($this->conexion->getConexion());
            //echo $sql;
        }
    }//modificar


  
}

?>