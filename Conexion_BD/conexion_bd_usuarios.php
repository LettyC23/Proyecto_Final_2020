<?php

    class ConexionBD {
        private $conexion;

        private $host='localhost:3308';
        private $usuario='lety';
        private $contraseña='lacc1';
        private $bd = 'Usuarios_Sistema_Facturacion';

    
    public function __construct(){
        $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
     
        if($this->conexion){
            echo "Conexion establecida :) ";
            echo "<br>";
        }else{
             die("Error en conexion: ".mysqli_connect_error().mysqli_connect_errno());
        }  
    }
     public function getConexion(){ return $this->conexion;}

}

?>