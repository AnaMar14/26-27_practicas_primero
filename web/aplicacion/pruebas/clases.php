<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
define("NUME",25);
const NUME1=56;
        
        
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
       "TEXTO"=> "Clases",   
     ] 
];


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Clases",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    
    <?php 

  
       
                 
?>
  
<?php
}

class Prueba { 
 
   private ?int $_codigo; 
   private ?string $_nombre; 
 
   //el constructor es privado 
   private function __construct(?int $codigo = null, ?string $nombre = 
null) { 
     $this->_codigo = $codigo; 
     $this->_nombre = $nombre; 
   } 
 
   //constructor estatico publico 
   public static function desdeDatos(int $codigo, string $nombre): static 
   { 
    if($codigo<0)
        $codigo=0;
     //creo el objeto usando static 
     $obj = new static($codigo, $nombre); 
     return $obj; 
   } 
 
   //constructor estatico publico 
   public static function desdeJson(string $json): static  
   { 
     $datos = json_decode($json); 
     return new static($datos->codigo, $datos->nombre); 
   } 
 
} 
 
$datos=["codigo"=>12,"nombre"=>"prueba2"]; 
$datosJSon=json_encode($datos); 
 
//no hay constructor público, por lo que tengo que  
//llamar a las funciones de creación estaticas 
$p1 = Prueba::desdeDatos(5, 'Objeto'); 
$p2 = Prueba::desdeJson($datosJSon);  

class Unica{
    private static bool $_creada=false;
    public int $numero=2;

    private function __construct(int $_var=0){
        $this->numero(12);
    }

    public static function crear (int $numero){
        if($this->)
            return $this->objeto; 
    }

}
