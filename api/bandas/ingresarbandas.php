<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
//$json = file_get_contents("php://input");
$json = file_get_contents("php://input");
$rp = new repositorioBandas($conex);
$bandas=$rp->crearapiBandas($json);
