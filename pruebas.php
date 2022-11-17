<?php

include ('db/conexion.php');
include ('db/repositorioParticipante.php');
include ('class/participante.php');
$c = new conexion();

$conex = $c->conectabd();


$rp = new repositorioParticipante($conex); 
$id = 1;

$rp->delete($id);




?>