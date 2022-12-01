<?php


$id=$_GET['id'];

$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioConcurso($conex);
$rp->delete($id);


header('Location:?menu=listadoconcursos');

?>