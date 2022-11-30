<?php
class repositorioDiploma
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un diploma
 function getDiploma($id,$concurso)
{
    $registro = $this->conex->query("SELECT * from diploma where id=$id");
    $datos = $registro->fetch();
    
  
    $diploma = new Diploma();
    $diploma
    ->setId($datos['id']) 
    ->setTipo($datos['tipo'])
    ->setMinPuntos($datos['minPuntos'])
    ->setConcursoId($concurso->getId());

    return $diploma;

}
//Coger todos los diplomas
 function getallDiplomas($concursos)
{
    $resultado =  $this->conex->query("SELECT * from diploma");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $diploma = new Diploma();
      $diploma
      ->setId($fila['id'])
      ->setTipo($fila['identificador'])
      ->setMinPuntos($fila['admin'])
      ->setConcursoId($concursos->getId());
      $listadodiplomas[] = $diploma;
    }

    return $listadodiplomas;
}

//Insertar nuevo diploma //ver como se mete el imagen y el localizacion
function insert($diploma)
{
$tipo = $diploma->getTipo();
$minpuntos = $diploma->getMinpuntos();
$concursoid = $diploma->getAdmin();

   $this->conex->query("INSERT INTO diploma VALUES(null,'$tipo', '$minpuntos', '$concursoid')");
}

 //Actualizar un  diploma por su id
 function update($diploma,$tipo,$minpuntos,$concurso){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
  $id = $diploma->getId();
  $concursoid = $concurso->getId();
    $this->conex->query("UPDATE diploma SET tipo='$tipo',minPuntos='$minpuntos', concurso_id='$concursoid' WHERE id='$id'");
  }
  
  //Borrar un diploma por su id
  function delete($id){
    $this->conex->query("DELETE FROM diploma WHERE id='$id'");
  }

}






?>