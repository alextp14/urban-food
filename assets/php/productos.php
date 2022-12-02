<?php

abstract class productos {
    protected $idProducto;
    protected $nombreProducto;
    protected $precio;

    public function __construct($idProducto,$nombreProducto,$precio){
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
    }

    public function getIdProducto()
    {
        return $this->idProducto;
    }

    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }
}
?>