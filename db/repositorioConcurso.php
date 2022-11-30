<?php
class repositorioConcurso
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un Concurso
 function getConcurso($id)
{
    $registro = $this->conex->query("SELECT * from concurso where id=$id");
    $datos = $registro->fetch();

    $concurso = new Concurso();
    $concurso 
    ->setId($datos['id'])
    ->setNombre($datos['nombre'])
    ->setDesc($datos['desc'])
    ->setFIni($datos['fini'])
    ->setFFin($datos['ffin'])
    ->setFIniInsc($datos['finiInscrip'])
    ->setFFinUnsc($datos['ffinInscrip'])
    ->setCartel($datos['cartel']);

    return $concurso;

}
//Coger todos los concursos
 function getallConcursos()
{
    $resultado =  $this->conex->query("SELECT * from concurso");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $concurso = new Concurso();
      $concurso
      ->setId($fila['id'])
      ->setNombre($fila['nombre'])
      ->setDesc($fila['desc'])
      ->setFIni($fila['fini'])
      ->setFFin($fila['ffin'])
      ->setFIniInsc($fila['finiInscrip'])
      ->setFFinUnsc($fila['ffinInscrip'])
      ->setCartel($fila['cartel']);
      $listadoconcursos[] = $concurso;
    }

    return $listadoconcursos;
}

//Insertar nuevo concurso
function insert($concurso)
{
$nombre = $concurso->getNombre();
$desc = $concurso->getDesc();
$fini = $concurso->getFIni();
$ffin = $concurso->getFFin();
$finiInscrip = $concurso->getFIniInsc();
$ffinInscrip = $concurso->getFFinUnsc();
$cartel = $concurso->getCartel();

   $this->conex->query("INSERT INTO concurso VALUES(null,'$nombre', '$desc', '$fini', '$ffin', '$finiInscrip' , '$ffinInscrip', '$cartel')");
}

 //Actualizar un  concurso por su id
 function update($concurso,$nombre,$desc,$fini,$ffin,$finiInscrip,$ffinInscrip,$cartel){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
  $id = $concurso->getId();
    $this->conex->query("UPDATE concurso SET nombre='$nombre'desc='$desc',fini='$fini',ffin='$ffin',finiInscrip='$finiInscrip',ffinInscrip='$ffinInscrip',cartel='$cartel' WHERE id='$id'");
  }
  
  //Borrar un concurso por su id
  function delete($id){
    $this->conex->query("DELETE FROM concurso WHERE id='$id'");
  }

}
?>