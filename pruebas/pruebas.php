<?php
 require_once './auto/autocargador.php';
 $c = new Conexion();
 $conex = $c->conectabd();
 $rp = new repositorioParticipante($conex);
$id = 
$usuarios = $rp->usuario($correo,$contrasena);

var_dump($usuarios);

?>