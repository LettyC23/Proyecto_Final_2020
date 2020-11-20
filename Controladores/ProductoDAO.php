<?php

include('conexion_bd.php');

class ProductoDAO{
    private $conexion;

      public function __construct(){
          $this->conexion = new ConexionBD();
      }
      
      //--------------------------------------- ALTAS -------------------------------------------

      public function agregarProducto($nc, $n, $pa, $sa, $e, $s, $c){
        $sql= "INSERT INTO Productos ('DescripcionProducto','Precio','stock','FK_id_TipoProducto','FK_id_Proveedor') 
        VALUES('$descripcion','$precio','$stock','$idproducto', $idproveedor);";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            echo("<script> alert('Agregado con Exito')</script>");
            //header('location:../vista/formulario_altas.php');
            //echo "PREFECTO, CASI SOY ISC =)";
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//agregar
}

?>