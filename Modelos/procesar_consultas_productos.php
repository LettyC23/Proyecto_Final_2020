<?php
include('../Controladores/ProductoDAO.php');

$parametro = $_POST['caja_buscar_producto'];

$productoDAO = new productoDAO();

$productoDAO->filtrarProducto($parametro);

?>