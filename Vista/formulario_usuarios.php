<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../Vista/Scripts/estilos/style_dashboard.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='../Vista/Scripts/estilos/styleProducts.css' />
    <link rel='stylesheet' type='text/css' media='screen' href='Scripts_js/jquery-3.4.1.min.js' />
    
</head>
<body class="main">
    <div class="nav">
        <a href="#" class="active" >INICIO</a> 
        <a class="right" href="../Modelos/cerrar_sesion.php"> <img src="img/cerrar-sesion.png"></a> 
        
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

        <section class="main-productos" >
   
        
            <!--------------------------------Formulario altas------------------------------------->
            <form >
                <div class="simple_form">
                    <h2>Lista de Usuarios</h2>
                    <br>
                  
                      
             
                  
            </form  >
            <br>
            <form method="POST" action="../Vista/formulario_consultas_productos.php">
            <div class="div-search" >
            
            <input  type="text" size="50" id="caja_buscar_producto" name="caja_buscar_producto">
                            <button class="button">Buscar</button>
                    <br><br>
                </div>
                
            </form>


               <!--------------------------------TABLA PRODUCTOS------------------------>

            <div class="scroll" >
               <table id="customers" >

                <tr > 
                    <th>id_Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Nombre de Usuario</th>
                </tr>

                <?php

            include('../Conexion_BD/conexion_bd_usuarios.php');
            $con = new ConexionBD();
            $conexion = $con->getConexion();
            $sql1 = "SELECT * FROM Usuarios";
    
            $res = mysqli_query($conexion, $sql1);
            if(mysqli_num_rows($res)>0 ){
                while($fila = mysqli_fetch_assoc($res)){
                      printf("<tr><td>".$fila['id_Usuario']."</td>".
                      "<td>".$fila['NombreUsuario']."</td>".
                      "<td>".$fila['Correo']."</td>".
                      "<td>".$fila['NombreDeUsuario']."</td>"
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