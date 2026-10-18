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
       "TEXTO"=> "Ejercicio 5",   
     ] 
];
//datos basicos
$cadena = <<<EOT
<h1>Hola</h1>
<u>Hasta luego</u>
22 
7
14
8
4 
aflosev2207@g.educaand.es 
cperrep1604@g.educaand.es
EOT;

$pattern1="/\<[[:alnum:]]+\>.+/"; // los signos "<" y ">" escapados, dentro cualquier valor alfanumérico una o mas veces,
                                  //y justo después cualquier caracter 1 o más veces
$pattern2="/\b[0-9]+\b/"; //las "\b" son para indicar que ahi empieza o termina la expresion que vamos a buscar.
                         //asi nos aseguramos que solo busque los numeros aislados y no los que estan dentro
                          //de los correos, que estan precedidos o seguidos de letras
$pattern3="/[[:alnum:]]+\@[a-z]+\.[a-z]+/";


$matches1= array(); //creamos los arrays en los que guardaremos las coincidencias 
$matches2= array();  //que nos pasen la funcion preg_match_all
$matches3= array();
preg_match_all($pattern1,$cadena,$matches1); //le pasamos el patron a seguir, la cadena donde buscar el patron
preg_match_all($pattern2,$cadena,$matches2);  //y el array en el que guardará las coinciddencias
preg_match_all($pattern3,$cadena,$matches3);


$datos=[
    "cadena"=>$cadena,
    "patron1"=>$pattern1,
    "patron2"=>$pattern2,
    "patron3"=>$pattern3,
    "matches1"=>$matches1,
    "matches2"=>$matches2,
    "matches3"=>$matches3
];



//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 5",$barra);
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

echo("Elementos localizados dentro del Heredoc: <br>");

      echo(" <br> Etiquetas HTML: <br>");
      
      mostrarArraysMatches($datos["matches1"],$datos["cadena"]);//funcion que recorre array matches

    /**************************************************************************************** */
      echo(" <br> Números: <br>");
      mostrarArraysMatches($datos["matches2"],$datos["cadena"]);

    /**************************************************************************************** */
      echo(" <br> Correos: <br>");
      mostrarArraysMatches($datos["matches3"],$datos["cadena"]);



}
/**
 * Función que muestra el contenido dentro de un array match
 * rellenado por la función preg_match_all
 * 
 * @param array $arrayMatch, array que vamos a recorrer
 * @param string $cadena, cadena completa en la que aparece la coincidencia almacenada dentro del arrayMatch,
 *                         para mostrar la posicion en la que se encuentra dicha coincidencia dentro de la cadena
 *                          completa
 * @return void
 */
function mostrarArraysMatches($arrayMatch,$cadena){
  foreach($arrayMatch as $match){ //recorremos el array mostrando las coincidencias almacenadas
      if(is_array($match )){ //si el elemento dentro del array es otro array, este lo recorremos tambien, mostrando su valor
        foreach($match as $valor){
          echo htmlspecialchars( $valor)  . " En la posición: " . strpos($cadena,$valor) . "<br>";
          //hemos añadido htmlspecialchars por si hay escritas etiquetas html y strpos para
          //indicar en que posicion se encuentra la coincidencia dentro de la cadena completa
        }
      }
   }
}

