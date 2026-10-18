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
       "TEXTO"=> "Ejercicio 2",   
     ] 
];
//datos basicos
$cadena="Está la niña en casa";
$cadenaConA="EstáAlaAniñaAenAcasa";
$datos=[
    "cadena"=>$cadena,
    "cadenaConA"=> $cadenaConA
];




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 2",$barra);
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
echo ("Cadena recorrida con foreach y mb_str_split: <br>");

foreach(mb_str_split($datos["cadena"]) as $indice => $caracter){ //mb_str_split convierte un string con valores
                                                        //multibytes a un array(en utf-8 los caracteres ingleses son de 1 byte,
                                                        //pero las letras con tilde o la ñ ocupan 2. Por eso str_split no nos sirve)
    
    $espacios= str_repeat("&nbsp",$indice);//str_repeat repite una cadena introducida el número de 
                                            //veces indicado 
    
    echo ( $espacios . $caracter . "<br>");
}

/***************************************************************************************** */

// echo ("Cadena recorrida con for, strlen, y []: <br>");
// //no funciona bien porque los carácteres multibytes no los muestra
// for($i=0; $i<(strlen($datos["cadena"]));$i++){ //strlen devuelve la longitud de una cadena
//     $espacios= str_repeat("&nbsp",$i);
   
//     echo ( $espacios . $datos["cadena"][$i] . "<br>");
// }

/***************************************************************************************** */
// echo ("Cadena recorrida con for y substr: <br>");
// //tampoco funciona bien porque los carácteres multibytes no los muestra
// for($i=0; $i<=(strlen($datos["cadena"]));$i++){ //mb_Strlen devuelve la longitud de una cadena
//     $espacios= str_repeat("&nbsp",$i);
   
//     echo ( $espacios . substr($datos["cadena"], $i,1) . "<br>");
// }

/***************************************************************************************** */
echo ("Cadena recorrida con for y mb_substr: <br>");
//Esta vez si funciona porque mb_substr hace lo mismo que substr pero orientado a carácteres multibytes
for($i=0; $i<=(strlen($datos["cadena"]));$i++){ //mb_Strlen devuelve la longitud de una cadena
  
    $espacios= str_repeat("&nbsp",$i);
   
    echo ( $espacios . mb_substr($datos["cadena"], $i,1) . "<br>");
}

/***************************************************************************************** */

// Mostrar la cadena en orden inverso, (usar índices negativos, no invertir la cadena)
// con cada carácter en una línea distinta y con los espacios en blanco
// correspondientes (desde 0 hasta n espacios en blanco), los caracteres pares en
// mayúscula (0, 2, …) y los impares en minúscula (1, 3, 5, …), y extrayendo los
// caracteres con mb_substr.

echo("Cadena mostrada en orden inverso usando mb_substr: ");
//esta vez el bucle empieza por el numero total de caracteres y termina en 0
for($i=(strlen($datos["cadena"])); $i>=0;$i--){ 

    $espacios= str_repeat("&nbsp",$i);
    //depende de si el caracter esta en una posicion par o impar, con mb_convert_case convertimos 
    // caracteres multibytes a mayuscula o minuscula segun indiquemos
   if($i%2==0){
        echo ( $espacios . mb_convert_case(mb_substr($datos["cadena"], $i,1),MB_CASE_UPPER) . "<br>");
   } else{
        echo ( $espacios . mb_convert_case(mb_substr($datos["cadena"], $i,1),MB_CASE_LOWER) . "<br>");
   }
    
}

/***************************************************************************************** */

echo("<br>Cadena separada en partes mediante una 'A' entre cada palabra:<br> ");
//mb_split separa una cadena mediante un delimitador indicado o una expresion regular indicada
foreach(mb_split("A",$datos["cadenaConA"]) as $seccion){
    echo ($seccion . "<br>");
}
   
/***************************************************************************************** */

echo("<br>Sustitución del espacio después de 'niña' por '/mujer':<br> ");
echo (mb_ereg_replace("(?<=niña)[[:blank:]]","/mujer ",$datos["cadena"])); //las funciones mb_ereg no usa
                                                                //delimitadores en la expresion regular que
                                                                //se le introduce (no se usa /)
//esta funcion busca una parte del string que coincida con la expresion regular introducida y la reemplaza
//(?<=niña) busca que posteriormente del espacio [[:blank:]] se encuentre la palabra niña
}



//al final se ponen las funciones

