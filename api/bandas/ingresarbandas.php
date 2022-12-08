<?php
require_once './auto/autocargador.php';
$c = new Conexion();
$conex = $c->conectabd();


$distancia = $_POST["distancia"];
$rangomin = $_POST["rangomin"];
$rangomax = $_POST["rangomax"];


$rp = new repositorioBandas($conex);
$bandas=$rp->insert($distancia,$rangomin,$rangomax);
