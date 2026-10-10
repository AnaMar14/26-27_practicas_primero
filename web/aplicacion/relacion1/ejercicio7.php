<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

//datos basicos




//dibuja la plantilla de la vista
inicioCabecera("Mi aplicación");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 7");
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
   
<?php
   echo "Pruebas con la función date: <br><br>";
   

        echo "Fecha actual en formato 'd/m/Y' :<br>";
            echo date("d/m/Y") . "<br>";
        //F muestra el mes escrito completo, l el día de la semana escrito completo
        echo "Fecha actual en formato 'dia d, mes mmmm año yyyy, día de la semana dd' :<br>";
            echo date("d, F Y, l") . "<br>";

        echo "Hora actual en formato 'hh:mm:ss' :<br>";
            echo date("H:i:s") . "<br>";

        echo "Mostrar todo lo anterior para la fecha 29/3/2024 a 12:45 :<br>";
        //orden parámetros mara mktime: hora, minutos, segundos, mes, dia, año
            echo date("d/m/Y", mktime(12, 45, 0, 3, 29, 2024)) . "<br>"; 
            echo date("d, F Y, l", mktime(12, 45, 0, 3, 29, 2024)) . "<br>"; 
            echo date("H:i:s", mktime(12, 45, 0, 3, 29, 2024)) . "<br>"; 
            
        echo "Mostrar todo lo anterior para la fecha actual menos 12 días y 4 horas :<br>";
            $fechaActual=date("d/m/Y H:i:s");
            //strtotime a partir de cualquier string de una fecha te lo convierte a unidades unix timestamp,
            //y a la función date se le puede pasar el formato unix timestamp para que lo pase al formato
            //que le indiques
            echo date("d/m/Y",strtotime($fechaActual . "-12 days, -4 hours")) . "<br>";
            echo date("d, F Y, l",strtotime($fechaActual . "-12 days -4 hours")) . "<br>";
            echo date("H:i:s",strtotime($fechaActual . "-12 days -4 hours")) . "<br>";



    echo "<br>Pruebas con la clase DateTime: <br><br>";


        echo "Fecha actual en formato 'd/m/Y' :<br>";
        //Creamos un objeto de la clase DateTime y usamos sus funciones
            $fechaActual2= new DateTime("now");
            echo $fechaActual2->format("d/m/Y") . "<br>";

        echo "Fecha actual en formato 'dia d, mes mmmm año yyyy, día de la semana dd' :<br>";
            echo $fechaActual2->format("d, F Y, l") . "<br>";

        echo "Hora actual en formato 'hh:mm:ss' :<br>";
            echo $fechaActual2->format("H:i:s") . "<br>";

        echo "Mostrar todo lo anterior para la fecha 29/3/2024 a 12:45 :<br>";
        //createFromFormat te crea una fecha a raíz de un string que le pases. Debes pasarle
        // el formato en el que se encuentra la fecha del string también.
            $fechaNueva= new DateTime()->createFromFormat("d/m/Y H:i","29/3/2024 12:45");
            echo $fechaNueva->format("d/m/Y"). "<br>";
            echo $fechaNueva->format("d, F Y, l"). "<br>";
            echo $fechaNueva->format("H:i:s"). "<br>";

        echo "Mostrar todo lo anterior para la fecha actual menos 12 días y 4 horas :<br>";
        //Creamos un objeto intervalo para poder restarselo a nuestro objeto DateTime
            $intervalo=new DateInterval("P12DT4H");
            $fechaActual2->sub($intervalo);
            echo $fechaActual2->format("d/m/Y"). "<br>";
            echo $fechaActual2->format("d, F Y, l"). "<br>";
            echo $fechaActual2->format("H:i:s"). "<br>";
}

//al final se ponen las funciones

