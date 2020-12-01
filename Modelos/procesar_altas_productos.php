<?php

  include('../Controladores/ProductoDAO.php');
  //validacion de datos

  $id = 0;
  $desc = $_POST['caja_descripcion_producto'];
  $precio = $_POST['caja_precio'];
  $stock = $_POST['caja_existencias'];
  $idproducto = $_REQUEST['select_tipo_producto'];
  $idproveedor = $_REQUEST['select_proveedor'];
  

  $productoDAO = new productoDAO();

  $productoDAO->agregarProducto($id, $desc, $precio, $stock, $idproducto, $idproveedor);




?>