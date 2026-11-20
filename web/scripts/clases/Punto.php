<?php

class Punto{
    public const COLORES=[
        "pink"=> ["nombre"=>"rosa", "rgb"=>[255,201,251]],
        "purple"=> ["nombre"=>"morado", "rgb"=>[186,171,219]],
        "blue"=> ["nombre"=>"azul", "rgb"=>[160,205,235]],
        "orange"=> ["nombre"=>"naranja", "rgb"=>[247,180,104]]

    ];

    public const GROSORES=[
       1 =>"fino", 
       2 => "medio",
        3 =>"grueso"
    ];

    private int $_x;
    private int $_y;
    private string $_color;
    private int $_grosor;





    //getters y setters
    public function getX()
    {
        return $this->_x;
    }

    public function setX(int $x):bool
    {
        if(validaEntero($x,0,20000,0)){
              $this->_x = $x;
              return true;
        }
      

        return false;
    }

   
    public function getY()
    {
        return $this->_y;
    }

    public function setY(int $y)
    {
         if(validaEntero($y,0,20000,0)){
              $this->_y = $y;
              return true;
        }
      

        return false;
    }

   
    public function getColor()
    {
        return $this->_color;
    }


    public function setColor(string $color)
    {
        if(array_key_exists($color,$this::COLORES)){
            return true;
        }
        $this->_color = $color;

        return $this;
    }

    /**
     * Get the value of grosor
     */ 
    public function getGrosor()
    {
        return $this->_grosor;
    }

    /**
     * Set the value of grosor
     *
     * @return  self
     */ 
    public function setGrosor($grosor)
    {
        $this->_grosor = $grosor;

        return $this;
    }
}