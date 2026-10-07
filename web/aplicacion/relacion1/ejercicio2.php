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
$numTiradas=1000;
$num1=0;
$num2=0;
$num3=0;
$num4=0;
$num5=0;
$num6=0;
$cont=1;
    for( $i=1; $i<=6; $i++){
        echo "Lanzamiento $cont del dado: " . mt_rand(1,6) . "<br>";
        $cont++;
    }
    echo"<br>";
    echo"<br>";
    echo "Lanzado el dado $numTiradas veces <br>";

    for($i=1;$i<=$numTiradas;$i++){
        $dado= mt_rand(1,6);
        switch($dado){
            case 1: 
                $num1++;
                break;
            case 2: 
                $num2++;
                break;
            case 3: 
                $num3++;
                break;
            case 4:
                $num4++; 
                break;
            case 5: 
                $num5++;
                break;
            case 6: 
                $num6++;
                break;
        }
    }

    
}

//al final se ponen las funciones

