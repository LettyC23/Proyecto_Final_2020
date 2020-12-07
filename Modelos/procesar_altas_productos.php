<?php
  session_start();
  include('../Controladores/ProductoDAO.php');
  //validacion de datos

  $id = 0;
  $desc = $_POST['caja_descripcion_producto'];
  $precio = $_POST['caja_precio'];
  $stock = $_POST['caja_existencias'];
  $idproducto = $_REQUEST['select_tipo_producto'];
  $idproveedor = $_REQUEST['select_proveedor'];
  
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