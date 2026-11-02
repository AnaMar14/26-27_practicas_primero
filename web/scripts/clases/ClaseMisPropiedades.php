<?php

class ClaseMisPropiedades implements Iterator
{
    //variables
    private array $_propiedades = array();
    public mixed $propPublica = null;
    private mixed $_propPrivada = 25;
    //variables para iterator
    private array $_claves = array();
    private int $_posicion = 0;


    //redefinicion __Set __Get 
    public function __set(string $nombre, mixed $valor): void
    {
        if ($nombre == "_propPrivada" || $nombre == "_propiedades") {
            throw new Exception("No se puede asignar la propiedad " . $nombre);
        }
        $this->_propiedades[$nombre] = $valor;
    }

    public function __get(string $nombre): mixed
    {
        if (array_key_exists($nombre, $this->_propiedades)) {
            return $this->_propiedades[$nombre];
        }
        return "No existe la propiedad " . $nombre;
    }

    //metodos para usar iterator
    public function rewind(): void
    {
        $this->_claves = array_keys($this->_propiedades);
        $this->_claves[] = "propPublica";
        $this->_claves[] = "_propPrivada";
        $this->_posicion = 0;
    }

    public function current(): mixed
    {
        $clave = $this->_claves[$this->_posicion];

        if ($clave == "propPublica") {
            return $this->propPublica;
        }
        if ($clave == "_propPrivada") {
            return $this->_propPrivada;
        }
        return $this->_propiedades[$clave];
    }

    public function key(): mixed
    {
        return "oi_" . $this->_claves[$this->_posicion];
    }

    public function next(): void
    {
        $this->_posicion++;
    }

    public function valid(): bool
    {
        return $this->_posicion < count($this->_claves);
    }
}