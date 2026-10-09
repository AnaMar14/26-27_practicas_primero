<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//array bidimensional
$array=array(
    array(),
    array(),
    array(),
    array(),
    array()
);
$array2=array();
const FILAS=5;
$datos=[
    "array"=> $array,
    "array2"=>$array2,
    "filas"=> FILAS
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 4");
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
echo "Array creado mediante bucles for<br>";
/*Rellenamos el array con los valores */
for($i=0; $i<count($datos["array"]); $i++){
   for($e=0; $e<=$i; $e++){
     $datos["array"][$i][$e]=($i+1);
   }
   
}
/*Mostramos el array con un método que lo recorre mediante
foreach */
mostrar_array_bidimensional($datos["array"]);


echo "Array creado mediante bucles for usando una constante FILAS<br>";

for($i=0; $i<$datos["filas"]; $i++){
   for($e=0; $e<=$i; $e++){
     $datos["array2"][$i][$e]=($i+1);
   }
   
}

mostrar_array_bidimensional($datos["array2"]);
}

//al final se ponen las funciones
/**
 * Método al que se le pasa un array bidimensional por parámetro,
 * lo recorre y muestra en la vista
 * @param array $array Array bidimensional a recorrer
 * @return void 
 */
function mostrar_array_bidimensional($array){
    foreach($array as $fila){
        foreach($fila as $elementos){
            echo $elementos . " ";
        }
        echo "<br>";
    }
}
