<?php
include_once 'libreria.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//se crean y rellenan con funciones las variables en el controlador
$array=array();
$num1= 22;
$num2= 0;
$num3= 84;
$num4=1;
$num5=2;
$num6=3;
$funcion1=function (int $a, int $b):int{ 
     return pow($a,$b);  
};
$funcion2=function (int $a, int $b):int{ 
     return $a/$b;  
};
$funcion3=function (int $a, int $b):int{ 
     return max($a,$b);  
};

$array2=array("casa","perro","cortacésped","tejado","parque");
$datos=[
    "array"=>$array,
    "num1"=>$num1,
    "num2"=>$num2,
    "num3"=>$num3,
    "num4"=>$num4,
    "num5"=>$num5,
    "num6"=>$num6,
    "funcion1"=> $funcion1,
    "funcion2"=> $funcion2,
    "funcion3"=> $funcion3,
    "array2"=> $array2


];
$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 3", 
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 3",$barra);
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

echo ("<br>EJERCICIO 1<br>");
echo("-----------------------------------------------------------<br>");
echo ("Número que vamos a añadir al array: " . $datos["num1"] 
. "<br>Veces llamadas a la función: " . $datos["num2"]  . "<br>"
. "Posición: primeraPos<br>");

if(cuentaVeces($datos["array"] ,"primeraPos",$datos["num1"],$datos["num2"])){

        echo ("Recorrido array: <br>");
                foreach($datos["array"] as $clave=> $valor){
                    echo ("Clave: " . $clave . "=> Valor: " . $valor);
                }
        echo ("<br>Veces llamadas a la función: " . $datos["num2"] . "<br>");

} else{
        echo "Error: La posición no puede ser '2daw' ni 'primera'";
        echo ("<br>Veces llamadas a la función: " . $datos["num2"] . "<br>");
}

echo("-----------------------------------------------------------<br>");

/*********************************************************************************************************/


echo ("Número que vamos a añadir al array: " . $datos["num3"]
. "<br>Veces llamadas a la función: " . $datos["num2"] . "<br>"
. "Posición: 2daw<br>");

if(cuentaVeces($datos["array"],"2daw",$datos["num3"],$datos["num2"])){

            echo ("Recorrido array: <br>");
                    foreach($datos["array"] as $clave=> $valor){
                        echo ("Clave: " . $clave . "=> Valor: " . $valor);
                    }
            echo ("<br>Veces llamadas a la función: " . $datos["num2"] . "<br>");
} else{
    echo "Error: La posición no puede ser '2daw' ni 'primera'";
    echo ("<br>Veces llamadas a la función: " . $datos["num2"] . "<br>");
}

echo("-----------------------------------------------------------<br>");

/*********************************************************************************************************/

echo ("<br>EJERCICIO 2<br>");
echo(generarCadena()."<br>");
echo(generarCadena(20)."<br>");
echo (generarCadena(0)?"":"Error: no se pueden crear cadenas de longitud 0 o menor. <br>"."<br>");


/*********************************************************************************************************/

echo ("<br>EJERCICIO 3<br>");
echo("Suma de 56+88+34= " . operaciones(1,56,88,34) . "<br>");
echo("Resta de 14,16 y 24 al número 100= " . operaciones(2,100,14,16,24) . "<br>");
echo("Multiplicación de 2*3*4*5*6= " . operaciones(3,2,4,5,6) . "<br>");
echo("Sumar posiciones pares y posiciones impares y restar los dos resultados(1,2,3,4,5,6,7,8,9)= " . operaciones(4,1,2,3,4,5,6,7,8,9) . "<br>");

/*********************************************************************************************************/

echo ("<br>EJERCICIO 4<br>");
echo("-----------------------------------------------------------<br>");
echo("Le pasamos a la función 'devuelve()' los números 1, 2 y 3: <br>");
echo("Primer parámetro antes de llamar a la función: " . $datos["num4"] . "<br>");
echo("Resultado función: " . devuelve($datos["num4"],$datos["num5"],$datos["num6"]). "<br>");
echo("Primer parámetro después de llamar a la función: " . $datos["num4"]. "<br>");
echo("-----------------------------------------------------------<br>");
echo("Le pasamos a la función 'devuelve()' solo el número 6(valores por defecto=2 y 3): <br>");
echo("Primer parámetro antes de llamar a la función: " . $datos["num4"] . "<br>");
echo("Resultado función: " . devuelve($datos["num4"]). "<br>");
echo("Primer parámetro después de llamar a la función: " . $datos["num4"]. "<br>");
echo("-----------------------------------------------------------<br>");
echo("Le pasamos a la función 'devuelve()' solo los números 11 y 2 (valores por defecto=2 y 3): <br>");
echo("Primer parámetro antes de llamar a la función: " . $datos["num4"] . "<br>");
echo("Resultado función: " . devuelve($datos["num4"],$datos["num5"]). "<br>");
echo("Primer parámetro después de llamar a la función: " . $datos["num4"]. "<br>");
echo("-----------------------------------------------------------<br>");
echo("Le pasamos a la función 'devuelve()' solo los números 16 y 2 como tercer parámetro (valores por defecto=2 y 3): <br>");
echo("Primer parámetro antes de llamar a la función: " . $datos["num4"] . "<br>");
echo("Resultado función: " . devuelve($datos["num4"],num3:$datos["num5"]). "<br>");//llamamos al parametro "num3" por nombre
echo("Primer parámetro después de llamar a la función: " . $datos["num4"]. "<br>");

/*********************************************************************************************************/

echo ("<br>EJERCICIO 5<br>");
echo("Suma de 5 y 5: <br>");
echo(hacerOperacion("suma",5,5). "<br>");
echo("Resta de 5 y 5: <br>");
echo(hacerOperacion("resta",5,5). "<br>");
echo("Multiplicación de 5 y 5: <br>");
echo(hacerOperacion("multiplicacion",5,5). "<br>");
echo("División de 5 y 5: <br>");
echo(hacerOperacion("divison",5,5)?"":"Error: operación no disponible <br>");

/*********************************************************************************************************/

echo ("<br>EJERCICIO 6<br>");
echo("Funciones flecha: <br>");
echo("Función que eleva un número entero a una potencia indicada: (5 y 5)  <br>");
echo(llamadaAFuncion(5,5,fn($a,$b)=>pow($a,$b)) . " <br>");
echo("Función que divide un número entero entre otro entero: (100 y 10)  <br>");
echo(llamadaAFuncion(100,10,fn($a,$b)=>($a/$b))." <br>");
echo("Función que devuelve el mayor de dos números: (32 y 9)  <br>");
echo(llamadaAFuncion(32,9,fn($a,$b)=>max($a,$b))." <br>");

echo("<br>Funciones anónimas asignadas a variables: <br>");
echo("Función que eleva un número entero a una potencia indicada: (5 y 5)  <br>");
echo(llamadaAFuncion(5,5,$datos["funcion1"]) . " <br>");
echo("Función que divide un número entero entre otro entero: (100 y 10)  <br>");
echo(llamadaAFuncion(100,10,$datos["funcion2"])." <br>");
echo("Función que devuelve el mayor de dos números: (32 y 9)  <br>");
echo(llamadaAFuncion(32,9,$datos["funcion3"])." <br>");

/*********************************************************************************************************/

echo ("<br>EJERCICIO 7<br>");
echo("Array sin ordenar: <br>");
foreach($datos["array2"] as $elem){
    echo ($elem . "<br>");
}
echo("<br>Array ordenado: <br>");
ordenar($datos["array2"]);
foreach($datos["array2"] as $elem){
    echo ($elem . "<br>");
}

}