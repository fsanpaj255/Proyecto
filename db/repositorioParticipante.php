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
    ->setId($datos['id'])
    ->setIdentificador($datos['identificador'])
    ->setAdmin($datos['admin'])
    ->setcorreo($datos['correo'])
    ->setContrasena($datos['contraseña'])
    ->setLocalizacion($datos['localizacion'])
    ->setImagen($datos['imagen'])
    ->setNombre($datos['nombre']);

    return $participante;

}

//usuario
function usuario($correo,$contrasena){
  $registro =  $this->conex->query("SELECT * from participante where contraseña='$contrasena'");
  $datos = $registro->fetch();
  $usuario = new Usuario();
  $usuario
  ->setId($datos['id'])
  ->setAdmin($datos['admin'])
  ->setCorreo($datos['correo'])
  ->setContrasena($datos['contraseña']);

  return $usuario;
}
//Coger todos los participantes
 function getallParticipantes()
{
    $resultado =  $this->conex->query("SELECT * from participante");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $participante = new Participante();
      $participante
      ->setId($fila['id'])
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



//esto la necesito para usar mi info en el json encode sin que sean publicas las propiedades de mis objetos
function getallParticipantesArray()
{
    $arrayparticipantes = [];
    $resultado =  $this->conex->query("SELECT * from participante");

   while ($datos = $resultado->fetch()){
    $participante= array(
      'id' => $datos['id'],
      'identificador' => $datos['identificador'],
      'admin' => $datos['admin'],
      'correo' => $datos['correo'],
      'contraseña' => $datos['contraseña'],
      'localizacion' => "",
      'imagen' => $datos['imagen'],
      'nombre' => $datos['nombre']
    );
    array_push($arrayparticipantes,$participante);
    }
    return $arrayparticipantes;
   }

//Insertar nuevo participante //ver como se mete el imagen y el localizacion
function insert($participante,$x,$y)
{
$identificador = $participante->getIdentificador();
$admin = $participante->getAdmin();
$correo = $participante->getCorreo();
$contrasena = $participante->getContrasena();
$imagen = $participante->getImagen();
$nombre = $participante->getNombre();

   $this->conex->query("INSERT INTO participante VALUES(null,'$identificador', '$admin', '$correo', '$contrasena', POINT('$x','$y') , '$imagen', '$nombre')");
   return TRUE;
}

 //PARA EL INSERT DE LA API
 function crearapiParticipante($json){
  $datos = json_decode($json,true);
  $identificador = $datos['identificador'];
  $admin = $datos['admin'];
  $correo = $datos['correo'];
  $contrasena = $datos['contrasena'];
  $localizacion = $datos['localizacion'];
  $imagen = $datos['imagen'];
  $nombre = $datos['nombre'];

  $this->conex->query("INSERT INTO participante VALUES(null,'$identificador', '$admin', '$correo', '$contrasena', '$localizacion', '$imagen', '$nombre')");
 }

 function updateapiParticipante($json){
  $datos = json_decode($json,true);
  $id = $datos['id'];
  $identificador = $datos['identificador'];
  $admin = $datos['admin'];
  $correo = $datos['correo'];
  $contrasena = $datos['contrasena'];
  $localizacion = $datos['localizacion'];
  $imagen = $datos['imagen'];
  $nombre = $datos['nombre'];
    $this->conex->query("UPDATE participante SET identificador='$identificador',admin='$admin',correo='$correo',contrasena='$contrasena',loclizacion='$localizacion',imagen='$imagen',nombre='$nombre' WHERE id='$id'");
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
