<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");


//controlador

$barra=[
     [
       "TEXTO"=> "Inicio",
       "ENLACE" =>"/index.php",
     ],
       [ 
       "TEXTO"=> "Pruebas",   
       "ENLACE" =>"/aplicacion/pruebas/index.php",
     ], 
       [ 
       "TEXTO"=> "Prueba imagen",   
     ] 
];

$nombreFichero=RUTABASE."/imagenes/pruebaImagen.jpg";
$crear=false;

if($crear){
  $imagen= imagecreatetruecolor(250,250);

  //genero el color azul

  $color=imagecolorallocate($imagen,0,0,255);
  //rellena un rectangulo
  imagefilledrectangle($imagen,10,10,190,190,$color);

  //dibujo una linea blanca
  $color=imagecolorallocate($imagen,255,255,255);
  imagefilledrectangle($imagen,10,10,100,15,$color);

  imagejpeg($imagen,$nombreFichero);
}

if(isset($_GET["descargar"])){

  $imagen=imagecreatefromjpeg($nombreFichero);
  $color=imagecolorallocate($imagen,255,255,255);
  imagestring($imagen,2,10,150,"marca agua",$color);
  header('Content-Type: image/jpeg');
  header('Content-Disposition: attachment; filename="pruebaImagen.jpg"');
  imagejpeg($imagen);
  exit;
}


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Prueba imagen",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {


}
//vista
function cuerpo()
{
  ?>
  <img src="/imagenes/pruebaImagen.jpg" alt="imagen">
  <a href="?descargar">Descargar</a>
<?php
   
    
}