<?php
    //capturamos valores
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['desc'];
	$fini = $_POST['fini'];
	$ffin = $_POST['ffin'];
    $finiInscrip = $_POST['finiInscrip'];
    $ffinInscrip = $_POST['ffinInscrip'];
    $cartel = $_POST['cartel'];
    //creamos el objeto con dichos valores del formulario
    $concurso = new Concurso();
    $concurso
      ->setNombre($nombre)
      ->setDesc($descripcion)
      ->setFIni($fini)
      ->setFFin($ffin)
      ->setFIniInsc($localizacion)
      ->setFFinUnsc($imagen)
      ->setCartel($cartel);

    //insertamos el objeto
    $c = new Conexion();
    $conex = $c->conectabd();
	$rp = new repositorioConcurso($conex);
    $rp->insert($concurso);

    header('Location: ?menu=listadoconcursostb');
?>