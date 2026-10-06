<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

const NUME1=56;
define("NUME",25);
//controlador
//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("array");
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    <br><br>
    <?php 
    $myArray[3]="valor";
    $myArray[7]=1234;
    $myArray["Nueva"]=24;
    $myArray[]="otro";
   

   
   
    $total=0;
    $total=1;
    foreach($myArray as $i=>$valor){
        $total=$myArray[$i];
        $total=
    }

    ?>
  
<?php
}