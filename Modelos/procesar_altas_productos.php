<?php

  include('../Controladores/ProductoDAO.php');
  //validacion de datos

  $id = 0;
  $desc = $_POST['caja_descripcion_producto'];
  $precio = $_POST['caja_precio'];
  $stock = $_POST['caja_existencias'];
  $idproducto = 1;
  $idproveedor = 1;
  

  $productoDAO = new productoDAO();

  $productoDAO->agregarProducto($id, $desc, $precio, $stock, $idproducto, $idproveedor);




?>