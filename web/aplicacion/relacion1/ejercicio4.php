<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$array=array(
    array(),
    array(),
    array(),
    array(),
    array()
);
const FILAS=5;
$datos=[
    "array"=> $array,
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

for($i=0; $i<count($datos["array"]); $i++){
   for($e=0; $e<=$i; $e++){
     $datos["array"][$i][$e]=($i+1);
   }
   
}
mostrar_array_bidimensional($datos["array"]);

   
}

//al final se ponen las funciones
function mostrar_array_bidimensional($array){
    for($i=0; $i<count($array);$i++){
        for($e=0; $e<count($array[$i]);$e++){
            echo $array[$i][$e] . " ";
        }
        echo "<br>";
    }
}
