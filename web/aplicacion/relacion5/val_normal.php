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

/**
 * Función que comprueba que una fecha introducida sea correcta y tenga el formato
 * dd/mm/aaaa. Si es correcta se devuelven los meses y dias con dos digitos
 * y si no lo es, a la fecha inicial se le asigna una fecha por defecto.
 *
 * @param string $var Fecha introducida a validar
 * @param string $defecto  Fecha que se asigna por defecto si la inicial no es válida
 * @return bool Devuelve true si la fecha introducida es válida y false si no lo es
 */

function validaFecha(string &$var, string $defecto):bool {
    //comprobamos que el formato de la fecha sea xx/xx/xxxx con expresiones regulares

    $patron = "/^[0-3]?[0-9]\/[0-1]?[0-9]\/[0-9]{4}$/"; //en orden dia mes y año

    $fechaDividida= explode("/",$var); //separamos el mes dia y fecha para luego comprobar
    //que sea una fecha válida y real con checkdate
   
    //el orden de checkdate es mes-dia-año por lo que introducimos los indices del array fechaDividida como 1,0,2
    if(preg_match($patron,$var) && checkdate($fechaDividida[1],$fechaDividida[0],$fechaDividida[2])){
       
        //saneamos para que los dias y meses del 1 al 9 se muestren con un 0 al inicio
        $var= date("d/m/Y", strtotime($fechaDividida[1] . "/" .  $fechaDividida[0] . "/" . $fechaDividida[2])); 
        //strotime se toma las fechas introducidas como en formato inglés(mes, dia, año) asi que le introduciremos
        //la fecha en ese orden aprovechando explode para que la interprete bien. Luego indicaremos que el orden sea d/m/Y
       
        return true;
        
    }
    $var=$defecto;
    return false;
    }


/************************************************************************************* */

/**
 * Función que comprueba que una hora introducida sea correcta y tenga el formato
 * hh:mm:ss. Si es correcta se devuelven horas, minutos y segundos de 2 en 2 digitos
 * y si no lo es, a la hora inicial se le asigna una hora por defecto.
 *
 * @param string $var Hora introducida a validar
 * @param string $defecto  Hora que se asigna por defecto si la inicial no es válida
 * @return bool Devuelve true si la hora introducida es válida y false si no lo es
 * 
 */

function validaHora(string &$var,string $defecto):bool{
    //validar hora correcta mediante expresion regular (orden: horas,minutos,segundos)
    $patron = "/^ (([0]?[0-9]) |
                  ([1][0-9]) |
                  ([2][0-3])):
                        (([0]?[0-9]) |
                        ([1-5][0-9])):
                            (([0]?[0-9]) |
                            ([1-5][0-9]))
                  $/x"; //la x hace que ignore los espacios en blanco o saltos de linea
   //separamos horas minutos y segundos para añadirles "0" cuando sea necesario
    $hora_separada=explode(":",$var);
    
    if(preg_match($patron,$var)){
            //si se ha introducido solo un digito en alguno de los valores,
            //se completa añadiendo un 0 a la izquierda
            if(mb_strlen($hora_separada[0])==1){
                $aux=$hora_separada[0];
                $hora_separada[0]= "0".$aux;
            }
            if(mb_strlen($hora_separada[1])==1){
                $aux=$hora_separada[1];
                $hora_separada[1]= "0".$aux;
            }
            if(mb_strlen($hora_separada[2])==1){
                $aux=$hora_separada[2];
                $hora_separada[2]= "0".$aux;
            }
        //devolvemos la hora ya formateada
        $var=$hora_separada[0] . ":" . $hora_separada[1] . ":" . $hora_separada[2]; 
        return true;
    }
    $var=$defecto;
    return false;
}

/************************************************************************************* */

// function validaEmail(string &$var, string $defecto):bool Esta función comprueba que $var
// contiene un email correcto en el formato aaaaa@bbbb.ccc. En $var se devuelve el email
// saneado (en caso de no cumplir las condiciones devuelve $defecto). La función devuelve
// true si es correcto y false en caso contrario

function validaEmail(string &$var, string $defecto):bool{
    $patron="/^[^@]+@[[:lower:]]+\.([[:lower:]][.]?)+$/";
  
    if(preg_match($patron,$var)){
        $var=preg_replace('/[^a-zA-Z0-9$\-_.+!*\'(),{}|\\\\^~\[\]`<>#%";\/?:@&=]/',"",$var);
        return true;
    }
    $var=$defecto;
    return false;
}