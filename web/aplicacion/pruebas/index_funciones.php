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

$numero=variosParametros(25,"2aa8769",56);
$numero=variosParametros(25,"2");
$numero=variosParametros(25,par3:100);

$numero=suma(1,2,3,4,5,6,7,8,9,10);
$numero=suma1(1,2,3,4,5,6,7,8,9,10);

$r=[3,4,5,6,7,8,9,10];
$numero=suma(1,2,...$r);

$n1=15;
$otra="n1";
//variable variable
$numero=$$otra;

//variables funciones

$otra="suma";
$numero=$otra(1,2,3,4);

//funcion anonima
$func=function (float $a, float $b, float ...$resto): float
{
    $res = $a + $b;

    foreach ($resto as $num)
        $res += $num;

    return $res;
};

$numero=$func(1,2,3,4);
//funciones arrow
$s=function(int $a,int $b){
  return $a+$b;
};
$numero=$s(5,20);

$s=fn(int $a, int $b)=>$a+$b+$numero;
$numero=$s(29,20);

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

