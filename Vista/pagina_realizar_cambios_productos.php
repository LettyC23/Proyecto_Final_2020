<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Productos</title>
    <link rel="stylesheet" type="text/css" href="../Vista/Scripts/estilos/styleProducts.css"  >
</head>
<body class="body_edit_products">
   
    <div class="mlogin">
        <form form method="POST" action="../Vista/pagina_productos.php">
        <div id="login">
            <h1> Editar Producto </h1>
            
                <div >
                    <div class="left" >
                   <label>Descripción</label>
                    <br>
                    <input type="text"  id="caja_descripcion_producto" name="caja_descripcion_producto"/>
                </div>
                <div class="left">
                    <label>Precio </label>
                    <br>
                    <input type="text" size="9" id="caja_precio" name="caja_precio"/>
                </div>
                 
                <div class="left"> 
                    <label> Existencias </label>
                    <br>
                    <input type="text" size="10" id="caja_existencias" name="caja_existencias"/>
                </div>
                    
                <div class="left">
                    <label> Tipo de producto </label>
                    <br>
                    <select id="inputState" class="form-control" name="select_tipo_producto">
                        <option selected>Elige tipo de producto</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                </div>
               
                <div  >
                &emsp;&emsp;<label> Proveedor </label>
                    <br>
                    &emsp;&emsp;<select id="inputState" class="form-control" name="select_proveedor">
                        <option selected>Elige proveedor</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                      <br>
                      <br>
                      <br>
                      <button class="button" href="../Vista/pagina_productos.php" type="submit">Guardar producto</button>
                      <br>
                </div>      
     
            </form>
        
        </div>
                 
</body>
</html>