<?php

include('../Conexion_BD/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cadena_JSON = file_get_contents('php://input'); // prepara PHP para recibir informacion a traves de HTTP

        //if($cadena_JSON == false){
            //echo "No hay peticion HTTP";
        //}else{
            $filtro = json_decode($cadena_JSON, TRUE);

            $sql = "SELECT * FROM Usuarios;";
    
            $res = mysqli_query($conexion, $sql);
    
            //var_dump($res);

            $datos['usuarios'] = array();
            if($res){
                //todo bien
                while($fila = mysqli_fetch_assoc($res)){
                    $proveedor= array();

                    $proveedor['nc'] = $fila['id_Usuario'];
                    $proveedor['np'] = $fila['NombreUsuario'];
                    $proveedor['ne'] = $fila['Correo'];
                    $proveedor['d'] = $fila['NombreDeUsuario'];
                    $proveedor['t'] = $fila['Contrasenia'];

                    array_push($datos['usurios'], $proveedor);

                    
                }echo json_encode($datos);
            }else{
                //todo mal
                
            //}
        }
        
    }
?>