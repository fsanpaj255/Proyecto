<?php
class Participacion {
    private $id;
    private $juez;
    private $concurso_id;
    private $participante_id;
   

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of juez
     */
    public function getJuez()
    {
        return $this->juez;
    }

    /**
     * Set the value of juez
     */
    public function setJuez($juez): self
    {
        $this->juez = $juez;

        return $this;
    }

    /**
     * Get the value of concurso_id
     */
    public function getConcursoId()
    {
        return $this->concurso_id;
    }

    /**
     * Set the value of concurso_id
     */
    public function setConcursoId($concurso_id): self
    {
        $this->concurso_id = $concurso_id;

        return $this;
    }

    /**
     * Get the value of participante_id
     */
    public function getParticipanteId()
    {
        return $this->participante_id;
    }

    /**
     * Set the value of participante_id
     */
    public function setParticipanteId($participante_id): self
    {
        $this->participante_id = $participante_id;

        return $this;
    }
}

?>