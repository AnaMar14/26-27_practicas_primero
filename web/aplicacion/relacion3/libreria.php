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
    //comprobamos losa argumentos pasados y si son incorrectos devolvemos false
    if((!is_array($array)) || (!is_string($cadena)) || (!is_float($num1)) || (!is_int($num2))){
        return false;
    }
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
     //comprobamos los argumentos pasados y si son incorrectos devolvemos false
    if((!is_int($longitud))){
        return false;
    }
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

?>