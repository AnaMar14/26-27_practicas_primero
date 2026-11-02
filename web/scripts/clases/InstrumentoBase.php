<?php

abstract class instrumentoBase{

    //variables
    private string $_descripcion;
    protected int $_age;
    protected static int $_creados=0;
    protected int $_orden;

    //constructor
    public function __construct(string $desc, int $age=10)
    {
        $this->_descripcion=$desc;
        $this->_age=$age;
        $this->_orden = ++self::$_creados;
        
    }

    //getters y setters
    public function getDescripcion():string{
        return $this->_descripcion;
    }

    public function setDescripcion(string $desc):void{
        $this->_descripcion=$desc;
    }

    public function getAge():int{
        return $this->_age;
    }

    //funciones abstractas
    public abstract function sonido():string;
    public abstract  function afinar():string;

    //funciones
    public function envejecer(){
        $this->_age++;
    }

    //toString
    public function __toString(): string
    {
    return "Instrumento con descripcion " . $this->getDescripcion() .
    ", instancia " . $this->_orden .
    " de un total de " . self::$_creados .
    ". Tiene " . $this->_age .
    " años. La clase es " . get_class($this) . ".";
    }


}