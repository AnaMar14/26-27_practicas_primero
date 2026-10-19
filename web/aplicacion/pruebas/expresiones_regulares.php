<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");


//controlador
const NUME1=56;
define("NUME",25);
$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Pruebas",   
       "ENLACE" =>"/aplicacion/pruebas/index.php",
     ], 
       [ 
       "TEXTO"=> "Expresiones regulares",   
     ] 
];

$cadena='tienes 25 años';
//buscar años
$exp= '/años/';
$resultado=[];

preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);

//buscar años
$exp= '/[0123456789+]/';
$exp= '/[0-9]/';
$exp= '/\d+/';
$exp= '/\d{1,}/';
$exp='/[[:digit:]]+/';
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);

//si busco un numero con dos cifras
$exp= '/\d{2}/';
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);

//buscar un numero real
$cadena='tienes 54 Años 258.34 años';
$exp="/\d+\.\d+/";
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);


//modificadores
//no disintgue mayusculas y minusculas con i
$exp= '/años/i';
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);


//subpatrones
//quiero encontrar en un número real la parte decimal
//
$cadena='tienes 54 Años 258.34 años';
$exp="/\d+\.(\d+)/";
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);

//cuantificador
$cadena="/*primer comentario*/";
$exp="/[\]\*.*?\*[\]/";
preg_match($exp,$cadena,$resultado,PREG_OFFSET_CAPTURE);


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Expresiones regulares",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{

     $miArray[3]=23;
     $miArray[7]=1234;
     $miArray[]=54;
     
      $total=0;

      $final=count($miArray);
      for($i=0;$i<$final;$i++){
           if (isset($miArray[$i]))
                $total+=$miArray[$i];
               else
                 $final++;
    }

     $miArray["nueva"]=24;


    $total=0;
    $total1=0;
    foreach($miArray as $i=>$valor)
        {
            $total+=$miArray[$i];
            $total1+=$valor;
        }
}