<?php
class Login
{
    public static function Identifica(string $usuario,string $contrasena)
    {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];


        $c = new Conexion();
        $conex = $c->conectabd();
        $participante = new repositorioParticipante($conex);
        $usuario = $participante->usuario($correo,$contrasena);
    
        if ($correo == $usuario->getCorreo() && $contrasena == $usuario->getContrasena())
        {
            $rol = $usuario->getAdmin();
            $_SESSION['rol'] = $rol;
            header('Location: ?menu=listadoconcursos');
        }else{
            header('Location: ?menu=errorlogin');
        }  
    }

    private static function ExisteUsuario(string $usuario,string $contrasena=null)
    {
        
    }

    public static function UsuarioEstaLogueado()
    {
        
    }
}