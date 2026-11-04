<?php


/*
* Clase sobrecarga con el siguiente comportamiento
- Si la propiedad empieza por m o M la doy por buena,
- una propiedad sobrecargada siempre tendra el valor 254 
*/
class ClaseSobrecarga{
    public int $numero=10;

    //metodos magicos para control de la sobrecarga
    public function __set(string $name, mixed $value):void{

        throw new \Exception("La propiedad $name no existe");
    }
     public function __get(string $name):void{

        if(mb_substr(mb_strtoupper($name),0,1)!=="M")
        throw new \Exception("La propiedad $name no existe");
    }

    public function __isset(string $name):bool
    {
        
        return false;
    }

    public function __unset(string $name):void
    {
        //throw new \Exception('Not implemented');
    }

}