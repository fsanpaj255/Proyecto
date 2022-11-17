<?php
class Diploma {
    private $id;
    private $tipo;
    private $minPuntos;
    private $concurso_id;


    

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
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of minPuntos
     */
    public function getMinPuntos()
    {
        return $this->minPuntos;
    }

    /**
     * Set the value of minPuntos
     */
    public function setMinPuntos($minPuntos): self
    {
        $this->minPuntos = $minPuntos;

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
}

?>