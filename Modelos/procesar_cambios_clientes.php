<?php

  include('../Controladores/ClienteDAO.php');
  //validacion de datos

  $id = $_GET['id'];
  $nombre = $_POST['caja_editar_nombre_cliente'];
  $primerap = $_POST['caja_editar_primer_ap_cliente'];
  $segundoap = $_POST['caja_editar_segundo_ap_cliente'];
  $calle = $_POST['caja_editar_calle_cliente'];
  $numero = $_POST['caja_editar_numero_cliente'];
  $colonia = $_POST['caja_editar_colonia_cliente'];
  $estado = $_POST['caja_editar_estado_cliente'];
  $telefono = $_POST['caja_editar_telefono_cliente'];
  $correo = $_POST['caja_editar_correo_cliente'];
  

  $aDAO = new ClienteDAO();

  $aDAO->modificarCliente($id, $nombre, $primerap, $segundoap, $calle, $numero, $colonia, $estado, $telefono, $correo);

  header('location:../Vista/formulario_clientes.php');
  
  

?>