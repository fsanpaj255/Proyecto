<?php

class repositorioParticipacion {

    private PDO $conexion;

    public function __construct($con)
    {
        $this->conexion = $con;
    }

    function participar($juez,$idparticipante,$idconcurso){
        $this->conex->query("INSERT INTO participacion VALUES(null,'$juez', '$idparticipante', '$idconcurso')");
    }


    function getparticipaciones($idParticipante)
    {
        //participacion del usuario del que tenga la id con el que se pueden sacar ademas todos los concursos
        $resultado = $this->conex->query("SELECT * FROM participacion WHERE  participante_id LIKE $idParticipante");
        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            $participacion = new Participacion();
              $participacion
              ->setId($fila['id'])
              ->setJuez($fila['juez'])
              ->setConcursoId($fila['concurso_id'])
              ->setParticipanteId($fila['participante_id']);
              $listadoparticipaciones[] = $participacion;
        return $listadoparticipaciones;
    }
}


     function delete($id)
    {
        //borramos segn el id
        $sql = ("DELETE FROM participacion WHERE id LIKE $id");
        $this->conexion->beginTransaction();
        $devolveer = $this->conexion->exec($sql);
        $this->conexion->commit();
        return $devolveer;
    }

     function getById($id): Participacion
    {
        $sql = ("select * FROM participacion 
        WHERE id = $id ");
        $consulta = $this->conexion->query($sql);
        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $id = $datos[0]['id'];
        $rol = $datos[0]['rol'];
        $concurso = $datos[0]['concurso_id'];
        $participante = $datos[0]['participante_id'];

        $participacion = new Participacion();
        $participacion->ingresaParticipacion($id, $rol, $concurso,$participante);

        return $participacion;
     
       
    }
    
}