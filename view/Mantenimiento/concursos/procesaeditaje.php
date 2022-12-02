<?php

$id2= $_POST['id2'];
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$fini = $_POST['fini'];
$ffin = $_POST['ffin'];
$finiInscrip = $_POST['finiInscrip'];
$ffinInscrip = $_POST['ffinInscrip'];
$cartel = $_POST['cartel'];
 //Editamos el objeto
 $c = new Conexion();
 $conex = $c->conectabd();
 $rp = new repositorioConcurso($conex);
 $rp->update($id2,$nombre,$desc,$fini,$ffin,$finiInscrip,$ffinInscrip,$cartel);

 header('Location: ?menu=listadoconcursos');



?>