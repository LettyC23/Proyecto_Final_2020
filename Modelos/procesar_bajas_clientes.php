<?php

  include('../Controladores/ClienteDAO.php');

  //validacion datos

  $aDAO = new ClienteDAO();

  $nc= $_GET['id'];
  $aDAO->eliminarCliente($nc);

  header('location:../Vista/formulario_clientes.php');
?>