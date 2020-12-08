<?php
  session_start();
  include('../Controladores/ProductoDAO.php');
  //validacion de datos

  $id = 0;
  $nombreProveedor = $_POST['caja_nombre_proveedor'];
  $nombreEmpresa = $_POST['caja_nombre_empresa_proveedor'];
  $Direccion = $_POST['caja_direccion_proveedor'];
  $Telefono = $_POST['caja_telefono_proveedor'];
  
  $datos_validos = true;
  if(!ctype_alpha($desc)){
    $_SESSION['errorDes'] = "Solo letras";
    $_SESSION['datoDes'] = $desc;
    $datos_validos = false;
    $_SESSION['datoDescripcion'] = $desc;
    $_SESSION['datoPrecio'] = $precio;
    $_SESSION['datoStock'] = $stock; 
  }
  if($idproducto==0 ){
    $_SESSION['errorIdProducto'] = "*Selecciona tipo de producto";
    $_SESSION['datoIdProvedor'] = $idproducto;
    $datos_validos = false;
    $_SESSION['datoDescripcion'] = $desc;
    $_SESSION['datoPrecio'] = $precio;
    $_SESSION['datoStock'] = $stock; 
  }

  if($idproveedor==0){
    $_SESSION['errorIdProvedor'] = "*Selecciona un proveedor";
    $_SESSION['datoIdProvedor'] = $idproveedor;
    $datos_validos = false;
    $_SESSION['datoDescripcion'] = $desc;
    $_SESSION['datoPrecio'] = $precio;
    $_SESSION['datoStock'] = $stock; 
  }
  
  header('location:../Vista/formulario_productos.php');
  if($datos_validos==true){
    $productoDAO = new productoDAO();
    $productoDAO->agregarProducto($id, $desc, $precio, $stock, $idproducto, $idproveedor);
 
    header('location:../Vista/formulario_productos.php');
  }
  
  
?>