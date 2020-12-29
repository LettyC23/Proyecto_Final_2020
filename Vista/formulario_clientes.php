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
            <form  id="formulario_productos" method="POST" action="../Modelos/procesar_altas_clientes.php"  onsubmit="return validarFormularioClientes()">
                <div class="simple_form">
                    <h2>Administrar Clientes</h2>
                    <br>
                    <div class="left">
                    &emsp;&emsp;&emsp;<label>Nombre(s)</label>&emsp;
                    <br>
                    <input type="text"  id="caja_nombre_cliente" name="caja_nombre_cliente"  
                    value="<?php  
                     
                     if(isset($_SESSION['datoNom'])) {
                        echo $_SESSION['datoNom']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoNom']);
                        ?>" required >
                        <br>
                        <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorNom'])) {
                        echo $_SESSION['errorNom']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorNom']);
                        ?>
                        </span>
                </div>
                <div class="left">
                    &emsp;&emsp;<label>Primer Apellido</label>&emsp;
                    <br>
                    <input type="text"  id="caja_appaterno_cliente" name="caja_appaterno_cliente"  
                    value="<?php  
                     
                     if(isset($_SESSION['datoPAp'])) {
                        echo $_SESSION['datoPAp']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoPAp']);
                        ?>" required >
                        <br>
                        <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorNom'])) {
                        echo $_SESSION['errorNom']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorNom']);
                        ?>
                        </span>
                </div>
                <div class="left">
                    &emsp;&emsp;<label>Segundo Apellido</label>&emsp;
                    <br>
                    <input type="text"  id="caja_apmaterno_cliente" name="caja_apmaterno_cliente"  
                    value="<?php  
                     
                     if(isset($_SESSION['datoSAp'])) {
                        echo $_SESSION['datoSAp']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoSAp']);
                        ?>" required >
                        <br>
                        <span style="color:red;">
                     <?php  
                     
                     if(isset($_SESSION['errorNom'])) {
                        echo $_SESSION['errorNom']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['errorNom']);
                        ?>
                        </span>
                </div>
                <div class="left">
                    &emsp;&emsp;&emsp;<label>Calle </label>&emsp;
                    <br>
                    <input type="text" size="15" id="caja_calle_cliente" name="caja_calle_cliente" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoCalle'])) {
                        echo $_SESSION['datoCalle']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoCalle']);
                        ?>" required>
                </div>
                <div class="left">
                    &emsp;&ensp;<label>Número </label>&emsp;
                    <br>
                    <input type="number" size="10" id="caja_numero_cliente" name="caja_numero_cliente" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoNumero'])) {
                        echo $_SESSION['datoNumero']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoNumero']);
                        ?>" required>
                </div>
                <div class="left">
                    &emsp;&emsp;&emsp;&ensp;<label>Colonia </label>&emsp;
                    <br>
                    <input type="text" size="20" id="caja_colonia_cliente" name="caja_colonia_cliente" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoColonia'])) {
                        echo $_SESSION['datoColonia']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoColonia']);
                        ?>" required>
                </div>
                <div class="left">
                    &emsp;&emsp;&emsp;<label>Estado </label>&emsp;
                    <br>
                    <input type="text" size="15" id="caja_estado_cliente" name="caja_estado_cliente" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoEstado'])) {
                        echo $_SESSION['datoEstado']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoEstado']);
                        ?>" required>
                </div>
                <div class="left"> 
                &emsp;&emsp;&emsp;<label> Teléfono </label>
                    <br>
                    <input type="number" size="10" id="caja_telefono_cliente" name="caja_telefono_cliente" 
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
                    
                <div class="left">
                    &emsp;&emsp;&emsp;<label> Correo </label>
                    <br>
                    <input type="email" size="20" id="caja_correo_cliente" name="caja_correo_cliente" 
                    value="<?php  
                     
                     if(isset($_SESSION['datoCorreo'])) {
                        echo $_SESSION['datoCorreo']; 
                        }else{
                            echo "";
                        }
                        unset($_SESSION['datoCorreo']);
                        ?>" required>
                </div>&emsp;&emsp;
                        
                </div>
               
               <br>
                   
                      &emsp;&emsp;<button class="button" type="submit">Guardar Cliente</button>
                      <br>
                      <br>
                      <br>
                </div>      
                      
             
                  
            </form  >
                    </div>
            <br>
            <form method="POST" action="../Vista/formulario_consultas_clientes.php">
            <div class="div-search" >
            
            <input  type="text" size="40" id="caja_buscar_cliente" name="caja_buscar_cliente">
                            <button class="button">Buscar</button>
                    <br><br>
                </div>
                
            </form>


               <!--------------------------------TABLA PRODUCTOS------------------------>
                        <div  class="card-content">
            <div class="scroll" >
               <table id="customers">

                <tr > 
                    <th>id_Cliente</th>
                    <th>Nombre</th>
                    <th>Primer AP.</th>
                    <th>Segundo Ap.</th>
                    <th>Calle</th>
                    <th>Número</th>
                    <th>Colonia</th>
                    <th>Estado</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                <?php

            include('../Conexion_BD/conexion_bd.php');
            $con = new ConexionBD();
            $conexion = $con->getConexion();
            $sql1 = "SELECT * FROM Clientes";
    
            $res = mysqli_query($conexion, $sql1);
            if(mysqli_num_rows($res)>0 ){
                while($fila = mysqli_fetch_assoc($res)){
                      printf("<tr><td>".$fila['id_Cliente']."</td>".
                      "<td>".$fila['NombreCliente']."</td>".
                      "<td>".$fila['ApellidoPatCliente']."</td>".
                      "<td>".$fila['ApellidoMatCliente']."</td>".
                      "<td>".$fila['CalleCliente']."</td>".
                      "<td>".$fila['NumeroCliente']."</td>".
                      "<td>".$fila['ColoniaCliente']."</td>".
                      "<td>".$fila['EstadoCliente']."</td>".
                      "<td>".$fila['Telefono']."</td>".
                      "<td>".$fila['Correo']."</td>".
                      "<td> <a href='../Vista/formulario_realizar_cambios_clientes.php?id=%s&nc=%s&pa=%s&sa=%s&ca=%s&n=%s&col=%s&e=%s&t=%s&c=%s'> <img src='img/edit.png'> </a>" ." </td>".
                      "<td> <a href='../Modelos/procesar_bajas_clientes.php?id=%s'> <img src='img/trash-can.png'> </a> </td> 
                      </tr>", $fila['id_Cliente'], $fila['NombreCliente'], $fila['ApellidoPatCliente'], $fila['ApellidoMatCliente'], $fila['CalleCliente'], $fila['NumeroCliente'], $fila['ColoniaCliente'],$fila['EstadoCliente'], $fila['Telefono'], $fila['Correo'], $fila['id_Cliente']
                    
                  );
                }
              }else{
                echo ('No se encuentran registros aún');
              }
            
        
      
      ?>

            </table>


            </div>
            </div>
            
         

        </section>
    </section>
       
   


</body>


</html>