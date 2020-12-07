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
    <title>Inicio</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../Vista/Scripts/estilos/style_dashboard.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='../Vista/Scripts/estilos/styleProducts.css' />
    
</head>
<body >
<div class="nav">
        <a href="#" class="active" >INICIO</a>
        <a href="formulario_cambios_usuarios.php" class="right" >Mi Cuenta &emsp;&emsp;</a>  
        <a href="../Modelos/cerrar_sesion.php" class="right" >Cerrar Sesión &emsp;&emsp;</a> 
        
    </div>
    <section class="main">
    <aside>
            <div class="nav">
                <nav>
                <ul>
                <li><a href="formulario_dashboard.php"> <img src="img/pagina-principal.png">&emsp; Inicio</a></li>
                    <li><a href="formulario_productos.php"> <img src="img/store.png">  Productos</a></li>
                    <li><a href="formulario_clientes.html"> <img src="img/user (1).png"> &emsp;Clientes</a>                    </li>
                    <li><a href="formulario_usuarios.php"> <img src="img/user (1).png">  Usuarios</a></li>
                    <li><a href="formulario_proveedores.php"> <img src="img/delivery-truck (1).png"> Proveedores</a></li>
                    <li><a href="#"> <img src="img/configuracion.png">&emsp; Ajustes</a></li>
                    
                </ul>
            </nav>
        </div>
        </aside>

        <section class="wrapper">
   
        <div class="wrapper" >
            <!--------------------------------Formulario altas------------------------------------->
            <form  id="formulario_productos" method="POST" action="../Modelos/procesar_altas_productos.php"  onsubmit="return validarFormularioProductos()">
                <div class="simple_form">
                    <h2>Administrar Productos</h2>
                    <br>
                    <div class="left">
                    &emsp;&emsp;&emsp;<label>Descripción</label>&emsp;
                    <br>
                    <input type="text"  id="caja_descripcion_producto" name="caja_descripcion_producto" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoDescripcion'])) {
                        echo $_SESSION['datoDescripcion']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoDescripcion']);
                        ?>" required >
                </div>
                <div class="left">
                    &emsp;&emsp;<label>Precio </label>&emsp;
                    <br>
                    <input type="number" size="9" id="caja_precio" name="caja_precio" required="" step="0.01" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoPrecio'])) {
                        echo $_SESSION['datoPrecio']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoPrecio']);
                        ?>">
                </div>
                 
                <div class="left"> 
                    &ensp;<label> Existencias </label>
                    <br>
                    <input type="number" size="10" id="caja_existencias" name="caja_existencias" required
                    value="<?php  
                     
                     if(isset($_SESSION['datoStock'])) {
                        echo $_SESSION['datoStock']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoStock']);
                        ?>">
                </div>
                    
                <div class="left">
                    &emsp; <label> Tipo de producto </label>
                    <br>
                    <select id="select_tipo_producto" class="form-control" name="select_tipo_producto" >
                        <option value="<?php  
                     
                     if(isset($_SESSION['datoIdProducto'])) {
                        echo $_SESSION['datoIdProducto']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoIdProducto']);
                        ?>" >Elige tipo de producto</option>
                        
                        <?php
                        include('../Conexion_BD/conexion_bd.php');

                        $con = new ConexionBD();
                        $conexion = $con->getConexion();
                
                        $sql = "SELECT id_TipoProducto FROM Tipo_Producto";
                        
                        $query = $conexion -> query($sql);
                        
                            while($valores = mysqli_fetch_array($query)){
                                echo '<option>'.$valores['id_TipoProducto'].'</option>';
                            }
                            
                        ?>
                      </select>&emsp;&emsp;
                      <br>
                      <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorIdProducto'])) {
                        echo $_SESSION['errorIdProducto']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorIdProducto']);
                        ?>
                        </span>
                        
                </div>
               
                <div  class="left">
                    &emsp;<label> Proveedor </label>
                    <br>
                    <select id="select_proveedor" class="form-control" name="select_proveedor">
                        <option value="0">Elige proveedor</option>
                        <?php
                        

                        $con = new ConexionBD();
                        $conexion = $con->getConexion();
                
                        $sql = "SELECT id_Proveedor FROM Proveedores";
                        
                        $query = $conexion -> query($sql);
                        
                            while($valores = mysqli_fetch_array($query)){
                                echo '<option>'.$valores['id_Proveedor'].'</option>';
                            }
                           
                        ?>
                      </select>
                      
                      <span style="color:red;">
                     <?php  
                        if(isset($_SESSION['errorIdProvedor'])) {
                        echo $_SESSION['errorIdProvedor']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorIdProvedor']);
                    ?>
                    </span>
                      
                      &emsp;&emsp;<button class="button" type="submit">Guardar producto</button>
                      <br>
                      <br>
                      <br>
                </div>      
                      
             
                  
            </form  >
                    </div>
            <br>
            <form method="POST" action="../Vista/formulario_consultas_productos.php">
            <div class="div-search" >
            
            <input  type="text" size="40" id="caja_buscar_producto" name="caja_buscar_producto">
                            <button class="button">Buscar</button>
                    <br><br>
                </div>
                
            </form>


               <!--------------------------------TABLA PRODUCTOS------------------------>
                        <div  class="card-content">
            <div class="scroll" >
               <table id="customers">

                <tr > 
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

        
            $con = new ConexionBD();
            $conexion = $con->getConexion();
            $sql1 = "SELECT * FROM Productos ";
    
            $res = mysqli_query($conexion, $sql1);
            if(mysqli_num_rows($res)>0 ){
                while($fila = mysqli_fetch_assoc($res)){
                      printf("<tr><td>".$fila['id_Producto']."</td>".
                      "<td>".$fila['DescripcionProducto']."</td>".
                      "<td>".$fila['Precio']."</td>".
                      "<td>".$fila['Stock']."</td>".
                      "<td>".$fila['FK_id_TipoProducto']."</td>".
                      "<td>".$fila['FK_id_Proveedor']."</td>".
                      "<td> <a href='../Vista/pagina_realizar_cambios_productos.php?nc=%s&dp=%s&p=%s&s=%s&pd=%s&pv=%s'> <img src='img/edit.png'> </a>" ." </td>".
                      "<td> <a href='../Modelos/procesar_bajas_productos.php?nc=%s'> <img src='img/trash-can.png'> </a> </td> 
                      </tr>", $fila['id_Producto'], $fila['DescripcionProducto'],  $fila['Precio'],  $fila['Stock'], $fila['FK_id_TipoProducto'], $fila['FK_id_Proveedor'], $fila['id_Producto']
                    
                  );
                }
              }else{
                echo ('No se encontro resultado de la búsqueda');
              }
            
        
      
      ?>

            </table>


            </div>
            </div>
            
         

        </section>
    </section>
       
   


</body>


</html>