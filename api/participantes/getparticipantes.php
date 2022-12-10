<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$bandas=$rp->getallparticipantesArray();
echo json_encode($bandas);