<?php
class Concurso {
    private $id;
    private $nombre;
    private $desc;
    private $f_ini;
    private $f_fin;
    private $f_ini_insc;
    private $f_fin_unsc;
    private $cartel;

    /**
     * Get the value of id
     */
    

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
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of f_ini
     */
    public function getFIni()
    {
        return $this->f_ini;
    }

    /**
     * Set the value of f_ini
     */
    public function setFIni($f_ini): self
    {
        $this->f_ini = $f_ini;

        return $this;
    }

    /**
     * Get the value of f_fin
     */
    public function getFFin()
    {
        return $this->f_fin;
    }

    /**
     * Set the value of f_fin
     */
    public function setFFin($f_fin): self
    {
        $this->f_fin = $f_fin;

        return $this;
    }

    /**
     * Get the value of f_ini_insc
     */
    public function getFIniInsc()
    {
        return $this->f_ini_insc;
    }

    /**
     * Set the value of f_ini_insc
     */
    public function setFIniInsc($f_ini_insc): self
    {
        $this->f_ini_insc = $f_ini_insc;

        return $this;
    }

    /**
     * Get the value of f_fin_unsc
     */
    public function getFFinUnsc()
    {
        return $this->f_fin_unsc;
    }

    /**
     * Set the value of f_fin_unsc
     */
    public function setFFinUnsc($f_fin_unsc): self
    {
        $this->f_fin_unsc = $f_fin_unsc;

        return $this;
    }

    /**
     * Get the value of cartel
     */
    public function getCartel()
    {
        return $this->cartel;
    }

    /**
     * Set the value of cartel
     */
    public function setCartel($cartel): self
    {
        $this->cartel = $cartel;

        return $this;
    }
}

?>