<?php
class Point {
    private $x;
    private $y;
    private $z;

    function __toString()
    {
        $point = "POINT('$this->x' '$this->y')'.'$this->z'";
    return $point; 
    }
    

    
    /**
     * Get the value of id
     */
   

    /**
     * Get the value of x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     */
    public function setX($x): self
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     */
    public function setY($y): self
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of z
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set the value of z
     */
    public function setZ($z): self
    {
        $this->z = $z;

        return $this;
    }
}

?>