<?php
  session_start();
  include('../Controladores/ClienteDAO.php');
  //validacion de datos

  $id = 0;
  $nombre = $_POST['caja_nombre_cliente'];
  $direccion = $_POST['caja_direccion_cliente'];
  $telefono = $_POST['caja_telefono_cliente'];
  $correo = $_POST['caja_correo_cliente'];
  
  $datos_validos = true;
  if(!ctype_alpha($nombre)){
    $_SESSION['errorNom'] = "Solo letras";
    $_SESSION['datoNom'] = $nombre;
    $datos_validos = false;
    $_SESSION['datoNom'] = $nombre;
  $_SESSION['datoTel'] = $telefono;
  $_SESSION['datoDir'] = $direccion;
  $_SESSION['datoCorreo'] = $correo;
  }
 
  if(strlen($telefono)!=10 ){
    
    $_SESSION['errorTel'] = "Deben ser 10 dígitos";
    $_SESSION['datoTel'] = $telefono;
    $datos_validos = false;
    $_SESSION['datoNom'] = $nombre;
  $_SESSION['datoTel'] = $telefono;
  $_SESSION['datoDir'] = $direccion;
  $_SESSION['datoCorreo'] = $correo;
  }


  
  header('location:../Vista/formulario_clientes.php');
  

if($datos_validos==true){
    $productoDAO = new ClienteDAO();
    $productoDAO->agregarCliente($id, $nombre, $direccion, $telefono, $correo);
 
    header('location:../Vista/formulario_clientes.php');}

  
?>