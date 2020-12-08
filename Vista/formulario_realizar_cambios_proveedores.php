<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../Vista/formulario_IniciarSesion.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Proveedores</title>
    <link rel="stylesheet" type="text/css" href="../Vista/Scripts/estilos/styleProducts.css"  >
</head>
<body class="body_edit_products">
   

            <?php


                include('../Controladores/ProveedorDAO.php');
                //validacion de datos
                $aDAO = new ProveedorDAO();

                $id = $_GET['id'];
                $nombre = $_GET['np'];
                $empresa = $_GET['ne'];
                $direccion = $_GET['d'];;
                $telefono = $_GET['t'];
                
            echo "    <div class='mlogin'>
            <form form method='POST' action='../Modelos/procesar_cambios_proveedores.php?id=$id'>
            <div id='login'>
            
            <h1> Editar Proveedor </h1>
            
            <h6>id Proveedor <input type='text' size='2' id='caja_editar_id_proveedor'  name='caja_editar_id_proveedor' disabled='disabled' value='$id'></h6>
                    
                   
                <div >
                    <div class='left' >
                   <label for='inputEmail4'>Nombre Proveedor</label>
                    <br>
                    <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_nombre_proveedor' required value='$nombre'>
                    </div>
                <div class='left'>
                    <label>Nombre de la empresa </label>
                    <br>
                    <input type='text' size='9' id='caja_editar_empresa_proveedor' name='caja_editar_empresa_proveedor'requrired value='$empresa'/>
                </div>
                 
                <div class='left'> 
                    <label> Dirección </label>
                    <br>
                    <input type='text' size='10' id='caja_editar_direccion_proveedor' name='caja_editar_direccion_proveedor' required value='$direccion'/>
                </div>
                    
                <div class='left'> 
                <label> Teléfono</label>
                <br>
                <input type='text' size='10' id='caja_editar_telefono_proveedor' name='caja_editar_telefono_proveedor' required value='$telefono'/>
                </div>
               
               
                      <br>
                      <br>
                      <br>
                      <button class='button' href='../Vista/formulario_proveedores.php' type='submit'>Guardar producto</button>
                      <br>"

                      ?>
                </div>      
     
            </form>
        
        </div>
                 
</body>
</html>