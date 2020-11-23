<?php

include('../Conexion_BD/conexion_bd.php');

class ProductoDAO{
    private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }
      
      //--------------------------------------- ALTAS -------------------------------------------

      public function agregarProducto($id, $descripcion, $precio, $stock, $id_producto, $id_proveedor){
        $sql= "INSERT INTO Productos VALUES ('$id', '$descripcion','$precio','$stock','$id_producto', '$id_proveedor');";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            echo("<script> alert('Agregado con Exito')</script>");
            header('location:../vista/pagina_productos.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//agregar



    //--------------------------------------- BAJAS -------------------------------------------
    public function eliminarProducto($nc){
        $sql= "DELETE FROM Productos WHERE id_Producto ='$nc'";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            echo("<script> alert('Eliminado con EXITO')</script>");
            header('location:../vista/pagina_productos.php');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar
}

?>