<?php
 require_once './auto/autocargador.php';
 $c = new Conexion();
 $conex = $c->conectabd();
 $rp = new repositorioParticipante($conex);
 $correo = 'fcotrabajos8@gmail.com';
 $contrasena = 'despertador5';
$usuarios = $rp->usuario($correo,$contrasena);

var_dump($usuarios);

?>