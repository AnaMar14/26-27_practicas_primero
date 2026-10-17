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
       "TEXTO"=> "Ejercicio 3",   
     ] 
];
//datos basicos
$cadenaRandom=""; //aqui gaurdaremos el resultado hecho con un array de caracteres
$cadenaRandom2=""; //aqui guardaremos el resultado hecho con un array de caracteres en ASCII
$caracteres="ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz123456789";
$arrayCaracteres=[]; //aqui guardaremos la variable caracteres convertida a array
$arrayASCII=[]; //y aqui su conversion en ASCII
const LONGITUDCADENA=20; //constante que indica la longitud total de la cadena random
$datos=[
    "cadenaRandom"=> $cadenaRandom,
    "cadenaRandom2"=>$cadenaRandom2,
    "caracteres"=>$caracteres,
    "arrayCaracteres"=>$arrayCaracteres,
    "longitudCadena"=> LONGITUDCADENA,
    "arrayASCII"=>$arrayASCII
];



//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 3",$barra);
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
echo("<br>Cadena random mediante array de caracteres: <br>");
$datos["arrayCaracteres"]= mb_str_split($datos["caracteres"]); //convertimos la cadena con letras y números a un array 

//rellenamos la variable cadenaRandom con caracteres random que se encuentran dentro de ese array
for($i=0;$i<$datos["longitudCadena"];$i++){
    $numRandom=random_int(0,(count($datos["arrayCaracteres"])-1)); //numero random que se genera desde el num 0 
                                                                    //hasta la longitud de arrayCaracteres menos uno
    $datos["cadenaRandom"]= $datos["cadenaRandom"] . $datos["arrayCaracteres"][$numRandom];
   
}
//mostramos como ha quedado cadenaRandom
echo $datos["cadenaRandom"]."<br>";


/******************************************************************************************************************** */

echo("<br>Cadena random mediante array de códigos ASCII: <br>");

foreach($datos["arrayCaracteres"] as $indice => $caracter){
    $datos["arrayASCII"][$indice]= ord($caracter); //pasamos cada caracter del array "arrayCaracteres"
                                                    //a su valor ascii y lo introducimos dentro de otro array
}

//rellenamos la variable cadenaRandom2 con valores random del array "arrayASCII"
for($i=0;$i<$datos["longitudCadena"];$i++){
    $numRandom=random_int(0,(count($datos["arrayASCII"])-1)); //numero random que se genera desde el num 0 
                                                                    //hasta la longitud de arrayASCII menos uno
    $datos["cadenaRandom2"]= $datos["cadenaRandom2"] . mb_chr($datos["arrayASCII"][$numRandom]);
                                                    //la funcion chr pasa un número en ASCII a su caracter correspondiente.
                                                    //Como nosotros usamos carácteres multibytes(Ñ,ñ) usamos la función mb_chr
                                                    //que sirve para lo mismo pero funciona con caracteres multibytes.
                                                  
   
}
//mostramos como ha quedado cadenaRandom2
echo $datos["cadenaRandom2"];
}



//al final se ponen las funciones

