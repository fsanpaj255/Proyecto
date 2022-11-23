<?php
class repositorioBanda
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un banda
 function getBanda($id)
{
    $registro = $this->conex->query("SELECT * from banda where id=$id");
    $datos = $registro->fetch();

    $banda = new Banda();
    $banda 
    ->setDistancia($datos['distancia'])
    ->setRangoMin($datos['rangoMin'])
    ->setRangoMax($datos['rangoMax']);


    return $banda;

}
//Coger todos los bandas
 function getallBandas()
{
    $resultado =  $this->conex->query("SELECT * from banda");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $banda = new Banda();
      $banda
    ->setDistancia($fila['distancia'])
    ->setRangoMin($fila['rangoMin'])
    ->setRangoMax($fila['rangoMax']);
      $listadobandas[] = $banda;
    }

    return $listadobandas;
}

//Insertar nuevo banda //ver como se mete el imagen y el localizacion
function insert($banda)
{
$distancia = $banda->getDistancia();
$rangomin = $banda->getRangoMin();
$rangomax = $banda->getRangoMax();


   $this->conex->query("INSERT INTO banda VALUES(null,'$distancia', '$rangomin', '$rangomax')");
}

 //Actualizar un  banda por su id
 function update($banda,$distancia,$rangomin,$rangomax){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
  $id = $banda->getId();
    $this->conex->query("UPDATE banda SET distancia='$distancia'rangoMin='$rangomin',rangoMax='$rangomax' WHERE id='$id'");
  }
  
  //Borrar un banda por su id
  function delete($id){
    $this->conex->query("DELETE FROM banda WHERE id='$id'");
  }

}






?>
