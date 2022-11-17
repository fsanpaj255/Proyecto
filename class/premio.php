<?php
class Premio {
    private $modo_id;
    private $concurso_id;
    private $premio;


    /**
     * Get the value of modo_id
     */
    public function getModoId()
    {
        return $this->modo_id;
    }

    /**
     * Set the value of modo_id
     */
    public function setModoId($modo_id): self
    {
        $this->modo_id = $modo_id;

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
     * Get the value of premio
     */
    public function getPremio()
    {
        return $this->premio;
    }

    /**
     * Set the value of premio
     */
    public function setPremio($premio): self
    {
        $this->premio = $premio;

        return $this;
    }
}

?>