<?php
  session_start();
  include('../Controladores/ProveedorDAO.php');
  //validacion de datos

  $id = 0;
  $nombre = $_POST['caja_nombre_proveedor'];
  $empresa = $_POST['caja_nombre_empresa_proveedor'];
  $direccion = $_POST['caja_direccion_proveedor'];
  $telefono = $_POST['caja_telefono_proveedor'];
  
 
    $productoDAO = new ProveedorDAO();
    $productoDAO->agregarProveedor($id, $nombre, $empresa, $direccion, $telefono);
 
    header('location:../Vista/formulario_proveedores.php');
  
  
  
?>