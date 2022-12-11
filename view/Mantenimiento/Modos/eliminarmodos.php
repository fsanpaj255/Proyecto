<?php


$id=$_GET['id'];

$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioModo($conex);
$rp->delete($id);


header('Location:?menu=listadomodos');

?>