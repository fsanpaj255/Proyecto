<?php
    //capturamos valores
	$identificador = $_POST['identificador'];
	$admin = $_POST['admin'];
	$nombre = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
    $localizacion = $_POST['localizacion'];
    $imagen = $_POST['imagen'];
    $nombre = $_POST['nombre'];
    //creamos el objeto con dichos valores del formulario
    $participante = new Participante();
    $participante
      ->setIdentificador($identificador)
      ->setAdmin($admin)
      ->setcorreo($nombre)
      ->setContrasena($contrasena)
      ->setLocalizacion($localizacion)
      ->setImagen($imagen)
      ->setNombre($nombre);

    //insertamos el objeto
    $c = new Conexion();
    $conex = $c->conectabd();
	$rp = new repositorioParticipante($conex);
    $rp->insert($participante);

	if ($rp == TRUE) {
		//echo "Insertado correctamente";
		header('Location: ?menu=listadoparticipantes');
	}else{
		echo "Error";
	}
?>