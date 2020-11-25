<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/style_dashboard.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/styleProducts.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts_js/inicio.js' />

    
</head>
<body class="main">
    <div class="nav">
        <a href="#" class="active" >INICIO</a> 
        <a href="#" class="right" ><img src="img/cerrar-sesion.png"></a> 
        
    </div>

    <section>
        <aside>
            <div class="nav">
                <nav>
                <ul>
                <li><a href="pagina_dashboard.html"> <img src="img/pagina-principal.png">&emsp; Inicio</a></li>
                    <li><a href="pagina_productos.php"> <img src="img/store.png">  Productos</a></li>
                    <li><a href="pagina_clientes.html"> <img src="img/user (1).png"> &emsp;Clientes</a></li>
                    <li><a href="#"> <img src="img/user (1).png">  Usuarios</a></li>
                    <li><a href="#"> <img src="img/delivery-truck (1).png"> Proveedores</a></li>
                    <li><a href="#"> <img src="img/configuracion.png">&emsp; Ajustes</a></li>
                    <li><a href="#">Salir</a></li>
                </ul>
            </nav>
        </div>
        </aside>

        <section class="main-productos">

            <!--------------------------------Formulario altas------------------------------------->
            <form form method="POST" action="../Modelos/procesar_altas_productos.php">
                <div class="simple_form">
                    <h2>Administrar Productos</h2>
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
                      &emsp;&emsp;<button class="button" type="submit">Guardar producto</button>
                      <br>
                      <br>
                      <br>
                </div>      
                      
             
                  
            </form>
            <br>
            <form method="POST" action="../Modelos/procesar_consultas_productos.php">
            <div class="div-search">
                    
                    &emsp;&emsp;<input type="text" size="50" id="caja_buscar_producto" name="caja_buscar_producto"/>
                    <br><br><br><br>
                </div>
            </form>


               <!--------------------------------TABLA PRODUCTOS------------------------>
               <table id="customers">

                <tr> 
                    <th>id_Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Exisencias</th>
                    <th>Tipo de Producto</th>
                    <th>Proveedor </th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>


                <?php

        include('../Conexion_BD/conexion_bd.php');

        $con = new ConexionBD();
        $conexion = $con->getConexion();

        $sql = "SELECT * FROM Productos";

        $res = mysqli_query($conexion, $sql);

        //var_dump($res);

        if(mysqli_num_rows($res)>0 ){
          while($fila = mysqli_fetch_assoc($res)){
                printf("<tr><td>".$fila['id_Producto']."</td>".
                "<td>".$fila['DescripcionProducto']."</td>".
                "<td>".$fila['Precio']."</td>".
                "<td>".$fila['Stock']."</td>".
                "<td>".$fila['FK_id_TipoProducto']."</td>".
                "<td>".$fila['FK_id_Proveedor']."</td>".
                "<td> <a href='../Vista/pagina_realizar_cambios_productos.php?nc=%s&dp=%s&p=%s&s=%s'> <img src='img/edit.png'> </a>" ." </td>".
                "<td> <a href='../Modelos/procesar_bajas_productos.php?nc=%s'> <img src='img/trash-can.png'> </a> </td> 
                </tr>", $fila['id_Producto'], $fila['DescripcionProducto'],  $fila['Precio'],  $fila['Stock'], $fila['id_Producto']
              
            );
          }
        }else{
          //echo ('no hay datos');
        }


        

      ?>

            </table>



            </div>
            
         

        </section>
    </section>
    <script>
        $(document).ready(function(){
            var table = $('#customers').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
        });
    </script>    
   


</body>
</html>