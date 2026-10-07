<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

const NUME1=56;
define("NUME",25);
//controlador

$barra=[
    [   "TEXTO"=> "Inicio", 
        "ENLACE"=> "/index.php",
      
    ],
    [
        "TEXTO"=> "pruebas",
        "ENLACE"=> "/aplicaciones/pruebas/index.php",
    ],
    [
        "TEXTO"=> "eje.basicos",
        
    ],
  
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("pruebas basicas",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    <br><br>esto es html
    <?php 
      
         echo "klñfffdj"; //esto es un comentario

        $var1=25;
        $cadena="esto es una cadena";

        $var1+=12;
        echo $var1;

        $una_cadena="hola";
        $unaCadena="adios";

        $var1-=17;

        echo "$var1";

        $unaCadena=45;
        echo $unaCadena;
        if (isset($cadena2))
            echo $cadena2;

        $real=1234.567891234567891;
        $real+=0.4321090;

        //$real=12/0;
        echo "El número es \$var1<br>".PHP_EOL;
        echo 'El número es $var1<br>'.PHP_EOL;

        $real=null;

        echo "El número real $real";

        $var=125;
        $tipo= gettype($var);
        $var=(string)$var;
        $tipo= gettype($var);
        settype($var,"double");
        $tipo= gettype($var);
        $var=intval($var);
        $tipo= gettype($var);

        $var="0";
        if($var){
            $cadena="var no vale false";
        }
        $var="0";
        if("0000"){
            $cadena="var no vale false";
        }

        $var="";
        if($var){
            $cadena="var no vale false";
        }

        $var=0;
        if($var){
            $cadena="var no vale false";
        }

         $var=1;
        if($var){
            $cadena="var no vale false";
        }

        $var=1+true;
        $var=1+1.5;
        $var=1+"1hola";
        $var=1+"1.5hola";
        //$var=1+"hola";
        //$var=1+[];
        $aux=125;
        $var="hola " .$aux;
        $aux=true;
        $var="hola " .$aux;
        $aux=[];
      //  $var="hola " .$aux;
        $aux="adios";
        $var="hola " .$aux;

        //referencia
        $var1=100;
        $var2=$var1;
        $var3=&$var1;
        $var2=150;
        $var3=200;

        unset ($var3);

        
        $var1+=NUME;

        $var1+=NUME1;

        //operadores
        $var=15/2;

        if("25"==25){
            $var="iguales";
        }
         if("25hola"==25){
            $var="iguales";
        }
        if("25"===25){
            $var="iguales";
        }
        if("25"!=25){
            $var="distintos";
        }
        if("25"!==25){
            $var="iguales";
        }
        $var=14>25;
        $var=14<25;
        $var=14<=>25;

        if(isset ($var3))
            $var=$var3;
        else if(isset($mivar))
            $var=$mivar;
            else
                $var=27;
         $var=$var3??$mivar??27;

         $var=0b11111;
         $var=$var>>1;
         $var=$var<<1;

         $var=0b1010 & 0b0101;
         $var=0b1010 || 0b0101;
         $var=7;
         if($var=1)
            $cadena="uno";
         elseif ($var==2)
            $cadena="dos";
                else
                    $cadena="otro";
        $var=1;
        switch($var)
        {
            case 1:$cadena="uno";
            case 2:$cadena="dos";
            default:$cadena="otro";
        }
    ?>
  
<?php
}