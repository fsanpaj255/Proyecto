<?php
    // Conectamos a la base de datos
    require_once '../auto/autocargador.php';
    $c = new Conexion();
 $conex = $c->conectabd();
 
   if (isset($_POST['inicioSesion'])) 
    {
        
       session_start();
        
        if (isset($_POST['contraseña'])) 
        {

            var_dump($_POST);
             
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

            $repoPaticipante = new repositorioParticipante($conex);
            $quey = $conex->prepare("SELECT * FROM participante WHERE correo LIKE '.$correo.' AND contraseña LIKE '.$contraseña.'");
            $quey ->execute();

            $row = $quey -> fetch(PDO::FETCH_ASSOC);
            var_dump($quey);
          if ($row) 
            {
                 $rol = $row['admin'];
                 switch ($rol) {
                     case '0':
                         header('location: ../view/Mantenimiento/listadoparticipantes.php');
                         break;
                     
                     case '1':
                         header('location: ../index.php');
                         break;

                    default:
                        header('location: ../view/Mantenimiento/listadovacunas.php');
                        break;
                 }
            }
            else 
            {
             echo "error";
            }

        }

         if (isset($_GET['cerrar_sesion'])) 
        {
            session_unset();
            session_destroy();
        }  
    }