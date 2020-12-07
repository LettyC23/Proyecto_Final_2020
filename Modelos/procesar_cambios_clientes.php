<?php

  include('../Controladores/ClienteDAO.php');
  //validacion de datos

  $id = $_GET['id'];
  $nombre = $_POST['caja_editar_nombre_cliente'];
  $direccion = $_POST['caja_editar_direccion_cliente'];
  $telefono = $_POST['caja_editar_telefono_cliente'];
  $correo = $_POST['caja_editar_correo_cliente'];
  

  $aDAO = new ClienteDAO();

  $aDAO->modificarCliente($id, $nombre, $direccion, $telefono, $correo);

  header('location:../Vista/formulario_clientes.php');
  
  

?>