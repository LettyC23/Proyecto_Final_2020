<?php


include('../Conexion_BD/conexion_bd.php');

$con = new ConexionBD();
$conexion = $con->getConexion();

//var_dump($conexion);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $cadena_JSON = file_get_contents('php://input'); // prepara PHP para recibir informacion a traves de HTTP

   // if($cadena_JSON == false){
       // echo "No hay peticion HTTP";
    //}else{
        $datos = json_decode($cadena_JSON, TRUE);

        $nc = $datos['nc'];
        $n = $datos['np'];
        $pa = $datos['ne'];
        $sa = $datos['d'];
        $e = $datos['t'];

        $sql ="UPDATE Proveedores SET NombreProveedor='$n',NombreEmpresa='$pa',Direccion='$sa',Telefono='$e'
        WHERE id_Proveedor='$nc';";
        $res = mysqli_query($conexion, $sql);

        $respuesta = array();
        if($res){
            //todo bien
            $respuesta['exito'] = true;
            $respuesta['mensaje'] = "Modificación correcta";
            echo json_encode($respuesta);
            //var_dump($cad);
        }else{
            //todo mal
            $respuesta[' no exito'] = false;
            $respuesta[] = "Modificación incorrecta";
            echo json_encode($respuesta);
            var_dump($cad);
       // }
    }
    
}
?>