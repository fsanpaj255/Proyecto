<?php
class Modo {
    private $id;
    private $nombre;
    private $premio_id;


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
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of premio_id
     */
    public function getPremioId()
    {
        return $this->premio_id;
    }

    /**
     * Set the value of premio_id
     */
    public function setPremioId($premio_id): self
    {
        $this->premio_id = $premio_id;

        return $this;
    }
}

?>