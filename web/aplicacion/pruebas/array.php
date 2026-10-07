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
   $miArray[3]="valor";
    $miArray[7]=1234;
   //miArray['nueva']=54;
    $miArray[]=54;



    $total=$miArray[6];


    $final=count($miArray);
    for($i=0;$i<($final);$i++){
        if (isset($miArray[$i]))
    $total=$miArray[$i]+$total;
        else
        $total++;
    }

    $miArray["nueva"]=54;
    $total1=0;
    foreach($miArray as $i=>$valor){
        $total=$miArray[$i];
        $total1+=$valor;
    }
    ?>
  
<?php
}