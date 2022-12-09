<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$json = file_get_contents("php://input");
var_dump($json); die;
$rp = new repositorioBandas($conex);
$bandas=$rp->crearapiBandas($json);
