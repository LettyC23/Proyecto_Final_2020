<?php

  include('../Controladores/ProductoDAO.php');
  //validacion de datos

  $id = $_GET['id'];
  $descripcion = $_POST['caja_editar_descripcion_producto'];
  $precio = $_POST['caja_editar_precio'];
  $stock = $_POST['caja_editar_existencias'];
  $id_producto = $_REQUEST['select_editar_tipo_producto'];
  $id_proveedor = $_REQUEST['select_editar_proveedor'];

  $aDAO = new productoDAO();

  $aDAO->modificarProducto($id, $descripcion, $precio, $stock, $id_producto, $id_proveedor);



?>