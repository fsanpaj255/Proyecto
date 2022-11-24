<?php
class repositorioParticipante
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un participante
 function getParticipante($id)
{
    $registro = $this->conex->query("SELECT * from participante where id=$id");
    $datos = $registro->fetch();

    $participante = new Participante();
    $participante 
    ->setIdentificador($datos['identificador'])
    ->setAdmin($datos['admin'])
    ->setcorreo($datos['correo'])
    ->setContrasena($datos['contraseña'])
    ->setLocalizacion($datos['localizacion'])
    ->setImagen($datos['imagen'])
    ->setNombre($datos['nombre']);

    return $participante;

}
//Coger todos los participantes
 function getallParticipantes()
{
    $resultado =  $this->conex->query("SELECT * from participante");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $participante = new Participante();
      $participante
      ->setIdentificador($fila['identificador'])
      ->setAdmin($fila['admin'])
      ->setcorreo($fila['correo'])
      ->setContrasena($fila['contraseña'])
      ->setLocalizacion($fila['localizacion'])
      ->setImagen($fila['imagen'])
      ->setNombre($fila['nombre']);
      $listadoparticipantes[] = $participante;
    }

    return $listadoparticipantes;
}

//Insertar nuevo participante //ver como se mete el imagen y el localizacion
function insert($participante)
{
$identificador = $participante->getIdentificador();
$admin = $participante->getAdmin();
$correo = $participante->getCorreo();
$contrasena = $participante->getContrasena();
$localizacion = $participante->getLocalizacion();
$imagen = $participante->getImagen();
$nombre = $participante->getNombre();

   $this->conex->query("INSERT INTO participante VALUES(null,'$identificador', '$admin', '$correo', '$contrasena', '$localizacion' , '$imagen', '$nombre')");
   return TRUE;
}

 //Actualizar un  participante por su id
 function update($participante,$identificador,$admin,$correo,$contrasena,$localizacion,$imagen,$nombre){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
  $id = $participante->getId();
    $this->conex->query("UPDATE participante SET identificador='$identificador'admin='$admin',correo='$correo',contrasena='$contrasena',loclizacion='$localizacion',imagen='$imagen',nombre='$nombre' WHERE id='$id'");
  }
  
  //Borrar un participante por su id
  function delete($id){
    $this->conex->query("DELETE FROM participante WHERE id='$id'");
  }

}






?>
