<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/style_dashboard.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts/estilos/style_products.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts_js/inicio.js' />

    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 90%;
        }
        #customers td, #customers th{
          border: 1px solid #ddd;
          padding:8px;
        }

        #customers tr:nth-child(even){background-color:#f2f2f2;}

        #customers tr:hover {background-color: #ddd}

        #customers th{
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
    </style>
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
                    <li><a href="pagina_productos.html"> <img src="img/carrito-de-compras.png">  Productos</a></li>
                    <li><a href="pagina_clientes.html"> <img src="img/configuracion.png"> &emsp;Clientes</a></li>
                    <li><a href="#"> <img src="img/configuracion.png">  Usuarios</a></li>
                    <li><a href="#"> <img src="img/configuracion.png"> Proveedores</a></li>
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
                      &emsp;&emsp;<button type="submit">Guardar producto</button>
                      <br>
                      <br>
                      <br>
                </div>      
                      
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
                    <th>Acciones</th>
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
                "<td> <a href='../Modelos/procesar_bajas_productos.php?nc=%s'> Eliminar q </a> </td> </tr>", $fila['id_Producto']
              );
          }
        }else{
          echo ('no hay datos');
        }

      ?>

            </table>



            </div>
            
         

        </section>
    </section>
    
   


</body>
</html>