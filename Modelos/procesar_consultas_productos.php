<?php

include('../Conexion_BD/conexion_bd.php');

$con = new ConexionBD();
$conexion = $con->getConexion();

$parametro = $_POST['caja_buscar_producto'];

$sql="SELECT * FROM Productos WHERE id_Producto LIKE '%$parametro%' or DescripcionProducto LIKE '%$parametro%' or Precio LIKE '%$parametro%' or Stock LIKE '%$parametro%' or FK_id_TipoProducto LIKE '%$parametro%' or FK_id_Proveedor LIKE '%$parametro%'";

$res = mysqli_query($conexion, $sql);

//var_dump($resultado);
if(mysqli_num_rows($res)>0){
    //mysqli_fetch_row
    require_once('../Vista/pagina_productos.php');
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
    
    while($fila=mysqli_fetch_assoc($res)){
        printf("<tr><td>".$fila['id_Producto']."</td>".
        "<td>".$fila['DescripcionProducto']."</td>".
        "<td>".$fila['Precio']."</td>".
        "<td>".$fila['Stock']."</td>".
        "<td>".$fila['FK_id_TipoProducto']."</td>".
        "<td>".$fila['FK_id_Proveedor']."</td>".
        "<td> <a href='pagina_404.html'><img src='img/edit.png'> </a> &emsp;  <a href='../Modelos/procesar_bajas_productos.php?nc=%s'> <img src='img/trash-can.png'> </a> </td> </tr>", $fila['id_Producto']
      
    );
    }
}else{
    echo ('No hay datos');
}

?>