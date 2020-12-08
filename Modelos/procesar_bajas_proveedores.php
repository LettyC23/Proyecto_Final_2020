<?php

  include('../Controladores/ProveedorDAO.php');

  //validacion datos

  $aDAO = new ProveedorDAO();

  $nc= $_GET['id'];
  $aDAO->eliminarProveedor($nc);

  header('location:../Vista/formulario_proveedores.php');
?>