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
            header('location:../vista/pagina_productos.php');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }//eliminar


    //----------------------------- MODIFICAR ---------------------------------

    public function modificarProducto($id, $descripcion, $precio, $stock, $id_producto, $id_proveedor){
        $sql= "UPDATE Productos SET DescripcionProducto='$descripcion',Precio='$precio',Stock='$stock',
        FK_id_TipoProducto='$id_producto',FK_id_Proveedor='$id_proveedor' WHERE id_Producto='$id';";
        if(mysqli_query($this->conexion->getConexion(),$sql)  ){
            header('location:../vista/pagina_productos.php');
        }else{
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA??? =(";
            echo mysqli_error($this->conexion->getConexion());
            echo $sql;
        }
    }//modificar


    //----------------------------- BUSCAR ---------------------------------

    public function filtrarProducto($parametro){
      
      
        $sql1="SELECT * FROM Productos WHERE id_Producto LIKE '%$parametro%'";
            
            
        $con = new ConexionBD();
        $conexion = $con->getConexion();
        
        $res = mysqli_query($conexion, $sql1);
        
        
        //var_dump($res);
        if(mysqli_num_rows($res)>0 ){
          while($fila = mysqli_fetch_assoc($res)){
                printf("<tr><td>".$fila['id_Producto']."</td>".
                "<td>".$fila['DescripcionProducto']."</td>".
                "<td>".$fila['Precio']."</td>".
                "<td>".$fila['Stock']."</td>".
                "<td>".$fila['FK_id_TipoProducto']."</td>".
                "<td>".$fila['FK_id_Proveedor']."</td>".
                "<td> <a href='../Vista/pagina_realizar_cambios_productos.php?nc=%s&dp=%s&p=%s&s=%s'> <img src='img/edit.png'> </a>" ." </td>".
                "<td> <a href='../Modelos/procesar_bajas_productos.php?nc=%s'> <img src='img/trash-can.png'> </a> </td> 
                </tr>", $fila['id_Producto'], $fila['DescripcionProducto'],  $fila['Precio'],  $fila['Stock'], $fila['id_Producto']
              
            );
        }
    }else{
      echo ('No se encontro resultado de la busqueda');
    }

    }//buscar
}

?>