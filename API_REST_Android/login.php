<?php

include('../Conexion_BD/conexion_bd_usuarios.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
echo"-----------------------------------------------------------------------------------------------------------";
    var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cadena_JSON = file_get_contents('php://input'); // prepara PHP para recibir informacion a traves de HTTP

        if($cadena_JSON == false){
            echo "No hay peticion HTTP";
        }else{
            $datos = json_decode($cadena_JSON, TRUE);

            $nc = SHA1($datos['nc']);
            $c= SHA1($datos['c']);
    
            $sql = "SELECT * FROM Usuarios WHERE NombreDeUsuario='$nc' AND Contrasenia='$c'";
            echo "------------------";
            var_dump($nc);
            $res = mysqli_query($conexion, $sql);
            
            $respuesta = array();
            if($res){
                //todo bien
                $respuesta['autenticado'] = true;
                echo json_encode($respuesta);
                //var_dump($cad);
            }else{
                //todo mal
                $respuesta['exito'] = false;
                $respuesta[] = "No autenticado";
                echo json_encode($respuesta);
            }
        }
        
    }
?>