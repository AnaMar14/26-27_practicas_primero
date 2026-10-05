<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 2");
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
$cont=1;
for( $i=1; $i<=6; $i++){
    
   echo "Lanzamiento $cont del dado: " . mt_rand(1,6) . "<br>";
   $cont++;
}
    
}

//al final se ponen las funciones

