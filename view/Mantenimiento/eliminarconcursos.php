<?php


$idconcurso=$_POST[$id];

$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioConcurso($conex);
$rp->delete($idconcurso);

header('Location: ?menu=listadoconcursostb');

?>