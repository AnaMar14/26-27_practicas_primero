<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

include_once("./mis_funciones.php");

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
$numero=doble(11);
//comprobacion
if($numero===false){
    //hay un error lo resuelvo
    $numero=10;
}

if($numero=doble($numero)===false){
    exit;
}
//datos basicos
$datos=[
    
];



//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO ",$barra);
cuerpo($numero);  //llamo a la vista
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
function cuerpo(int $numero)
{
?>
  
   
<?php
    echo ("El doble del numero es $numero".PHP_EOL);
    echo ("El número $numero es el doble de otro".PHP_EOL);
   
}

//al final se ponen las funciones

