<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Relación 1",   
       "ENLACE" =>"/aplicacion/relacion1/index.php",
     ], 
       [ 
       "TEXTO"=> "Ejercicio 3",   
     ] 
];
//variables
$array= array();
$array2= array();
$array3= array();
$arrayRelleno=array(1.34,"nueva");

//relleno de array con varias sentencias------------------------------------
$array[1]= "Luis Cernuda";
$array[16]= "Federico García Lorca";
$array[54]= "Jacinto Benavente";
//array_push empuja un dato al final del array, en su último índice
array_push($array,34);
$array[0]="cadena";
$array[1]=true;
$array[2]=1.345;
array_push($array, $arrayRelleno);

//relleno de array con una sentencia------------------------------------
 

    $array2= array(
        1 => "Miguel Ángel",
        16 => "Claude Monet",
        54 => "Donatello",
        55 => 34,
        0 => "cadena",
        1 => true,
        2 => 1.345,
        56 => $arrayRelleno
    );

//rellenamos el array con una sola sentencia
//y usando []----------------------------------------------------------------------------------------------------------

  

        $array3= [
        1 => "Michael Jackson",
        16 => "Dolly Parton",
        54 => "Amy Whinehouse",
        55 => 34,
        0 => "cadena",
        1 => true,
        2 => 1.345,
        56 => $arrayRelleno
        ];

 

//datos basicos
$datos=[
    "array" => $array,
    "array2" => $array,
    "array3" => $array,
    "arrayRelleno" => $arrayRelleno
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
    <br><br>
   
<?php



//usando varias sentencias-----------------------------------------------------
    echo "<br> Con varias sentencias: <br>";

    //mostramos los valores dentro del array 
    //con una funcion que lo recorre con un foreach
    mostrar_array($datos["array"]);

//con una sola sentencia---------------------------------------------------------
   
    echo("<br> Con una sola sentencia: <br>");
    mostrar_array($datos["array2"]);

// con una sola sentencia
//y usando []----------------------------------------------------------------------

    echo("<br> Con una sola sentencia usando ' [ ]  ': <br>");
    mostrar_array($datos["array3"]);
}

//al final se ponen las funciones
/**
 * Funcion que recorre y muestra los arrays con un for each
 *
 * @param array $array El array que queremos que muestre
 * @return void
 */
function mostrar_array($array){
  
    foreach($array as $key => $valor){
        
        if(!is_array($valor)){
            echo "Índice $key, valor: $valor <br>";
        }else{
            echo "Índice $key, valor: Array{<br>";
            foreach($valor as $key2 => $valor2){
                echo "&nbsp SubÍndice $key2, valor: $valor2 <br>";
            }
            echo "}<br>";
    }
}//end foreach
}
