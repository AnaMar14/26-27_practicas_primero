<?php
include 'libreria.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//¿EN LA RELACION 3 LAS VARIABLES SE HACEN EN LA VISTA O EN EL CONTROLADOR?
$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 3", 
    ]
];
//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 3",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    
    
    
 
 

<?php
$array=array();
$num1= 22;
$num2= 0;
echo ("Número que vamos a añadir al array: " . $num1 
. "<br>Veces llamadas a la función: " . $num2 . "<br>");

if(cuentaVeces($array,"primeraPos",$num1,$num2)){
    echo ("Recorrido array: <br>");
    foreach($array as $clave=> $valor){
        echo ("Clave: " . $clave . "=> Valor: " . $valor);
    }
    echo ("<br>Veces llamadas a la función: " . $num2 . "<br>");
} else{
    echo "Error: La posición no puede ser '2daw' ni 'primera'";
}

echo("-----------------------------------------------------------<br>");
/**************************************************************************** */

$num1= 84;

echo ("Número que vamos a añadir al array: " . $num1 
. "<br>Veces llamadas a la función: " . $num2 . "<br>");

if(cuentaVeces($array,"2daw",$num1,$num2)){
    echo ("Recorrido array: <br>");
    foreach($array as $clave=> $valor){
        echo ("Clave: " . $clave . "=> Valor: " . $valor);
    }
    echo ("<br>Veces llamadas a la función: " . $num2 . "<br>");
} else{
    echo "Error: La posición no puede ser '2daw' ni 'primera'";
    echo ("<br>Veces llamadas a la función: " . $num2 . "<br>");
}

echo("-----------------------------------------------------------<br>");

/**************************************************************************** */

$num1= 67;

echo ("Número que vamos a añadir al array: " . $num1 
. "<br>Veces llamadas a la función: " . $num2 . "<br>");

if(cuentaVeces($array,"pos2",$num1,$num2)){
    echo ("Recorrido array: <br>");
    foreach($array as $clave=> $valor){
        echo ("Clave: " . $clave . "=> Valor: " . $valor . "<br>");
    }
    echo ("Veces llamadas a la función: " . $num2 . "<br>");
} else{
    echo "Error: La posición no puede ser '2daw' ni 'primera'";
    echo ("<br>Veces llamadas a la función: " . $num2 . "<br>");
}

}