<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//variables
$array= array();
$array2= array();
$array3= array();
$arrayRelleno=array(1.34,"nueva");
$datos=[
    "array" => $array,
    "array2" => $array,
    "array3" => $array,
    "arrayRelleno" => $arrayRelleno
];
//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 3");
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

//rellenamos el array con varios valores y en distintos indices------------------------------------------------

    //usando varias sentencias
    echo "<br> Con varias sentencias: <br>";
    $datos["array"][1]= "Luis Cernuda";
    $datos["array"][16]= "Federico García Lorca";
    $datos["array"][54]= "Jacinto Benavente";
    //array_push empuja un dato al final del array, en su último índice
    array_push($datos["array"],34);
    $datos["array"][0]="cadena";
    $datos["array"][1]=true;
    $datos["array"][2]=1.345;
    array_push($datos["array"], $datos["arrayRelleno"]);

    //mostramos los valores dentro del array 
    //con una funcion que lo recorre con un foreach
    mostrar_array($datos["array"]);

//rellenamos el array con una sola sentencia----------------------------------------------------------------------
    echo("<br> Con una sola sentencia: <br>");

    $datos["array2"]= array(
        1 => "Miguel Ángel",
        16 => "Claude Monet",
        54 => "Donatello",
        55 => 34,
        0 => "cadena",
        1 => true,
        2 => 1.345,
        56 => $datos["arrayRelleno"]
    );

    mostrar_array($datos["array2"]);

//rellenamos el array con una sola sentencia
//y usando []----------------------------------------------------------------------------------------------------------

    echo("<br> Con una sola sentencia usando ' [ ]  ': <br>");

        $datos["array3"]= [
        1 => "Michael Jackson",
        16 => "Dolly Parton",
        54 => "Amy Whinehouse",
        55 => 34,
        0 => "cadena",
        1 => true,
        2 => 1.345,
        56 => $datos["arrayRelleno"]
        ];

    mostrar_array($datos["array3"]);
}

//al final se ponen las funciones
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
