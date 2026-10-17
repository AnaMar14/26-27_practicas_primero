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
       "TEXTO"=> "Ejercicio 4",   
     ] 
];
//datos basicos
$valor1=17.5;
$valor2=379987.24;
$valor2=number_format($valor2,2, "," , "."); //con number_formar indicamos que tenga dos decimales, que los decimales
                                            //se muestren con comas, y que los miles se muentren con puntos
$valor2=str_pad($valor2,15," ",STR_PAD_RIGHT);//el valor de los espacios no los he podido mostrar 
                                                                //con str_pad ni con la opcion %^ 15 de printf
$datos=[
    "valor1"=>$valor1,
    "valor2"=>$valor2
];



//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 4",$barra);
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



printf("El primer valor  -%'015.1f-, el segundo valor -%s- ",$datos["valor1"],$datos["valor2"]);
//printf imprime por pantalla un string formateado
// '015 ->  ' significa que va a rellenar el hueco restante con el valor que le indiques
//          0 significa que el valor con el que rellenara los huecos es el numero 0
//          15 es el total que debe de ocupar la cadena y el número que tendrá en cuenta para rellenar los huecos 
//          hasta llegar a dicha cifra
// .1-> indica que solo tenga un decimal
// f-> indica que se muestre el string como numero flotante(float)
// s-> lo muestra como string, para no perder el formateo previo con number_format
}

//al final se ponen las funciones

