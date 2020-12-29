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
    <title> Editar Clientes</title>
    <link rel="stylesheet" type="text/css" href="../Vista/Scripts/estilos/styleProducts.css"  >
</head>
<body class="body_edit_products">
   

            <?php


                include('../Controladores/ClienteDAO.php');
                //validacion de datos
                $aDAO = new ClienteDAO();

                $id = $_GET['id'];
                $nombre = $_GET['nc'];
                $primerap = $_GET['pa'];
                $segundoap = $_GET['sa'];
                $calle = $_GET['ca'];;
                $numero = $_GET['n'];;
                $colonia = $_GET['col'];;
                $estado = $_GET['e'];;
                $telefono = $_GET['t'];;
                $correo = $_GET['c'];
                
                
            echo "    <div class='mlogin'>
            <form form method='POST' action='../Modelos/procesar_cambios_clientes.php?id=$id'>
            <div id='login'>
            
            <h1> Editar Cliente </h1>
            
            <h6>id Producto <input type='text' size='2' id='caja_editar_id_cliente'  name='caja_editar_id_cliente' disabled='disabled' value='$id'></h6>
                    
                   
                <div >
                    <div class='left' >
                   <label for='inputEmail4'>Nombre </label>
                    <br>
                    <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_nombre_cliente' required value='$nombre'>
                    </div>
                    <div class='left' >
                    <label for='inputEmail4'>Primer Apellido</label>
                     <br>
                     <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_primer_ap_cliente' required value='$primerap'>
                     </div>
                     <div class='left' >
                    <label for='inputEmail4'>Segundo Apellido</label>
                     <br>
                     <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_segundo_ap_cliente' required value='$segundoap'>
                     </div>
                <div class='left'>
                    <label>Calle </label>
                    <br>
                    <input type='text' size='9' id='caja_editar_calle' name='caja_editar_calle_cliente'requrired value='$calle'/>
                </div>
                <div class='left' >
                <label for='inputEmail4'>Número</label>
                 <br>
                 <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_numero_liente' required value='$numero'>
                 </div>
                 <div class='left' >
                    <label for='inputEmail4'>Colonia</label>
                     <br>
                     <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_colonia_cliente' required value='$colonia'>
                     </div>
                     <div class='left' >
                    <label for='inputEmail4'>Estado</label>
                     <br>
                     <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_estado_cliente' required value='$estado'>
                     </div>
                <div class='left'> 
                    <label> Teléfono </label>
                    <br>
                    <input type='text' size='10' id='caja_editar_existencias' name='caja_editar_telefono_cliente' required value='$telefono'/>
                </div>
                    
                <div class='left'> 
                <label> Correo </label>
                <br>
                <input type='text' size='10' id='caja_editar_existencias' name='caja_editar_correo_cliente' required value='$correo'/>
                </div>
               
               
                      <br><br><br><br><br><br><br><br><br><br>
                      <br>
                      <br>
                      <button class='button' href='../Vista/pagina_productos.php' type='submit'>Guardar producto</button>
                      <br>"

                      ?>
                </div>      
     
            </form>
        
        </div>
                 
</body>
</html>