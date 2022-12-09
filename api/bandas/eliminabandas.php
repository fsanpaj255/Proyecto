<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioBandas($conex);
$id = file_get_contents("php://input");
$datos= json_decode($id,true);
$idaeliminar = $datos["idbanda"];
$bandas=$rp->delete($idaeliminar);
