<?php
class Sesion
{
    public static function iniciarsesion()
    {
        session_start();
    }

    public static function leer(string $clave)
    {
        
    }

    public static function existe(string $clave)
    {
        
    }

    public static function escribir($clave,$valor)
    {
        
    }

    public static function cerrarsesion()
    {
       session_destroy();
    }
}