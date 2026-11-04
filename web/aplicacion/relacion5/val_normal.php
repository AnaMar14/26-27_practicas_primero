<?php



// Se comprueban argumentos. En caso de error se devuelve false. En la aplicación
// principal se comprueba si la llamada a una función es correcta o errónea.
// - Se documentan las funciones indicando parámetros y operación: usar /**. Además se
// indican comentarios en todo lo que se deba aclarar de su funcionamiento.
// - En todas las funciones se le indicará el tipo de los parámetros/valor de retorno.
// - Cuando la función pueda devolver error, se hará la llamada comprobando si se ha producido o no
// el error.

namespace VALNORMAL;

/**
 * Función que comprueba que un número entero se encuentre dentro de 
 * un rango indicado, y si no lo está, se le asigna un número por defecto
 * al número inicialmente comprobado.
 *
 * @param int $var Numero a comprobar
 * @param int $min  Numero que define el valor minimo del rango
 * @param int $max Numero que define el valor maximo del rango
 * @param int $defecto Numero que se asigna por defecto si no entra en el rango
 * @return bool Devuelve true si el número cumple con el rango, y false si no. Además en caso de false
 * se cambia el valor original del número introducido por el por defecto indicado.
 */

function validaEntero(int &$var, int $min, int $max, int $defecto):bool{
    if($var>=$min && $var<=$max){
        return true;
    }
    $var=$defecto;
    return false;
}

/************************************************************************************* */

/**
 * Función que comprueba que un número real se encuentre dentro de 
 * un rango indicado, y si no lo está, se le asigna un número por defecto
 * al número inicialmente comprobado.
 *
 * @param float $var Numero a comprobar
 * @param float $min  Numero que define el valor minimo del rango
 * @param float $max Numero que define el valor maximo del rango
 * @param float $defecto Numero que se asigna por defecto si no entra en el rango
 * @return bool Devuelve true si el número cumple con el rango, y false si no. Además en caso de false
 * se cambia el valor original del número introducido por el por defecto indicado.
 */

function validaReal(float &$var, float $min, float $max, float $defecto):bool{
    if($var>=$min && $var<=$max){
        return true;
    }
    $var=$defecto;
    return false;
}


/************************************************************************************* */

// function validaFecha(string &$var, string $defecto):bool Esta función comprueba que $var
// contiene una fecha correcta en el formato dd/mm/aaaa. En $var se devuelve la fecha saneada
// (2 cifras para dia y mes y cuatro para año- ej fecha 1/2/2023 es válida aunque se sanea y se
// convierte en 01/02/2023). En caso de no cumplir las condiciones devuelve $defecto en
// $var. La función devuelve true si es correcta y false en caso contrario.

function validaFecha(string &$var, string $defecto):bool {
    $patron = "/^[0,1,2]?[0-9]\/[0,1,2]?[0-9]\/[0-9]{4}/";
}