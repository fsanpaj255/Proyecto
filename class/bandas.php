<?php
class Banda {
    private $id;
    private $distancia;
    private $rangoMin;
    private $rangoMax;

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
     * Get the value of distancia
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set the value of distancia
     */
    public function setDistancia($distancia): self
    {
        $this->distancia = $distancia;

        return $this;
    }

    /**
     * Get the value of rangoMin
     */
    public function getRangoMin()
    {
        return $this->rangoMin;
    }

    /**
     * Set the value of rangoMin
     */
    public function setRangoMin($rangoMin): self
    {
        $this->rangoMin = $rangoMin;

        return $this;
    }

    /**
     * Get the value of rangoMax
     */
    public function getRangoMax()
    {
        return $this->rangoMax;
    }

    /**
     * Set the value of rangoMax
     */
    public function setRangoMax($rangoMax): self
    {
        $this->rangoMax = $rangoMax;

        return $this;
    }
}

?>