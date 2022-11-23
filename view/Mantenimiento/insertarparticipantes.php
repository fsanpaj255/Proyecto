<?php 
	if (!isset($_POST['oculto'])) {
		exit();
	}
    //capturamos valores
	$identificador = $_POST['identificador'];
	$admin = $_POST['admin'];
	$nombre = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$x= $_POST['localizacion1'];
    $y = $_POST['localizacion2'];
    $z = $_POST['localizacion3'];
    $imagen = $_POST['imagen'];
    $nombre = $_POST['nombre'];
    //creamos el objeto con dichos valores del formulario
    $participante = new Participante();
    $participante
      ->setIdentificador($identificador)
      ->setAdmin($admin)
      ->setcorreo($nombre)
      ->setContrasena($contrasena)
      ->setImagen($imagen)
      ->setNombre($nombre);

    //insertamos el objeto
    $c = new Conexion();
    $conex = $c->conectabd();
	$rp = new repositorioParticipante($conex);
    $rp->insert($participante,$x,$y,$z);

	if ($rp == "insertado") {
		//echo "Insertado correctamente";
		header('Location: listadoparticipantes.php');
	}else{
		echo "Error";
	}
?>