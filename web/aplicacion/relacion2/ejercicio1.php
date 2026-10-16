<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Relación 2",   
       "ENLACE" =>"/aplicacion/relacion2/index.php",
     ], 
       [ 
       "TEXTO"=> "Ejercicio 1",   
     ] 
];
$extra="Hasta luego";
$cadena1="Hola, $extra";
$cadena2='Adiós $extra';
//El texto heredoc se comporta como un string entre 
//comillas dobles, pero sin tener comillas dobles.
$cadena3 = <<<EOT
Cadena hecha con Heredoc
Cadena 1: "$cadena1"
EOT;
//con nowdoc el texto se muestra tal cual está escrito. Es decir 
//por ejemplo si escribimos una variable no se mostrará su contenido
//si no literalmente su nombre "$variable1"
$cadena4= <<<'EOT'
Cadena hecha con Nowdoc
Cadena 2: "$cadena2"
EOT;
$cadena5= "<b>Hello</b>";
$cadena6=<<<EOT
    <b>Hello</b>
EOT;
$cadena7=<<<'EOT'
    <b>Hello</b>
EOT;

$datos=[
    "cadena1"=> $cadena1,
    "cadena2"=> $cadena2,
    "cadena3"=> $cadena3,
    "cadena4"=> $cadena4,
    "cadena5"=> $cadena5,
    "cadena6"=> $cadena6,
    "cadena7"=> $cadena7
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 1",$barra);
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
// Escribe distintas cadenas usando “, ‘, HEREDOC y NOWDOC incluyendo variables,
// etiquetas html y caracteres especiales como ‘, “, á, é, ñ. Muestra las cadenas y comprueba que
// el código fuente es legible (no se tiene una sola línea con todo seguido). Haz que se muestren
// las etiquetas html (no se ejecuten)
echo("Cadena con comillas dobles: $datos[cadena1] <br>");
echo("Cadena con comillas simples:  $datos[cadena2]<br>");
echo("Cadena con Heredoc: $datos[cadena3]<br>");
echo("Cadena con Nowdoc: $datos[cadena4] <br>");
echo("Etiquetas HTML en cadena normal: $datos[cadena5]<br>");
echo("Etiquetas HTML en Heredoc: $datos[cadena6]<br>");
echo("Etiquetas HTML en Nowdoc: $datos[cadena7]<br>");

   
}

//al final se ponen las funciones

