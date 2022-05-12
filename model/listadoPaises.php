<?php 

    class metodos{
        static function mostrarListado($sql){
            $conexion = Conexion :: conectar();
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        }
    }

?>