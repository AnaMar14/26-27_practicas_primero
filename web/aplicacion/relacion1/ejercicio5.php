<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$vector=array(
    1=> "Esto es una cadena",
    "posi1"=> 25.67,
    ""=> false,
    "ultima"=> array(2,5,96),
    56=>23
);
//datos basicos
$datos=[
    "vector"=>$vector
];





//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 5");
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
//recorremos el array que nos llega del controlador con foreach
foreach($datos["vector"] as $indice => $elemento){
    //si elemento es un array mostramos su contenido uno a uno
    if(is_array($elemento)){
            //funcion que muestra un elemento de un array de forma básica
            echo "Posición: $indice, Contenido: (" . gettype($elemento) .")<br>";
            echo "Contenido del array: <br>";
                foreach($elemento as $subindice => $subelemento){
                        //funcion que muestra un elemento entero dentro de un array con un formato concreto
                         echo "&nbsp&nbsp "; 
                        mostrarElementoArrayEntero($subindice, $subelemento);
                      
                }
    }
    //si elemento es un entero
    else if(is_integer($elemento)){
            mostrarElementoArrayEntero($indice, $elemento);
    }
    //si elemento es un número real (usamos float)
    else if(is_float($elemento)){
            echo "Posición: $indice, Contenido: (" . gettype($elemento) .") $elemento que al cuadrado es: " . pow($elemento,2) . "<br>";
    } 
    //si elemento es una cadena
    else if (is_string($elemento)){
            echo "Posición: $indice, Contenido: (" . gettype($elemento) .") -$elemento- <br>";
    } 
    //si elemento es booleano
    else if(is_bool($elemento)){
            echo "Posición: $indice, Contenido: (" . gettype($elemento) .") " . ($elemento? "True":"False") . " y su opuesto es " . (!$elemento? "True":"False") . "<br>";
    }
    //otros casos
    else{
            echo "Posición: $indice, Contenido: (" . gettype($elemento) .") $elemento <br>";
    }
    
}//end foreach

}

/**Esta funcion han sido exclusivamente creada para no repetir código */

/**
 * @param string $indice Indice en el que se encuentra el elemento que vamos a mostrar
 * @param string $elemento Elemento del array que vamos a mostrar
 * @return void
 */
function mostrarElementoArrayEntero($indice, $elemento){
    echo "Posición: $indice, Contenido: (" . gettype($elemento) .") $elemento En binario:" . decbin($elemento) . "<br>";
}
//al final se ponen las funciones

