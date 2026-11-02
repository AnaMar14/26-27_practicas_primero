<?php
class InstrumentoViento extends instrumentoBase{

    //variables
    protected string $_material;


    //constructor
    public function __construct(string $material="madera",int $age=15)
    {
        parent::__construct('Instrumento de viento', $age);
        $this->_material=$material;
       
        
    }

    //funciones
    public final function afinar():string{
        return "1. Calentar el instrumento tocando unos minutos. <br>
                2. Encender un afinador cromático de referencia.<br>
                3. Emitir una nota clara con tu embocadura habitual.<br>
                4. Mirar si el afinador indica que el tono está alto o bajo.<br>
                5. Ajustar el instrumento: alargar el tubo si está alto o acortarlo si está bajo.<br>
                6. Volver a comprobar la afinación hasta que esté centrada.<br>";
    }

    public function sonido():string{
        return "Sonido de " . $this->getDescripcion();
    }

    //toString
    public function __toString(): string
    {
        return parent::__toString() . "<br>Instrumento de material " . $this->_material;
    }

}