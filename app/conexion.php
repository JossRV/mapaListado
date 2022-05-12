<?php 

    class Conexion{
        static function conectar(){
            $servidor = "localhost";
            $user = "root";
            $pass = "";
            $bd = "buscador";

            return $conectado = new mysqli(
                $servidor,
                $user,
                $pass,
                $bd
            );
        }
    }

    // if(Conexion :: conectar()){
    //     echo "conectado";
    // }

?>