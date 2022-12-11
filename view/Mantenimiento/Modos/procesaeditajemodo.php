<?php

$id2= $_POST['id2'];
$nombre = $_POST['nombre'];
$id_premio = $_POST['id_premio'];
 //Editamos el objeto
 $c = new Conexion();
 $conex = $c->conectabd();
 $rp = new repositorioModo($conex);
 $rp->update($id2,$nombre,$id_premio);

 header('Location: ?menu=listadomodos');

?>