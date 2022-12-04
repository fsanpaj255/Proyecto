<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioBandas($conex);
$bandas=$rp->getallBandasArray();
echo json_encode($bandas);