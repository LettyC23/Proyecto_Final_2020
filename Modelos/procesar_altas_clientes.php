<?php
  session_start();
  include('../Controladores/ClienteDAO.php');
  //validacion de datos

  $id = 0;
  $nombre = $_POST['caja_nombre_cliente'];
  $direccion = $_POST['caja_direccion_cliente'];
  $telefono = $_POST['caja_telefono_cliente'];
  $correo = $_POST['caja_correo_cliente'];
  
 

    $productoDAO = new ClienteDAO();
    $productoDAO->agregarCliente($id, $nombre, $direccion, $telefono, $correo);
 
    header('location:../Vista/formulario_clientes.php');
  
  
  
?>