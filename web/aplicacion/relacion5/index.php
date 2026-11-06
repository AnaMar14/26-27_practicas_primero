<?php
include_once 'val_filter.php';
include_once 'val_normal.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
$num1=11;
\VALNORMAL\validaEntero($num1,1,10,3); //ejecutamos las funciones para las variables que acabamos de crear
$num2=5;
\VALFILTER\validaEntero($num2,1,10,3);

$num3=-8;
\VALNORMAL\validaReal($num3,-10,-1,-5); //ejecutamos las funciones para las variables que acabamos de crear
$num4=2.5;
\VALFILTER\validaReal($num4,1,2,1);

$fecha1="8/7/2026";
$fecha2="29/2/2026";
$fecha3="1-1-2022";

$hora1="22:2:2";
$hora2="22:61:34";
$hora3="12.30.00";

$correo1="juanñ pérez@gmail.com";
$correo2="ana@@gmail.com";
$correo3="juáanañ@g.educaand.es";

$cadena1="Pájaro";
$cadena2="Descampado";
$datos=[
  "num1"=>$num1,
  "num2"=>$num2,
  "num3"=>$num3,
  "num4"=>$num4,
  "fecha1"=>$fecha1,
  "fecha2"=>$fecha2,
  "fecha3"=>$fecha3,
  "hora1"=>$hora1,
  "hora2"=>$hora2,
  "hora3"=>$hora3,
  "correo1"=>$correo1,
  "correo2"=>$correo2,
  "correo3"=>$correo3,
  "cadena1"=>$cadena1,
  "cadena2"=>$cadena2

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

echo("<h3>Funcion Valida Real:<br></h3>");
echo("Funcion en val_normal con el valor -8:<br>");
echo($datos["num3"] . "<br>");
echo("Funcion en val_filter con el valor 2.5:<br>");
echo($datos["num4"]. "<br>");

echo("<h3>Funcion Valida Fecha:<br></h3>");
echo("Funcion en val_normal:<br>");
echo("Fecha antes de validar: " . $datos["fecha1"] . "<br>");
\VALNORMAL\validaFecha($datos["fecha1"],"1/1/2024");
echo("Fecha después de validar: " . $datos["fecha1"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Fecha antes de validar: " . $datos["fecha2"] . "<br>");
\VALFILTER\validaFecha($datos["fecha2"],"1/1/2024");
echo("Fecha después de validar: " . $datos["fecha2"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Fecha antes de validar: " . $datos["fecha3"] . "<br>");
\VALFILTER\validaFecha($datos["fecha3"],"1/1/2024");
echo("Fecha después de validar: " . $datos["fecha3"] . "<br>");


echo("<h3>Funcion Valida Hora:<br></h3>");
echo("Funcion en val_normal:<br>");
echo("Hora antes de validar: " . $datos["hora1"] . "<br>");
\VALNORMAL\validaHora($datos["hora1"],"00:00:00");
echo("Hora después de validar: " . $datos["hora1"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Hora antes de validar: " . $datos["hora2"] . "<br>");
\VALFILTER\validaHora($datos["hora2"],"00:00:00");
echo("Hora después de validar: " . $datos["hora2"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Hora antes de validar: " . $datos["hora3"] . "<br>");
\VALFILTER\validaHora($datos["hora3"],"00:00:00");
echo("Hora después de validar: " . $datos["hora3"] . "<br>");

echo("<h3>Funcion Valida Fecha:<br></h3>");
echo("Funcion en val_normal:<br>");
echo("Correo antes de validar: " . $datos["correo1"] . "<br>");
\VALNORMAL\validaEmail($datos["correo1"],"ejemplo@gmail.com");
echo("Correo después de validar: " . $datos["correo1"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_normal:<br>");
echo("Correo antes de validar: " . $datos["correo2"] . "<br>");
\VALNORMAL\validaEmail($datos["correo2"],"ejemplo@gmail.com");
echo("Correo después de validar: " . $datos["correo2"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Correo antes de validar: " . $datos["correo3"] . "<br>");
\VALFILTER\validaEmail($datos["correo3"],"ejemplo@gmail.com");
echo("Correo después de validar: " . $datos["correo3"] . "<br>");


echo("<h3>Funcion Valida Cadena:<br></h3>");
echo("Funcion en val_normal:<br>");
echo("Cadena antes de validar: " . $datos["cadena1"] . "<br>");
\VALNORMAL\validaCadena($datos["cadena1"],7,"nido");
echo("Cadena después de validar: " . $datos["cadena1"] . "<br>");
echo("<br>");
echo("<br>");
echo("Funcion en val_filter:<br>");
echo("Cadena antes de validar: " . $datos["cadena2"] . "<br>");
\VALFILTER\validaCadena($datos["cadena2"],5,"campo");
echo("Cadena después de validar: " . $datos["cadena2"] . "<br>");

}