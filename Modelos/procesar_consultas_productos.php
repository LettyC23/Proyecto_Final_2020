<?php
include('../Conexion_BD/conexion_bd.php');

$parametro = $_POST['caja_buscar_producto'];
$sql="SELECT * FROM Productos WHERE id_Producto LIKE '%$parametro%'";


$con = new ConexionBD();
$conexion = $con->getConexion();

$res = mysqli_query($conexion, $sql);

//var_dump($resultado);
if(mysqli_num_rows($res)>0){
    //mysqli_fetch_row
    
    ?> 
    <table id="customers">
      <tr> <th>id_Producto</th> 
           <th>Descripción</th> 
           <th>Precio</th> 
           <th>Existencias</th>
           <th>Tipo de Producto</th> 
           <th>Proveedor</th> 
           <th>Acciones </th> 
        </tr>

    <?php

    //var_dump($res);

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
      //header('location:../Vista/pagina_productos.php');
    }else{
      //echo ('no hay datos');
    }


?>