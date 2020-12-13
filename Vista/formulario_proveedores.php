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
                <li><a href="#"> <img src="img/pagina-principal.png">&emsp; Inicio</a></li>
                    <li><a href="formulario_productos.php"> <img src="img/store.png">  Productos</a></li>
                    <li><a href="formulario_clientes.php"> <img src="img/user (1).png"> &emsp;Clientes</a>                    </li>
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
            <form  id="formulario_productos" method="POST" action="../Modelos/procesar_altas_proveedores.php"  onsubmit="return validarFormularioProductos()">
                <div class="simple_form">
                    <h2>Administrar Proveedores</h2>
                    <br>
                    <div class="left">
                    &emsp;&emsp;<label>Nombre Completo</label>&emsp;
                    <br>
                    <input type="text"  id="caja_nombre_proveedor" name="caja_nombre_proveedor" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoDescripcion'])) {
                        echo $_SESSION['datoDescripcion']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoDescripcion']);
                        ?>" required >
                        <br>
                        <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorDes'])) {
                        echo $_SESSION['errorDes']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorDes']);
                        ?>
                        </span>
                </div>
                <div class="left">
                    &emsp;<label>Nombre de la empresa </label>&emsp;
                    <br>
                    <input type="text" size="20" id="caja_nombre_empresa_proveedor" name="caja_nombre_empresa_proveedor" required 
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
                &emsp;&emsp;&emsp;<label> Dirección </label>
                    <br>
                    <input type="text" size="20" id="caja_direccion_proveedor" name="caja_direccion_proveedor" required
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
                &emsp;&emsp;&emsp;<label> Teléfono </label>
                    <br>
                    <input type="number" size="10" id="caja_telefono_proveedor" name="caja_telefono_proveedor" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoTel'])) {
                        echo $_SESSION['datoTel']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoTel']);
                        ?>" required >

                        <br>
                        <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorTel'])) {
                        echo $_SESSION['errorTel']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorTel']);
                        ?>
                        </span>

                        
                    </div>
                      &emsp;&emsp;<button class="button" type="submit">Guardar Proveedor</button>
                      <br>
                      <br>
                </div>
                      
             
                  
            </form  >
                    </div>
            <br>
            <form method="POST" action="../Vista/formulario_consultas_proveedores.php">
            <div class="div-search" >
            
            <input  type="text" size="40" id="caja_buscar_proveedor" name="caja_buscar_proveedor">
                            <button class="button">Buscar</button>
                    <br><br>
                </div>
                
            </form>


               <!--------------------------------TABLA PRODUCTOS------------------------>
                        <div  class="card-content">
            <div class="scroll" >
               <table id="customers">

                <tr > 
                    <th>id_Proveedor</th>
                    <th>Nombre</th>
                    <th>Nombre de la empresa</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                <?php

            include('../Conexion_BD/conexion_bd.php');
            $con = new ConexionBD();
            $conexion = $con->getConexion();
            $sql1 = "SELECT * FROM Proveedores";
    
            $res = mysqli_query($conexion, $sql1);
            if(mysqli_num_rows($res)>0 ){
                while($fila = mysqli_fetch_assoc($res)){
                      printf("<tr><td>".$fila['id_Proveedor']."</td>".
                      "<td>".$fila['NombreProveedor']."</td>".
                      "<td>".$fila['NombreEmpresa']."</td>".
                      "<td>".$fila['Direccion']."</td>".
                      "<td>".$fila['Telefono']."</td>".
                      "<td> <a href='../Vista/formulario_realizar_cambios_proveedores.php?id=%s&np=%s&ne=%s&d=%s&t=%s'> <img src='img/edit.png'> </a>" ." </td>".
                      "<td> <a href='../Modelos/procesar_bajas_proveedores.php?id=%s'> <img src='img/trash-can.png'> </a> </td> 
                      </tr>", $fila['id_Proveedor'], $fila['NombreProveedor'],  $fila['NombreEmpresa'],  $fila['Direccion'], $fila['Telefono'], $fila['id_Proveedor']
                    
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