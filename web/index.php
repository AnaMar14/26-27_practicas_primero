<?php
include_once(dirname(__FILE__) . "/cabecera.php");
//controlador
$barra=[
    [   "TEXTO"=> "Inicio", 
        "ENLACE"=> "/index.php",
      
    ],
    [
        "TEXTO"=> "pruebas"
    ],
  
];

//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("2DAW APLICACION",$barra);
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
   <a href="./aplicacion/pruebas/index.php">Acceso a pruebas</a>
<?php
}
//al final se ponen las funciones
