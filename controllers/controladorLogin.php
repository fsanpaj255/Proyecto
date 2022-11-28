<?php
   if (isset($_POST['ingresar'])) 
    {
        //si detecta que hay correo y contraseña se mete
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) 
        {
            //capturamos el correo y la contraseña
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
                echo 'datos incorrectos';
            }
        }  
    }