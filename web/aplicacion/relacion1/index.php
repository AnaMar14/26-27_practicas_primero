<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 1");
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
    Ejercicios de la relación 1: 
    <br><br>
    <a href="ejercicio1.php">Ejercicio 1</a><br>
    <a href="ejercicio2.php">Ejercicio 2</a><br>
    <a href="ejercicio3.php">Ejercicio 3</a><br>
 
 

<?php
}