<?php
class repositorioDiploma
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un diploma
 function getDiploma($id)
{
    $registro = $this->conex->query("SELECT * from diploma where id=$id");
    $datos = $registro->fetch();

    $diploma = new Diploma();
    $diploma 
    ->setTipo($datos['identificador'])
    ->setAdmin($datos['admin'])
    ->setcorreo($datos['correo'])
    ->setContrasena($datos['contraseña'])
    ->setLocalizacion($datos['localizacion'])
    ->setImagen($datos['imagen'])
    ->setNombre($datos['nombre']);

    return $diploma;

}
//Coger todos los diplomas
 function getallDiplomas()
{
    $resultado =  $this->conex->query("SELECT * from diploma");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $diploma = new Diploma();
      $diploma
      ->setIdentificador($fila['identificador'])
      ->setAdmin($fila['admin'])
      ->setcorreo($fila['correo'])
      ->setContrasena($fila['contraseña'])
      ->setLocalizacion($fila['localizacion'])
      ->setImagen($fila['imagen'])
      ->setNombre($fila['nombre']);
      $listadodiplomas[] = $diploma;
    }

    return $listadodiplomas;
}

//Insertar nuevo diploma //ver como se mete el imagen y el localizacion
function insert($diploma, $x , $y , $z)
{
$point = new Point($x,$y,$z);
$identificador = $diploma->getIdentificador();
$admin = $diploma->getAdmin();
$correo = $diploma->getCorreo();
$contrasena = $diploma->getContrasena();
$localizacion = $point;
$imagen = $diploma->getImagen();
$nombre = $diploma->getNombre();

   $this->conex->query("INSERT INTO diploma VALUES(null,'$identificador', '$admin', '$correo', '$contrasena', '$localizacion' , '$imagen', '$nombre')");
}

 //Actualizar un  diploma por su id
 function update($diploma,$identificador,$admin,$correo,$contrasena,$localizacion,$imagen,$nombre){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
  $id = $diploma->getId();
    $this->conex->query("UPDATE diploma SET identificador='$identificador'admin='$admin',correo='$correo',contrasena='$contrasena',loclizacion='$localizacion',imagen='$imagen',nombre='$nombre' WHERE id='$id'");
  }
  
  //Borrar un diploma por su id
  function delete($id){
    $this->conex->query("DELETE FROM diploma WHERE id='$id'");
  }

}






?>