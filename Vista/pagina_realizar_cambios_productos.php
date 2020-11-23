<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    
<form form method="POST" action="../Modelos/procesar_altas_productos.php">
                <div class="simple_form">
                    <h2>Editar Producto</h2>
                    <br>
                    <div class="left">
                    &emsp;&emsp;&emsp;<label>Descripción</label>&emsp;
                    <br>
                    <input type="text"  id="caja_descripcion_producto" name="caja_descripcion_producto"/>
                </div>
                <div class="left">
                    &emsp;&emsp;<label>Precio </label>&emsp;
                    <br>
                    <input type="text" size="9" id="caja_precio" name="caja_precio"/>
                </div>
                 
                <div class="left"> 
                    &ensp;<label> Existencias </label>
                    <br>
                    <input type="text" size="10" id="caja_existencias" name="caja_existencias"/>
                </div>
                    
                <div class="left">
                    &emsp; <label> Tipo de producto </label>
                    <br>
                    <select id="inputState" class="form-control" name="select_tipo_producto">
                        <option selected>Elige tipo de producto</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>&emsp;&emsp;
                </div>
               
                <div  class="left">
                    &emsp;<label> Proveedor </label>
                    <br>
                    <select id="inputState" class="form-control" name="select_proveedor">
                        <option selected>Elige proveedor</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                      &emsp;&emsp;<button type="submit">Guardar producto</button>
                      <br>
                      <br>
                      <br>
                </div>   
</body>
</html>