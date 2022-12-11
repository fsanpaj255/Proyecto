<?php
class repositorioModo
{
   private $conex;
    
   public function __construct($conex)
    {
    $this->conex = $conex;
    }

//coger un banda
 function getModo($id)
{
    $registro = $this->conex->query("SELECT * from modo where id=$id");
    $datos = $registro->fetch();

    $modo = new Modo();
    $modo 
    ->setId($datos['id'])
    ->setNombre($datos['nombre'])
    ->setPremioId($datos['premio_id']);


    return $modo;

}
//Coger todos los bandas
 function getallModos()
{
    $resultado =  $this->conex->query("SELECT * from modo");

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    $modo = new Modo();
      $modo
      ->setId($fila['id'])
      ->setNombre($fila['nombre'])
      ->setPremioId($fila['premio_id']);
      $listadomodos[] = $modo;
    }

    return $listadomodos;
}


//Insertar nuevo modo 
function insert($modo)
{
    $nombre = $modo->getNombre();
    $premio_id = $modo->getPremioId();
   $this->conex->query("INSERT INTO modo VALUES(null,'$nombre', '$premio_id')");
}

 //Actualizar un  banda por su id
 function update($id,$nombre,$premio_id){
  //getid (que si la tiene la base de datos aunque nosotros la tengamos null)
    $this->conex->query("UPDATE modo SET nombre='$nombre',premio_id='$premio_id' WHERE id='$id'");
  }
  
  //Borrar un modo por su id
  function delete($id){
    $this->conex->query("DELETE FROM modo WHERE id='$id'");
  }

}





