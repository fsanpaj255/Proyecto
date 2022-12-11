<?php
    //capturamos valores
	$nombre = $_POST['nombre'];
	$premio_id = $_POST['premio_id'];
    //creamos el objeto con dichos valores del formulario

    $modo = new Modo();
    $modo->setNombre($nombre);
    $modo->setPremioId($premio_id);
    //insertamos el objeto
    $c = new Conexion();
    $conex = $c->conectabd();
	$rp = new repositorioModo($conex);
    $rp->insert($modo);

    header('Location: ?menu=listadomodos');
?>