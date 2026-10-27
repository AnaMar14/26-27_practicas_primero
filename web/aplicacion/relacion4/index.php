<?php

include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//se crean y rellenan con funciones las variables en el controlador
// En el controlador de index.php, se definirán variables para el 
// acceso a las clases y se mostrará el funcionamiento de las distintas
// clases en la vista. 


// 1.- Crear la clase abstracta IntrumentoBase con el siguiente comportamiento. Definirla inicialmente 
// como no abstracta para probar su funcionamiento. Una vez probado se pasará a abstracta: - 
// Tiene el atributo descripción de tipo cadena. La descripción se puede fijar mediante el 
// constructor o mediante métodos get/set públicos (ej para propiedad cadena, métodos 
// getCadena/setCadena, no confundir con lo que veremos después como método mágico __get 
// y __set). Directamente no puede ser accesible. - 
// Tiene el atributo edad que no es accesible desde el exterior aunque si desde las clases 
// descendientes. Su valor por defecto será 10. Se tiene método get para devolver su valor. Se 
// asignará en el constructor.  
// Para definir los atributos con valor por defecto se declaran en la clase, con el valor por 
// defecto, se define un parámetro en el constructor con el valor por defecto y se asigna en el 
// constructor. Así garantizas que cuando se llame al constructor, si no se indica ningún valor, 
// - 
// se asigne el de por defecto.  - - - - 
// Se definen dos métodos abstractos: sonido (devuelve una frase que representa el sonido) y 
// afinar (devuelve una cadena con los pasos necesarios para afinar el instrumento) 
// Se define el método envejecer, que aumenta la edad del instrumento en un año. 
// Se tiene una variable de clase protegida que controla cuantos elementos se han creado y una 
// propiedad de instancia para indicar cuál es el orden de creación de la instancia. Cada vez 
// que se crea un instrumento se le asigna a la instancia el número de orden de creación del 
// instrumento actual y se incrementa el valor de la variable de clase. 
// Cuando se muestre en un echo aparecerá “instrumento con descripción XXXXX, instancia 
// 9999 de un total de 999. Tiene 999 años. La clase es XXXX”. La clase debe ser obtenida 
// mediante get_class.  (999 representa un numero, XXX representa una cadena) 
// No tiene la sobrecarga de propiedades por defecto. 
$datos=[
    


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



}