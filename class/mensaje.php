<?php
class Mensaje {
    private $id;
    private $fecha;
    private $banda_id;
    private $modo_id;
    private $participacion_id;
    private $valido;

  

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
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     */
    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of banda_id
     */
    public function getBandaId()
    {
        return $this->banda_id;
    }

    /**
     * Set the value of banda_id
     */
    public function setBandaId($banda_id): self
    {
        $this->banda_id = $banda_id;

        return $this;
    }

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
     * Get the value of participacion_id
     */
    public function getParticipacionId()
    {
        return $this->participacion_id;
    }

    /**
     * Set the value of participacion_id
     */
    public function setParticipacionId($participacion_id): self
    {
        $this->participacion_id = $participacion_id;

        return $this;
    }

    /**
     * Get the value of valido
     */
    public function getValido()
    {
        return $this->valido;
    }

    /**
     * Set the value of valido
     */
    public function setValido($valido): self
    {
        $this->valido = $valido;

        return $this;
    }
}

?>