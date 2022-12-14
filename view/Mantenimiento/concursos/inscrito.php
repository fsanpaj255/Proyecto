<?php
$idconcurso = $_POST['id_concurso'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$c = new Conexion();
$conex = $c->conectabd();
$rp = new repositorioParticipante($conex);
$usuario = $rp->usuario($correo,$contrasena);

$idconcursante = $usuario->getId();
$juez = "admindamevistobueno";
$rpParticipacion = new repositorioParticipacion($conex);
$rpParticipacion->participar($juez,$idconcursante,$idconcurso);

header('Location: ?menu=misconcursos');
