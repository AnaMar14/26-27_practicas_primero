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
        
        $errores["x"]= "La coordenada X debe de ser un número entre 0 y 500";
        
    }
    $yValido=validaEntero($datos["y"],0,500,$datos["y"]);
    if($yValido===false){
        $errores["y"]= "La coordenada Y debe de ser un número entre 0 y 500";
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
    <input type="number" name="y" id="y" placeholder="Coordenada Y" value="<?= htmlspecialchars($datos['y']) ?>">
    <span><?= $errores["y"] ?? "" ?></span>
    <br>
    <br>
    <label for="color">Elige un color:</label>
    <select name="color" id="color">
        <option value="rosa" <?= $datos["color"]==="rosa"? "selected":"" ?>>Rosa</option>
        <option value="morado" <?= $datos["color"]==="morado"? "selected":"" ?>>Morado</option>
        <option value="azul" <?= $datos["color"]==="azul"? "selected":"" ?>>Azul</option>
        <option value="naranja" <?= $datos["color"]==="naranja"? "selected":"" ?>>Naranja</option>
    </select>
    <br>
    <br>
    <label for="fino">Fino:</label>
    <input type="radio" value="fino" name="grosor" <?= $datos["grosor"]==="fino"? "checked":"" ?>>
    <label for="medio">Medio:</label>
    <input type="radio" value="medio" name="grosor" <?= $datos["grosor"]==="medio"? "checked":"" ?>>
    <label for="gordo">Gordo:</label>
    <input type="radio" value="gordo" name="grosor" <?= $datos["grosor"]==="gordo"? "checked":"" ?>>
    <span><?= $errores["grosor"] ?? "" ?></span>
    <br>
    <br>
    <input type="submit" value="Guardar" name="btnGuardar">


</form>
 

<?php
}