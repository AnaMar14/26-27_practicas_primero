<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$vector=array(
    "primera"=> 12.56,
    24=> true,
    67=> 23.76
);
//uso de las funciones
//array_keys y array_values para extraer las claves
//y valores del array
$keys= array_keys($vector);
$values=array_values($vector);
//datos basicos
$datos=[
    "vector"=>$vector,
    "keys"=>$keys,
    "values"=>$values
];




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 6");
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


echo("Recorrido del array usando un while con funciones:<br>");
//key empieza apuntando al valor de la primera clave del array y con "next"
//dentro del bucle iremos moviendo el puntero hacia adelante
    while(key($datos["vector"])!=null){
        echo "Clave: " . key($datos["vector"]) . " Valor: " . current($datos["vector"]) . "<br>";
        next($datos["vector"]);
    };

echo "<br>";


echo("Recorrido del array usando 'array_keys' y 'array_values':<br>");
//mostramos los valores dentro de nuestros arrays "keys" y "values" asginando que el contador 
//llegue hasta el tamaño del array "keys", por ejemplo
    for($cont=0; $cont<count($datos["keys"]);$cont++){
       
        //mostramos para el mismo índice su respectivo valor en el array keys y en el array values
        echo "Clave: " . $datos["keys"][$cont] . " Valor: " . $datos["values"][$cont] . "<br>";
          
    }
   
}

//al final se ponen las funciones

