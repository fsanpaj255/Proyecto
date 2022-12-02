<?php
require_once './auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$participantes=$rp->getallParticipantesArray();
echo json_encode($participantes);