<?php

class repositorioParticipacion {

    private PDO $conexion;

    public function __construct($con)
    {
        $this->conexion = $con;
    }



    public function getParticipantes($id):array
    {
       //array de participantes
        $participantes = [];
        $sql = ("SELECT p.participante_id FROM concurso c 
        JOIN participacion p ON p.concurso_id = c.id
        WHERE c.id LIKE $id");
            $consulta = $this->conexion->query($sql);
            $dato = $consulta->fetchAll(PDO::FETCH_ASSOC);

            for ($i=0; $i < count($dato); $i++) { 
                # Añadimos
                $idParticipacion = $dato[$i]['participante_id'];
                $participantes[] = $idParticipacion;
            }
        return $participantes;
    }

    public function get($idConcurso,$idParticipante)
    {
        # Encontramos la participación
        $sql = ("SELECT * FROM participacion WHERE concurso_id LIKE $idConcurso AND participante_id LIKE $idParticipante");
            $consulta = $this->conexion->query($sql);
            $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            # cogemos todas las columnas
            $id = $datos[0]['id'];
            $rol = $datos[0]['rol'];
            $con = $datos[0]['concurso_id'];
            $part = $datos[0]['participante_id'];
            $participacion = new Participacion();
            $participacion->ingresaParticipacion($id,$rol,$con,$part);
            return $participacion;
    }

    public function getNumJueces($id)
    {
        # Cogemos los jueces del concurso con ID dada
        $sql = ("SELECT COUNT(id) FROM PARTICIPACION WHERE concurso_id LIKE $id AND rol LIKE 'juez'");
            $consulta = $this->conexion->query($sql);
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        
    } 

    public function cuantos($id)
    {
        $sql = ("SELECT COUNT(id) FROM PARTICIPACION WHERE concurso_id LIKE $id");
            $consulta = $this->conexion->query($sql);
            $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        
    }

    public function delete($id)
    {
        # borramos según el id
        $sql = ("DELETE FROM participacion WHERE id LIKE $id");
        $this->conexion->beginTransaction();
        $devolveer = $this->conexion->exec($sql);
        $this->conexion->commit();
        return $devolveer;
    }

    public function set(Participacion $part):int | false
    {
        $rol = $part->getJuez();
        $concurso = $part->getConcursoId();
        $participante = $part->getParticipanteId(); 
        # Preparamos el insert
        $sql = "INSERT INTO participacion VALUES (null,'$rol',$concurso,$participante)";
        $result = $this->conexion->exec($sql);
        return $result;
    
    }
    public function getById($id): Participacion
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