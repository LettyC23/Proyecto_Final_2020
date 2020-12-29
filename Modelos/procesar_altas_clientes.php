<?php
  session_start();
  include('../Controladores/ClienteDAO.php');
  //validacion de datos

  $id = 0;
  $nombre = $_POST['caja_nombre_cliente'];
  $primerap = $_POST['caja_appaterno_cliente'];
  $segundoap = $_POST['caja_apmaterno_cliente'];
  $calle = $_POST['caja_calle_cliente'];
  $numero = $_POST['caja_numero_cliente'];
  $colonia = $_POST['caja_colonia_cliente'];
  $estado = $_POST['caja_estado_cliente'];
  $telefono = $_POST['caja_telefono_cliente'];
  $correo = $_POST['caja_correo_cliente'];
  
  $datos_validos = true;
  if(!ctype_alpha($nombre)){
    $_SESSION['errorNom'] = "Solo letras";
    $_SESSION['datoNom'] = $nombre;
    $datos_validos = false;
    $_SESSION['datoPAp'] = $primerap;
    $_SESSION['datoSAp'] = $segundoap;
  $_SESSION['datoTel'] = $telefono;
  $_SESSION['datoCalle'] = $calle;
  $_SESSION['datoNumero'] = $numero;
  $_SESSION['datoColonia'] = $colonia;
  $_SESSION['datoEstado'] = $estado;
  $_SESSION['datoCorreo'] = $correo;
  }
 
  if(strlen($telefono)!=10 ){
    
    $_SESSION['errorTel'] = "Deben ser 10 dígitos";
    $_SESSION['datoTel'] = $telefono;
    $datos_validos = false;
    $_SESSION['datoPAp'] = $primerap;
    $_SESSION['datoSAp'] = $segundoap;
  $_SESSION['datoTel'] = $telefono;
  $_SESSION['datoCalle'] = $calle;
  $_SESSION['datoNumero'] = $numero;
  $_SESSION['datoColonia'] = $colonia;
  $_SESSION['datoEstado'] = $estado;
  $_SESSION['datoTel'] = $telefono;
  $_SESSION['datoCorreo'] = $correo;
  }


  
  header('location:../Vista/formulario_clientes.php');
  

if($datos_validos==true){
    $productoDAO = new ClienteDAO();
    $productoDAO->agregarCliente($id, $nombre, $primerap, $segundoap, $calle, $numero, $colonia, $estado, $telefono, $correo);
 
    header('location:../Vista/formulario_clientes.php');}

  
?>