<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Productos</title>
    <link rel="stylesheet" type="text/css" href="../Vista/Scripts/estilos/styleProducts.css"  >
</head>
<body class="body_edit_products">
   

            <?php


                include('../Controladores/ProductoDAO.php');
                //validacion de datos
                $aDAO = new ProductoDAO();

                $id = $_GET['nc'];
                $descripcion = $_GET['dp'];
                $precio = $_GET['p'];;
                $stock = $_GET['s'];;
                $id_producto = 1;
                $id_proveedor = 1;

                
                
            echo "    <div class='mlogin'>
            <form form method='POST' action='../Modelos/procesar_cambios_productos.php?id=$id'>
            <div id='login'>
            
            <h1> Editar Producto </h1>
            
            <h6>id Producto <input type='text' size='2' id='caja_editar_id_producto'  name='caja_editar_id_producto' disabled='disabled' value='$id'></h6>
                    
                   
                <div >
                    <div class='left' >
                   <label for='inputEmail4'>Descripción</label>
                    <br>
                    <input type='text' class='form-control' id='inputEmail4'  name='caja_editar_descripcion_producto' value='$descripcion'>
                    </div>
                <div class='left'>
                    <label>Precio </label>
                    <br>
                    <input type='text' size='9' id='caja_editar_precio' name='caja_editar_precio' value='$precio'/>
                </div>
                 
                <div class='left'> 
                    <label> Existencias </label>
                    <br>
                    <input type='text' size='10' id='caja_editar_existencias' name='caja_editar_existencias' value='$stock'/>
                </div>
                    
                <div class='left'>
                    <label> Tipo de producto </label>
                    <br>
                    <select id='inputState' class='form-control' name='select_editar_tipo_producto' values='$id_producto'>
                        <option selected>Elige tipo de producto</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                </div>
               
                <div  >
                &emsp;&emsp;<label> Proveedor </label>
                    <br>
                    &emsp;&emsp;<select id='inputState' class='form-control' name='select_editar_proveedor' value='$id_proveedor'>
                        <option selected>Elige proveedor</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
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