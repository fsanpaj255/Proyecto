<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$json = file_get_contents("php://input");
$rp->updateapiParticipante($json);