<?php

  include('../Controladores/ProveedorDAO.php');
  //validacion de datos

  $id = $_GET['id'];
  $nombre = $_POST['caja_editar_nombre_proveedor'];
  $empresa = $_POST['caja_editar_empresa_proveedor'];
  $direccion = $_POST['caja_editar_direccion_proveedor'];
  $telefono = $_POST['caja_editar_telefono_proveedor'];
  
  

  $aDAO = new ProveedorDAO();

  $aDAO->modificarProveedor($id, $nombre, $empresa, $direccion, $telefono);

  header('location:../Vista/formulario_proveedores.php');
  
  

?>