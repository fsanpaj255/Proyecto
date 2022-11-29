<?php
   if (isset($_POST['ingresar'])) 
    {
        //si detecta que hay correo y contraseña se mete
        if (isset($_POST['correo']) && isset($_POST['contrasena'])) 
        {
            //capturamos el correo y la contraseña
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            //Utilizamos el metodo valida usuario
            Login::Identifica($correo,$contrasena);
        }  
    }