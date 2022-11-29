<?php
require_once("../auto/autocargador.php");
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$participantes=$rp->getallParticipantes();
echo json_encode($participantes);