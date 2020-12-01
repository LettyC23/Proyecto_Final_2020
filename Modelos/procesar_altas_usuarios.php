<?php

  include('../Controladores/UsuarioDAO.php');
  //validacion de datos

  $id = 0;
  $nombreUsuario = $_POST['caja_nombre_completo'];
  $correo = $_POST['caja_email'];
  $nombreDeUsuario = $_POST['caja_nombre_usuario'];
  $contraseña = $_POST['caja_password'];
  

  $usuarioDAO = new UsuarioDAO();

  $usuarioDAO->agregarUsuario($id, $nombreUsuario, $correo, $nombreDeUsuario, $contraseña);




?>