<?php
//concatenar las propiedades en la cadena de conexion
class conexion
{
    public static function conectabd(){
        try {
        $conexion = new PDO("mysql:host=localhost;dbname=concursos", "root", "");
        }catch (PDOException $e) {
            echo 'Error de conexion:'. $e->getMessage();
        }
        return $conexion;
    }
}
?>