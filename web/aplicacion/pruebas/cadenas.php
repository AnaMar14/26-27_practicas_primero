<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
define("NUME",25);
const NUME1=56;
        
        
//controlador

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
       "TEXTO"=> "Cadenas",   
     ] 
];


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Pruebas basicas",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    El ni&ntilde;o me ha escrito una carta.
    Qu&eacute; &lt;&gt; bonita.
    <?php 

  
       
                 
?>
  
<?php
}

