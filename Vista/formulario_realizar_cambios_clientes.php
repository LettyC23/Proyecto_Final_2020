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
                $direccion = $_GET['d'];;
                $telefono = $_GET['t'];;
                $correo = $_GET['c'];
                
                
            echo "    <div class='mlogin'>
            <form form method='POST' action='../Modelos/procesar_cambios_clientes.php?id=$id'>
            <div id='login'>
            
            <h1> Editar Producto </h1>
            
            <h6>id Producto <input type='text' size='2' id='caja_editar_id_cliente'  name='caja_editar_id_cliente' disabled='disabled' value='$id'></h6>
                    
                   
                <div >
                    <div class='left' >
                   <label for='inputEmail4'>Nombre Cliente</label>
                    <br>
                    <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_nombre_cliente' required value='$nombre'>
                    </div>
                <div class='left'>
                    <label>Dirección </label>
                    <br>
                    <input type='text' size='9' id='caja_editar_precio' name='caja_editar_direccion_cliente'requrired value='$direccion'/>
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
               
               
                      <br>
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