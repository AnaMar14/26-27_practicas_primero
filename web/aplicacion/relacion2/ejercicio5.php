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
       "ENLACE" =>"/aplicacion/relacion1/index.php",
     ], 
       [ 
       "TEXTO"=> "Ejercicio ",   
     ] 
];
//datos basicos
$cadena = <<<EOT
<u><h1>Hola</h1></u>
22 7 14 8 4 
aflosev2207@g.educaand.es  cperrep1604@g.educaand.es
EOT;
$datos=[
    
];



//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO ",$barra);
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
  
   
<?php
// Crea una cadena que ocupe varias líneas (usa nowdoc o heredoc). En líneas distintas debe
// aparecer: varias etiquetas html (<>), varios números (de 1 o varias cifras) y varias direcciones
// de correo electrónico (formato aaaa@aaaa.aa).
// Define expresiones regulares apropiadas para localizar los distintos elementos creados
// (etiqueta, numero y dirección de email) en la cadena.
// Muestra la posición/elemento encontrado usando las expresiones regulares definidas y la
// función preg_match.
   
}

//al final se ponen las funciones

