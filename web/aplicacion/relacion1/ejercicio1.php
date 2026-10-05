<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 1");
cuerpo();  //llamo a la vista
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
function cuerpo()
{
?>
    <br><br>
   
<?php

    //Ejemplos de round
    echo "Uso de la función round redondeando a 3 decimales
    : ";
    echo round(4.556, 3)."<br>";

    echo "Uso de la función round redondeando a 2 decimales
    : ";
    echo round(4.556, 2)."<br>";

    echo "Uso de la función round redondeando a 1 decimales
    : ";
    echo round(4.556, 1)."<br>";

    //Ejemplos de floor, redondea al entero más bajo
    echo "5,66 redondeado con floor: " . floor(5.66) . "<br>";
    echo "5,15 redondeado con floor: " . floor(5.15) . "<br>";
   
    //Ejemplo de pow, eleva un número a una potencia
    echo "5 elevado a 5: " . pow(5,5) . "<br>";
    //Ejemplo de sqrt, calcula la raíz cuadrada de un número
    echo "Raiz cuadrada de 81: " . sqrt(81) . "<br>";
    //Ejemplo de pasar entero a hexadecimal 
    echo "12 en hexadecimal: " . dechex(12) . "<br>";
    //Pasar de base 4 a base 8
    echo "Pasar número 12 en base 4 a base 8: " . base_convert(12, 4, 8) . "<br>";
    //Convertir de binario a decimal
    echo "Pasar número 11011 de binario a decimal: " . bindec(11011) . "<br>";
    //Ejemplo de la función max, te devuelve el valor más grande de una 
    // lista de valores que se le pasa
    echo "El valor más grande la lista 12,67,99,243,564,356:    " . max(12,67,99,243,564,356) . "<br>";

    //Definición de variables
    $binario= 10101;
    $octal=12;//sería 10 en base 10
    $hexadecimal="D";//sería 13 

    echo "$binario en decimal: " . bindec($binario) . "<br>";
    echo "$octal (número octal) en decimal: " . octdec($octal) . "<br>";
    echo "$hexadecimal (número hexadecimal) en decimal: " . hexdec($hexadecimal) . "<br>";
}

//al final se ponen las funciones

