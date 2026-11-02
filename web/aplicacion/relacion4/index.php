<?php

include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
// $objInstrumentoBase= new instrumentoBase("Piano");
// $objInstrumentoBase2= new instrumentoBase("Trombón",5);
$insViento=new InstrumentoViento('metal', 3);
$insViento2=new InstrumentoViento('madera',8);
$array1=["material"=>"acero" , "edad"=>2];
$array2=["materiales"=>"acero" , "edades"=>3];
$flauta1=Flauta::CrearDesdeArray($array1);
$flauta2=clone $flauta1;
$objeto= new ClaseMisPropiedades();

$casos = EstadoCivil::casos();
$estadoAleatorio = $casos[array_rand($casos)];

$persona = Persona::registrarPersona(
    "Laura",
    "14/05/1999",
    "Calle Mayor 12",
    "Madrid",
    $estadoAleatorio
);
$datos=[
    // "objInstrumentoBase"=>$objInstrumentoBase,
    // "objInstrumentoBase2"=>$objInstrumentoBase2,
    "insViento1"=>$insViento,
    "insViento2"=>$insViento2,
    "flauta1"=>$flauta1,
    "flauta2"=>$flauta2,
    "persona"=>$persona,
    "objeto"=>$objeto

];
$barra=[
    [
        "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
    ],
    [
         "TEXTO"=> "Relación 4", 
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACIÓN 4",$barra);
cuerpo($datos); //llamo a la vista
finCuerpo();
// *******************************************************************************************

//vista
function cabecera() {}
//vista
function cuerpo($datos)
{
?>
<?php
    // echo ("EJERCICIO 1: <br>");
    // echo("Descripcion: " . $datos["objInstrumentoBase"]->getDescripcion() . "<br>");
    // echo("Edad: " . $datos["objInstrumentoBase"]->getAge(). "<br>");
    // echo("Funcion sonido: " . $datos["objInstrumentoBase"]->sonido(). "<br>");
    // echo("Funcion afinar: ". $datos["objInstrumentoBase"]->afinar(). "<br>");
    // echo("Funcion envejecer, resultado:". $datos["objInstrumentoBase"]->envejecer(). "<br>");
    // echo($datos["objInstrumentoBase"]->getAge(). "<br>");
    // echo("toString: ".$datos["objInstrumentoBase"]. "<br>");

    // echo("----------------------------------------------------------------------------<br>");

    
    // echo("Descripcion: " . $datos["objInstrumentoBase2"]->getDescripcion() . "<br>");
    // echo("Edad: " . $datos["objInstrumentoBase2"]->getAge(). "<br>");
    // echo("Funcion sonido: " . $datos["objInstrumentoBase2"]->sonido(). "<br>");
    // echo("Funcion afinar: ". $datos["objInstrumentoBase2"]->afinar(). "<br>");
    // echo("Funcion envejecer, resultado:". $datos["objInstrumentoBase2"]->envejecer(). "<br>");
    // echo($datos["objInstrumentoBase2"]->getAge(). "<br>");
    // echo("toString: ".$datos["objInstrumentoBase2"]. "<br>");
    

     echo ("EJERCICIO 3: <br>");
    echo("----------------------------------------------------------------------------<br>");
    echo("Descripcion: " . $datos["insViento1"]->getDescripcion() . "<br>");
    echo("Edad: " . $datos["insViento1"]->getAge(). "<br>");
    echo("Funcion sonido: " . $datos["insViento1"]->sonido(). "<br>");
    echo("Funcion afinar: ". $datos["insViento1"]->afinar(). "<br>");
    echo("Funcion envejecer, resultado:". $datos["insViento1"]->envejecer(). "<br>");
    echo($datos["insViento1"]->getAge(). "<br>");
    echo("toString: ".$datos["insViento1"]. "<br>");
    echo("----------------------------------------------------------------------------<br>");
    echo("Descripcion: " . $datos["insViento2"]->getDescripcion() . "<br>");
    echo("Edad: " . $datos["insViento2"]->getAge(). "<br>");
    echo("Funcion sonido: " . $datos["insViento2"]->sonido(). "<br>");
    echo("Funcion afinar: ". $datos["insViento2"]->afinar(). "<br>");
    echo("Funcion envejecer, resultado:". $datos["insViento2"]->envejecer(). "<br>");
    echo($datos["insViento2"]->getAge(). "<br>");
    echo("toString: ".$datos["insViento2"]. "<br>");
    echo("<br>");
    echo("<br>");



    echo ("EJERCICIO 4: <br>");
    echo("----------------------------------------------------------------------------<br>");
    echo("Descripcion: " . $datos["flauta1"]->getDescripcion() . "<br>");
    echo("Edad: " . $datos["flauta1"]->getAge(). "<br>");
    echo("Funcion sonido: " . $datos["flauta1"]->sonido(). "<br>");
    echo("Funcion afinar: ". $datos["flauta1"]->afinar(). "<br>");
    echo("Funcion envejecer, resultado:". $datos["flauta1"]->envejecer(). "<br>");
    echo($datos["flauta1"]->getAge(). "<br>");
    echo("toString: ".$datos["flauta1"]. "<br>");
    echo("<br>Método fabricación: " . $datos["flauta1"]->metodoFabricacion() . "<br>");
    echo("<br>Método reciclado: " . $datos["flauta1"]->metodoReciclado() . "<br>");
    echo("<br>Clonacion flauta1: " . $datos["flauta2"] . "<br>");
    echo("----------------------------------------------------------------------------<br>");
    echo("<br>");
    echo("<br>");




    echo ("EJERCICIO 5: <br>");
    echo("----------------------------------------------------------------------------<br>");
    echo($datos["persona"]);
    echo("<br>");
    echo("<br>");




    echo ("EJERCICIO 6: <br>");
    echo("----------------------------------------------------------------------------<br>");
    $datos["objeto"]->propPublica="publica";
    echo( "Propiedad publica: ".$datos["objeto"]->propPublica . "<br>");
   // $datos["objeto"]->_propPrivada="privada";  //no es valida al ser privada
    $datos["objeto"]->propiedad1=25;
    echo( "Propiedad1: ".$datos["objeto"]->propiedad1 . "<br>");
    $datos["objeto"]->propiedad2="cadena de texto";
    echo( "Propiedad2: ".$datos["objeto"]->propiedad2 . "<br>");
    echo ($datos["objeto"]->propiedad3); // esto debería dar un error al no haber asignado previamente la propiedad



}