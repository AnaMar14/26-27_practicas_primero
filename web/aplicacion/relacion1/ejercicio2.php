<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//variables
const NUM_TIRADAS=1000;
//contador de tiradas para el while
$tiradas=0;
//array donde guardaremos el total de veces que sale cada número
$cantidades= array(0,0,0,0,0,0);
$datos=[
    "numTiradas"=> NUM_TIRADAS,
    "tiradas"=> $tiradas,
    "cantidades"=> $cantidades
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 2");
cuerpo($datos);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() 
{
    ?>
    
<!--esto va en el head-->
<?php

}

//vista
function cuerpo($datos)
{
?>
    <br><br>
   
<?php
    //bucle para generar un random 6 veces
    for( $i=1; $i<=6; $i++){
        echo "Lanzamiento $i del dado: " . mt_rand(1,6) . "<br>";
       
    }
    echo"<br>";
    echo"<br>";

    //simulamos lanzar el dado el número de veces indicadas en 
    //la variable "numTiradas"
    echo "Lanzado el dado " . $datos['numTiradas'] . " veces <br>";

  
    while($datos['tiradas']<$datos['numTiradas']){
         $dado= mt_rand(1,6);
    //según el resultado del dado sumamos +1 al index correspondiente en el array.
    // en este array el número dentro del índice 0 representa el número de veces que ha
    //salido "1" en el dado, el del índice 1 el número de veces que ha salido "2"... 
    //así sucesivamente
         switch($dado){
            case 1: 
                $datos['cantidades'][0]++;
                break;
            case 2: 
                $datos['cantidades'][1]++;
                break;
            case 3: 
                $datos['cantidades'][2]++;
                break;
            case 4:
                $datos['cantidades'][3]++;
                break;
            case 5: 
                $datos['cantidades'][4]++;
                break;
            case 6: 
                $datos['cantidades'][5]++;
                break;
        }
        $datos['tiradas']++;
    }
  
    //enseñamos por pantalla el total de veces que ha salido cada número y su porcentaje de aparición en esta tirada
    // (valor del porcentaje * 100) / cantidadTotal= porcentaje
    echo "el 1 ha salido " . $datos['cantidades'][0] . " con un porcentaje de ". ($datos['cantidades'][0]*100)/$datos['numTiradas'] ."%<br>";
    echo "el 2 ha salido " . $datos['cantidades'][1] . " con un porcentaje de ". ($datos['cantidades'][1]*100)/$datos['numTiradas'] ."%<br>";
    echo "el 3 ha salido " . $datos['cantidades'][2] . " con un porcentaje de ". ($datos['cantidades'][2]*100)/$datos['numTiradas'] ."%<br>";
    echo "el 4 ha salido " . $datos['cantidades'][3] . " con un porcentaje de ". ($datos['cantidades'][3]*100)/$datos['numTiradas'] ."%<br>";
    echo "el 5 ha salido " . $datos['cantidades'][4] . " con un porcentaje de ". ($datos['cantidades'][4]*100)/$datos['numTiradas'] ."%<br>";
    echo "el 6 ha salido " . $datos['cantidades'][5] . " con un porcentaje de ". ($datos['cantidades'][5]*100)/$datos['numTiradas'] ."%<br>";

}

//al final se ponen las funciones

