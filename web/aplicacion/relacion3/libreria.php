<?php
// -Las funciones que realizan operaciones no muestran texto ni devuelven cadena con el
// texto formateado, es la aplicación principal quien se encarga de mostrar los resultados. SOLO DEVOLVER VALORES NO EL FORMATO DEL RESULTAADO

// - Se comprueban argumentos. En caso de error se devuelve false. En la aplicación
// principal se comprueba si la llamada a una función es correcta o errónea. SE COMPRUEBA QUE SE HAYAN PASADDO LOS ARGUMENTOS BIEN,
//                                                                           SI NO FUNCIONA LA FUNCION, DEVUELVE FALSE

// - Se documentan las funciones indicando parámetros y operación: usar /**. Además se
// indican comentarios en todo lo que se deba aclarar de su funcionamiento. COMENTARIOS

// - En todas las funciones se le indicará el tipo de los parámetros/valor de retorno. //INDICAR TIPOS

// - Cuando la función pueda devolver error, se hará la llamada comprobando si se ha producido o no
// el error. DEJAR TAMBIEN LAS PRUEBAS DE CUANDO LA FUNCION NO DEBE DE IR

/**************************************************************************************************************** */



/**
 * Función que rellena el indice asociativo de un array con un número pasado como argumento.
 * @param array $array Array que queremos rellenar
 * @param string $cadena Índice asociativo del array en el que introduciremos el número 
 * @param float $num1 Número que queremos pasarle al array
 * @param int $num2 Número que se le pasa para llevar la cuenta de las veces que has llamado a la función(cada
 * vez que uses la función, este número incrementará en uno)
 * @return bool Devuelve true si la función ha funcionado y false si no
 */
function cuentaVeces(array &$array, string $cadena, float $num1, int &$num2):bool{ //si añadimos & delante de los argumentos,
                                                                                //hacemos que la funcion modifique la variable original
                                                                                //que es mandanda
    //comprobamos que el indice asociativo no sea ni 2daw ni primera
    if($cadena=="2daw" || $cadena=="primera"){
        return  false;
    }
        
    //introducimos el valor en el array con el indice indicado y sumamos al contador de veces
    //llamadas al array
    $array[$cadena]=$num1;
    $num2++;
    return  true;
}

/**************************************************************************************************************** */

/**
 * Longitud que devuelve una cadena randomd de la longitud que le introduzcas
 *
 * @param integer $longitud La longitud de la que queramos que sea la cadena
 * @return string|false Devuelve false si la función no se ejecuta bien o un string
 *                      con el resultado de la cadena random
 */
function generarCadena(int $longitud=10):string|false{
     
    //devolvemos false si el número indicado es negativo o 0
    if($longitud<=0){
        return false;
    }
    $caracteres="ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz123456789";
    $resultado="";
    //generamos un caracter random dentro de la cadena caracter y lo guardamos
    //en resultado. Lo creamos tantas veces como la longitud pasada
    for($i=1; $i<=$longitud;$i++){
        $resultado=$resultado.mb_convert_encoding ($caracteres[rand(0,(strlen($caracteres)-1))], "UTF-8");
    }
    return $resultado;
}

/**************************************************************************************************************** */

/**
 * Función que realiza distintas operaciones sobre unos números pasados como parámetros.
 * La operación se elige en función del primer número pasado (1-> suma, 
 *                                                            2-> resta, 
 *                                                            3-> multiplicacion, 
 *                                                            4-> resta de la suma de pares menos la suma de immpares)
 * @param integer $operacion Número que indica a la función qué operación se realizará
 * @param float $num1 Primer operando
 * @param float $num2 Segundo operando
 * @param float $demas Los demás operando que queramos introducir (se pueden introducir tantos como necesites)
 * @return float Resultado de la operación realizada
 */

function operaciones(int $operacion, float $num1, float $num2, float ...$demas):float|false{

//Operaciones en función del primer número pasado
switch($operacion){
    case 1:
        //sumamos los dos primeros operandos pasados y recorremos los demás operandos si se han introducido más,
        //sumandolos uno a uno al resultado total
        $suma=$num1+$num2;
        foreach($demas as $numeros){
            $suma+=$numeros;
        }
        return $suma;
        break;
    case 2:
        //restamos al primer operando el segundo pasado y recorremos los demás si se han introducido más,
        //restándolos uno a uno al resultado total
        $resta= $num1-$num2;
        foreach($demas as $numeros){
            $resta-=$numeros;
        }
        return $resta;
        break;
    case 3:
        //multiplicamos el primer operando con el segundo pasado y recorremos los demás si se han introducido más,
        //multiplicandolos uno a uno al resultado total
        $mult=$num1*$num2;
         foreach($demas as $numeros){
            $mult*=$numeros;
        }
        return $mult;
        break;
    //si se introduce cualquier otro numero para indicar la operacion que no sea 1,2 o 3, sumaremos todos los numeros
    //en posiciones pares introducidos así como los de posiciones impares, y estos dos resultados los restaremos
    default:
        $pares=0;
        $impares=0;
        //como '$num1' está en una posición impar (pos 1) lo añadimos a los
        //números impares
        $impares+=$num1;
        $pares+=$num2;
        
        //El indice del array empieza por 0, pero en las variables su posicion es el
        //3. Por lo que en el array, las posiciones pares corresponderan a las impares
        //en las variables.
        foreach($demas as $indice=> $num){
            if(comprobarPar($indice)){//funcion que comprueba si el indice es par o impar
                $impares+=$num;
            } else{
                $pares+=$num;
            }
        }
        return $pares-$impares;
        break;
}
}
/**
 * Función que comprueba si un número es par y devuelve true si lo es y false si no lo es
 *
 * @param int $num Número que le pasamos y que queremos comprobar si es par o no
 * @return bool Devuelve true si es par y false si es impar
 */

function comprobarPar(int $num):bool{
if($num%2==0){
    return true;
}
return false;
}

/**************************************************************************************************************** */

/**
 * Función a la que le pasas 3 números y te deuvelve la multiplicación de estos.
 * Además intercambia el valor del primer número que le pasas por la suma total de los 3 números.
 *
 * @param int $num1 Primer número pasado
 * @param int $num2 Segundo número pasado
 * @param int $num3 Tercer número pasado
 * @return int Devuelve el total de la multiplicación de los tres números
 */

function devuelve(int &$num1, int $num2=2, int $num3=3):int{ 
    
        $mult=$num1*$num2*$num3; //realizamos la multiplicacion antes de cambiar el valor del primer parametro
        $num1=$num1+$num2+$num3;
        return $mult;
}

?>



