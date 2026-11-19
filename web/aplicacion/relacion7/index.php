<?php
include_once '../../scripts/librerias/validacion.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador

$datos=[
    "x"=> "",
    "y"=> "",
    "color"=>"",
    "grosor"=>""
];
$errores=[];

if(isset($_POST["btnGuardar"])){
    $datos["x"]= (int)trim($_POST["x"] ?? "");
    $datos["y"]= (int)trim($_POST["y"] ?? "");
    $datos["color"]= trim($_POST["color"] ?? "");
    $datos["grosor"]= trim($_POST["grosor"] ?? "");

    //validar que x e y esta entre 0 y 500, si no está en el rango se devuelve -1 para indicar error
    $xValido=validaEntero($datos["x"],0,500,$datos["x"]);
    if($xValido===false){
        
        $errores["x"]= "La coordenada X debe de ser un número entre 0 y 100";
        
    }
    $validarY=validaEntero($datos["y"],0,500,-1);
    if($validarY===-1){
        $errores["y"]= "La coordenada Y debe de ser un número entre 0 y 100";
    }

    //validamos que se haya seleccionado un color
    if(empty($datos["color"])){
        $errores["color"]= "Debes de seleccionar un color.";
    }

    //validamos que se haya seleccionado un grosor
    if(empty($datos["grosor"])){
        $errores["grosor"]= "Debes de seleccionar un grosor";
    }

    //si no se produce ningun error (el array errores esta vacio)
    //creamos el punto.
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
cuerpo($datos,$errores); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($datos,$errores)
{
?>

<form action="index.php" method="post">
    <br>
    <br>
    <input type="number" name="x" id="x" placeholder="Coordenada X" value="<?= htmlspecialchars($datos['x']) ?>">
    <span><?= $errores["x"] ?? "" ?></span>
    <br>
    <input type="number" name="y" id="y" placeholder="Coordenada Y">
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
    <input type="submit" value="Guardar" name="btnGuardar">


</form>
 

<?php
}