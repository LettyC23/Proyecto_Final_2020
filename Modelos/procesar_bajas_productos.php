<?php

  include('../Controladores/ProductoDAO.php');

  //validacion datos

  $aDAO = new productoDAO();

  $nc= $_GET['nc'];
  $aDAO->eliminarProducto($nc);

  header('location:../Vista/formulario_productos.php');
?>