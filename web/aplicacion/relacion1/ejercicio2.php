<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$numTiradas=1000;
$tiradas=0;
$cantidades= array();
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

    for( $i=1; $i<=6; $i++){
        echo "Lanzamiento $i del dado: " . mt_rand(1,6) . "<br>";
       
    }
    echo"<br>";
    echo"<br>";
    echo "Lanzado el dado $numTiradas veces <br>";

  
    while($tiradas<$numTiradas){
         $dado= mt_rand(1,6);
         switch($dado){
            case 1: 
                $cantidades[0]++;
                break;
            case 2: 
                $cantidades[1]++;
                break;
            case 3: 
                $cantidades[2]++;
                break;
            case 4:
                $cantidades[3]++;
                break;
            case 5: 
                $cantidades[4]++;
                break;
            case 6: 
                $cantidades[5]++;
                break;
        }
        $tiradas++;
    }
    // valor del porcentaje= (cantidadTotal * porcentaje) / 100

    // valor del porcentaje*100= cantidadTotal * porcentaje

    // (valor del porcentaje * 100) / cantidadTotal= porcentaje
    echo "el 1 ha salido $cantidades[0] con un porcentaje de ". ($cantidades[0]*100)/$numTiradas ."%<br>";
    echo "el 2 ha salido $cantidades[1] con un porcentaje de ". ($cantidades[1]*100)/$numTiradas ."%<br>";
    echo "el 3 ha salido $cantidades[2] con un porcentaje de ". ($cantidades[2]*100)/$numTiradas ."%<br>";
    echo "el 4 ha salido $cantidades[3] con un porcentaje de ". ($cantidades[3]*100)/$numTiradas ."%<br>";
    echo "el 5 ha salido $cantidades[4] con un porcentaje de ". ($cantidades[4]*100)/$numTiradas ."%<br>";;
    echo "el 6 ha salido $cantidades[5] con un porcentaje de ". ($cantidades[5]*100)/$numTiradas ."%<br>";

}

//al final se ponen las funciones

