<?php

final class Flauta extends InstrumentoViento implements IFabricable{

    //constructor privado
    private function __construct(string $material, int $age){
        parent::__construct($material,$age);
    }

    //constructor estatico
    public static function CrearDesdeArray(array $array): static
    {
        // Si la clave no existe, se usan los valores por defecto
        $material = $array["material"] ?? "madera";
        $edad = $array["edad"] ?? 15;

        return new static($material, $edad);
    }

    //metodo clonar
    public function __clone()
    {
        $this->_age=0;
        $this->_orden = ++self::$_creados;
    }

    //metodos de la interfaz
     public function metodoFabricacion():string{// Devuelve los pasos para fabricar el elemento
        return "1. Selección y preparación del material<br>
                2. Corte a la longitud base<br>
                3. Construcción de la embocadura y el bisel<br>
                4. Marcación matemática de los agujeros tonales<br>
                5. Perforación progresiva<br>
                6. Afinación final y pulido";
     }
    public function metodoReciclado():string{ // Devuelve el método de reciclado que se debe aplicar al elemento según su fabricación.
        return "1. Desmontaje y separación de piezas mecánicas <br>
                2. Tratamiento del cuerpo según su material (triturado de plásticos, fundición de metales o compostaje de maderas)<br>
                3. Procesamiento en plantas de reciclaje industrial<br>
                4. Transformación en nueva materia prima";
    }
}