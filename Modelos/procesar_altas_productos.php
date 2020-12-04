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
  
  $datos_validos = false;

  if($idproducto==0 ){
    $_SESSION['errorIdProducto'] = "*Selecciona tipo de producto";
    $_SESSION['datoIdProvedor'] = $idproducto;
  }

  if($idproveedor==0){
    $_SESSION['errorIdProvedor'] = "*Selecciona un proveedor";
    $_SESSION['datoIdProvedor'] = $idproveedor;
  }
  
  
  $_SESSION['datoDescripcion'] = $desc;
  $_SESSION['datoPrecio'] = $precio;
  $_SESSION['datoStock'] = $stock; 
  
    $productoDAO = new productoDAO();
    $productoDAO->agregarProducto($id, $desc, $precio, $stock, $idproducto, $idproveedor);
 
    header('location../Vista/pagina_productos.php');
  
  
  
?>