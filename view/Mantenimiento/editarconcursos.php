<?php
    $id=$_GET['id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['desc'];
	$fini = $_POST['fini'];
	$ffin = $_POST['ffin'];
    $finiInscrip = $_POST['finiInscrip'];
    $ffinInscrip = $_POST['ffinInscrip'];
    $cartel = $_POST['cartel'];

    $c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioConcurso($conex);
$rp->update($id,$nombre,$descripcion,$fini,$ffin,$finiInscrip,$ffinInscrip,$cartel);
?>