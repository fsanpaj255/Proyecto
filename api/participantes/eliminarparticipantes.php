<?php
require_once '../../auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$id = file_get_contents("php://input");
$datos= json_decode($id,true);
$idaeliminar = $datos["idusuario"];
$usuarios=$rp->delete($idaeliminar);