<?php
include_once 'val_filter.php';
include_once 'val_normal.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
$num1=11;
\VALNORMAL\validaEntero($num1,1,10,3); //ejecutamos las funciones para las variables que acabamos de crear
$num2=5;
\VALFILTER\validaEntero($num2,1,10,3);
$datos=[
  "num1"=>$num1,
  "num2"=>$num2

];
$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 5", 
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 5",$barra);
cuerpo($datos); //llamo a la vista
finCuerpo();
// *******************************************************************************************

//vista
function cabecera() {}
//vista
function cuerpo($datos)
{
?>
<?php
echo("<h3>Funcion Valida Entero:<br></h3>");
echo("Funcion en val_normal con el valor 11:<br>");
echo($datos["num1"] . "<br>");
echo("Funcion en val_filter con el valor 5:<br>");
echo($datos["num2"]. "<br>");


}