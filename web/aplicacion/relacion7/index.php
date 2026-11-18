<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
if ($_SERVER["REQUEST_METHOD"] === "GET") {
   
}
$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 7", 
    ]
];
//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 7",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>

<form method="$_GET">
    <br>
    <br>
    <input type="number" name="corX" id="corX" placeholder="Coordenada X">
    <input type="number" name="corY" id="corY" placeholder="Coordenada Y">
    <br>
    <br>
    <select name="color" id="color">
        <option value="rosa">Rosa</option>
        <option value="morado">Morado</option>
        <option value="azul">Azul</option>
        <option value="naranja">Naranja</option>
    </select>
    <br>
    <br>
    <label for="fino">Fino:</label>
    <input type="radio" value="fino" name="grosor">
    <label for="medio">Medio:</label>
    <input type="radio" value="medio" name="grosor">
    <label for="gordo">Gordo:</label>
    <input type="radio" value="gordo" name="grosor">
    <br>
    <br>
    <input type="submit" value="Guardar">


</form>
 

<?php
}