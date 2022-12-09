<?php
   if (isset($_POST['registrarse'])) 
    {
       $nombre = $_POST["nombreusuario"];
       $correo = $_POST["correo"];
       $identificador = $_POST["identificador"];
       $contrasena = $_POST["contrasena"];
       $camara = $_POST["foto"];
       $latitud = $_POST["latitud"];
       $longitud = $_POST["longitud"];
      
       $c = new Conexion();
       $conex = $c->conectabd();

       $participante = new Participante();
       $participante 
       ->setIdentificador($identificador)
       ->setAdmin("0")
       ->setcorreo($correo)
       ->setContrasena($contrasena)
       ->setLocalizacion("")
       ->setImagen($camara)
       ->setNombre($nombre);
       $rp = new repositorioParticipante($conex);
         $rp->insert($participante,$latitud,$longitud);
         header('Location: ?menu=autentifica');
    }