<?php
$idconcurso = $_GET['id'];;
$idconcursante = $_SESSION['usuario']->getId();

$c = new Conexion();
$conex = $c->conectabd();
$juez = "admindamevistobueno";
$rpParticipacion = new repositorioParticipacion($conex);
$rpParticipacion->participar($juez,$idconcursante,$idconcurso);

header('Location: ?menu=misconcursos');
