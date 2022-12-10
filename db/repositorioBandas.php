<?php
class repositorioBandas
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
    ->setId($datos['id'])
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
      ->setId($fila['id'])
    ->setDistancia($fila['distancia'])
    ->setRangoMin($fila['rangoMin'])
    ->setRangoMax($fila['rangoMax']);
      $listadobandas[] = $banda;
    }

    return $listadobandas;
}

function getallBandasArray()
{
    $arraybandas= [];
    $resultado =  $this->conex->query("SELECT * from banda");

   while ($datos = $resultado->fetch()){
    $banda= array(
      'id' => $datos['id'],
      'distancia' => $datos['distancia'],
      'rangoMin' => $datos['rangoMin'],
      'rangoMax' => $datos['rangoMax']
    );
    array_push($arraybandas,$banda);
    }
    return $arraybandas;
   }
   //PARA EL INSERT DE LA API
   function crearapiBandas($json){
    $datos = json_decode($json,true);
    $distancia = $datos['distancia'];
    $rangomin = $datos['rangomin'];
    $rangomax = $datos['rangomax'];
    $this->conex->query("INSERT INTO banda VALUES(null,'$distancia', '$rangomin', '$rangomax')");
   }

//Insertar nuevo banda //ver como se mete el imagen y el localizacion
function insert($distancia,$rangomin,$rangomax)
{

   $this->conex->query("INSERT INTO banda VALUES(null,'$distancia', '$rangomin', '$rangomax')");
}

 //Actualizar un  banda por su id
 function update($id,$distancia,$rangomin,$rangomax){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
    $this->conex->query("UPDATE banda SET distancia='$distancia'rangoMin='$rangomin',rangoMax='$rangomax' WHERE id='$id'");
  }
  function updateapiBandas($json){
    $datos = json_decode($json,true);
    $id = $datos['id'];
    $distancia = $datos['distancia'];
    $rangomin = $datos['rangomin'];
    $rangomax = $datos['rangomax'];
      $this->conex->query("UPDATE banda SET distancia='$distancia',rangoMin='$rangomin',rangoMax='$rangomax' WHERE id='$id'");
    }
  //Borrar un banda por su id
  function delete($id){
    $this->conex->query("DELETE FROM banda WHERE id='$id'");
  }

}






?>
