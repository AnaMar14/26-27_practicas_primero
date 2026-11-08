<?php
include_once '../../scripts/librerias/validacion.php';
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador

$estadosVal = [
    1 => "Estudiante",
    2 => "En paro",
    3 => "Trabajando",
    4 => "Jubilado",
    5 => "Incorrecta"
];

$estudiosVal = [
    0 => "Sin estudios",
    1 => "Primaria",
    2 => "Secundaria",
    3 => "Bachillerato",
    4 => "Ciclo formativo",
    5 => "Universitarios",
    6 => "Incorrecta"
];

$barra = [
    [
        "TEXTO" => "Inicio",
        "ENLACE" => "/index.php",
    ],
    [
        "TEXTO" => "Relación 5",
        "ENLACE" => "/aplicacion/relacion5/index.php",
    ],
    [
        "TEXTO" => "Ejercicio 2",
    ]
];

//valores iniciales del formulario
$datos = [
    "nombre" => "",
    "password" => "",
    "fecha_nac" => "",
    "carnet_dia" => "",
    "carnet_mes" => "",
    "carnet_anio" => "",
    "fecha_carnet" => "",
    "hora" => "",
    "estado" => null,
    "estudios" => [],
    "hermanos" => 0,
    "sueldo" => 1100.0
];

$errores = [];
$enviado = false;

//comprobamos si se ha enviado el formulario mediante el método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enviado = true;
    $datos = validarFormulario($_POST, $datos, $errores, $estadosVal, $estudiosVal);
}

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 2", $barra);
cuerpo($datos, $errores, $enviado, $estudiosVal, $estadosVal); //llamo a la vista
finCuerpo();
// *******************************************************************************************

//vista
function cabecera() {}

//vista
function cuerpo(array $datos, array $errores, bool $enviado, array $estudiosVal, array $estadosVal): void
{
    echo("<br>");

    //si se ha enviado el formulario y no hay errores, mostramos el resumen
    if ($enviado && empty($errores)) {
        resumen($datos, $estudiosVal, $estadosVal);
    } else {
        formulario($datos, $errores, $estudiosVal, $estadosVal);
    }
}

/**
 * Función que muestra el formulario con los datos introducidos y los errores encontrados.
 *
 * @param array $datos Datos que se mostrarán en los campos del formulario
 * @param array $errores Errores encontrados al validar los datos
 * @param array $estudiosVal Array con los estudios posibles
 * @param array $estadosVal Array con los estados posibles
 * @return void
 */
function formulario(array $datos, array $errores, array $estudiosVal, array $estadosVal): void
{
    if (!empty($errores)) {
        echo("<div class='error'>Se han encontrado errores. Revise los datos indicados.</div><br>");
    }
?>
    <form action="" method="post">

        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" size="30"
                value="<?php echo(escapar($datos["nombre"])); ?>">
            <?php mostrarErrores($errores, "nombre"); ?>
        </p>

        <p>
            <label for="password">Contraseña: </label>
            <!--No volvemos a mostrar la contraseña por seguridad-->
            <input type="password" name="password" id="password" size="20">
            <?php mostrarErrores($errores, "password"); ?>
        </p>

        <p>
            <label for="fecha_nac">Fecha de nacimiento: </label>
            <input type="text" name="fecha_nac" id="fecha_nac" size="12"
                placeholder="dd/mm/aaaa" value="<?php echo(escapar($datos["fecha_nac"])); ?>">
            <?php mostrarErrores($errores, "fecha_nac"); ?>
        </p>

        <p>
            Fecha de carnet:
            <input type="text" name="carnet_dia" size="2" placeholder="dd"
                value="<?php echo(escapar((string)$datos["carnet_dia"])); ?>"> /
            <input type="text" name="carnet_mes" size="2" placeholder="mm"
                value="<?php echo(escapar((string)$datos["carnet_mes"])); ?>"> /
            <input type="text" name="carnet_anio" size="4" placeholder="aaaa"
                value="<?php echo(escapar((string)$datos["carnet_anio"])); ?>">
            <?php mostrarErrores($errores, "fecha_carnet"); ?>
        </p>

        <p>
            <label for="hora">Hora de levantarse: </label>
            <input type="text" name="hora" id="hora" size="10" placeholder="hh:mm:ss"
                value="<?php echo(escapar($datos["hora"])); ?>">
            <?php mostrarErrores($errores, "hora"); ?>
        </p>

        <p>
            Estado:<br>
            <?php
            foreach ($estadosVal as $codigo => $texto) {
                echo("<label>");
                echo("<input type='radio' name='estado' value='" . $codigo . "' ");
                if ($datos["estado"] === $codigo) {
                    echo("checked");
                }
                echo("> " . $codigo . " - " . escapar($texto));
                echo("</label><br>");
            }
            ?>
            <?php mostrarErrores($errores, "estado"); ?>
        </p>

        <p>
            Estudios:<br>
            <?php
            foreach ($estudiosVal as $codigo => $texto) {
                echo("<label>");
                echo("<input type='checkbox' name='estudios[]' value='" . $codigo . "' ");
                if (in_array($codigo, $datos["estudios"], true)) {
                    echo("checked");
                }
                echo("> " . $codigo . " - " . escapar($texto));
                echo("</label><br>");
            }
            ?>
            <?php mostrarErrores($errores, "estudios"); ?>
        </p>

        <p>
            <label for="hermanos">Hermanos: </label>
            <input type="text" name="hermanos" id="hermanos" size="3"
                value="<?php echo(escapar((string)$datos["hermanos"])); ?>">
            <?php mostrarErrores($errores, "hermanos"); ?>
        </p>

        <p>
            <label for="sueldo">Sueldo (€): </label>
            <input type="text" name="sueldo" id="sueldo" size="10"
                value="<?php echo(escapar((string)$datos["sueldo"])); ?>">
            <?php mostrarErrores($errores, "sueldo"); ?>
        </p>

        <p>
            <input type="submit" value="Enviar" name="enviar">
        </p>
    </form>
<?php
}

/**
 * Función que muestra los errores de un campo concreto.
 *
 * @param array $errores Array con todos los errores
 * @param string $campo Campo del que queremos mostrar los errores
 * @return void
 */
function mostrarErrores(array $errores, string $campo): void
{
    if (array_key_exists($campo, $errores)) {
        echo("<div class='error'>");
        foreach ($errores[$campo] as $error) {
            echo(escapar($error) . "<br>");
        }
        echo("</div>");
    }
}

/**
 * Función que muestra un resumen con los datos introducidos una vez validados.
 *
 * @param array $datos Datos validados
 * @param array $estudiosVal Array con los estudios posibles
 * @param array $estadosVal Array con los estados posibles
 * @return void
 */
function resumen(array $datos, array $estudiosVal, array $estadosVal): void
{
    //obtenemos los nombres de los estudios seleccionados
    $textosEstudios = [];
    foreach ($datos["estudios"] as $codigo) {
        $textosEstudios[] = $estudiosVal[$codigo];
    }
?>
    <h3>Datos introducidos</h3>
    <ul>
        <li><b>Nombre:</b> <?php echo(escapar($datos["nombre"])); ?></li>
        <li><b>Contraseña:</b> <?php echo(str_repeat("*", mb_strlen($datos["password"]))); ?></li>
        <li><b>Fecha de nacimiento:</b> <?php echo(escapar($datos["fecha_nac"])); ?></li>
        <li><b>Fecha de carnet:</b> <?php echo(escapar($datos["fecha_carnet"])); ?></li>
        <li><b>Hora de levantarse:</b> <?php echo(escapar($datos["hora"])); ?></li>
        <li><b>Estado:</b> <?php echo(escapar($estadosVal[$datos["estado"]])); ?></li>
        <li><b>Estudios:</b> <?php echo(escapar(implode(", ", $textosEstudios))); ?></li>
        <li><b>Hermanos:</b> <?php echo($datos["hermanos"]); ?></li>
        <li><b>Sueldo:</b> <?php echo(number_format($datos["sueldo"], 2, ",", ".")); ?> €</li>
    </ul>
    <a href="">Volver al formulario</a>
<?php
}

/**
 * Función que valida los datos recibidos del formulario.
 *
 * @param array $post Datos recibidos mediante POST
 * @param array $datos Valores iniciales de los campos
 * @param array $errores Array donde guardaremos los errores encontrados
 * @param array $estadosVal Estados que se pueden seleccionar
 * @param array $estudiosVal Estudios que se pueden seleccionar
 * @return array Devuelve los datos después de validarlos
 */
function validarFormulario(array $post, array $datos, array &$errores, array $estadosVal, array $estudiosVal): array
{
    // ------------------------------------------------------------ NOMBRE
    //comprobamos que el nombre no esté vacío, no empiece por H y no supere los 25 caracteres
    $nombre = isset($post["nombre"]) && is_string($post["nombre"]) ? trim($post["nombre"]) : "";

    if ($nombre === "") {
        $errores["nombre"][] = "Debe indicarse un nombre";
    } elseif (mb_strtoupper(mb_substr($nombre, 0, 1)) === "H") {
        $errores["nombre"][] = "El nombre no puede empezar por H";
        $nombre = "";
    } elseif (!validaExpresion($nombre, "/^.{1,25}$/u", "")) {
        $errores["nombre"][] = "El nombre no puede tener más de 25 caracteres";
    } else {
        $nombre = mb_strtoupper($nombre);
    }
    $datos["nombre"] = $nombre;

    // -------------------------------------------------------- CONTRASEÑA
    //debe tener entre 8 y 15 caracteres, una mayúscula, una minúscula,
    //un número y uno de estos caracteres especiales: $_-;<>@
    $password = isset($post["password"]) && is_string($post["password"]) ? $post["password"] : "";
    $patron = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$_\-;<>@]).{8,15}$/u';

    if (!validaExpresion($password, $patron, "")) {
        $errores["password"][] = "La contraseña debe tener entre 8 y 15 caracteres e incluir una mayúscula, una minúscula, una cifra y un carácter especial";
    }
    $datos["password"] = $password;

    // --------------------------------------------- FECHA DE NACIMIENTO
    $fechaNac = isset($post["fecha_nac"]) && is_string($post["fecha_nac"]) ? trim($post["fecha_nac"]) : "";

    if (!validaFecha($fechaNac, "")) {
        $errores["fecha_nac"][] = "La fecha de nacimiento no es válida (formato dd/mm/aaaa)";
    }
    $datos["fecha_nac"] = $fechaNac;

    // -------------------------------------------------- FECHA DE CARNET
    //recogemos el día, el mes y el año por separado
    $dia = isset($post["carnet_dia"]) && is_string($post["carnet_dia"]) ? trim($post["carnet_dia"]) : "";
    $mes = isset($post["carnet_mes"]) && is_string($post["carnet_mes"]) ? trim($post["carnet_mes"]) : "";
    $anio = isset($post["carnet_anio"]) && is_string($post["carnet_anio"]) ? trim($post["carnet_anio"]) : "";

    $datos["carnet_dia"] = $dia;
    $datos["carnet_mes"] = $mes;
    $datos["carnet_anio"] = $anio;
    $datos["fecha_carnet"] = "";

    //comprobamos que los tres valores sean números y estén dentro de sus rangos
    $fechaCorrecta = true;

    if (!preg_match('/^[0-9]{1,2}$/', $dia) ||
        !preg_match('/^[0-9]{1,2}$/', $mes) ||
        !preg_match('/^[0-9]{4}$/', $anio)) {
        $fechaCorrecta = false;
    } else {
        $dia = (int)$dia;
        $mes = (int)$mes;
        $anio = (int)$anio;

        if (!validaEntero($dia, 1, 31, 1) ||
            !validaEntero($mes, 1, 12, 1) ||
            !validaEntero($anio, 1900, (int)date("Y"), 1900)) {
            $fechaCorrecta = false;
        }
    }

    if (!$fechaCorrecta) {
        $errores["fecha_carnet"][] = "La fecha de carnet no es válida: indique un día, mes y año correctos";
    } else {
        $fechaCarnet = $dia . "/" . $mes . "/" . $anio;

        if (!validaFecha($fechaCarnet, "")) {
            $errores["fecha_carnet"][] = "La fecha de carnet no existe";
        } else {
            $datos["fecha_carnet"] = $fechaCarnet;

            //comprobamos que tuviera 18 años cuando se sacó el carnet
            if (!array_key_exists("fecha_nac", $errores) && !esMayorDeEdad($fechaNac, $fechaCarnet)) {
                $errores["fecha_carnet"][] = "La fecha de carnet es anterior a la fecha en la que cumplió 18 años";
            }
        }
    }

    //guardamos los valores numéricos para volver a mostrarlos en el formulario
    $datos["carnet_dia"] = $dia;
    $datos["carnet_mes"] = $mes;
    $datos["carnet_anio"] = $anio;

    // --------------------------------------------- HORA DE LEVANTARSE
    $hora = isset($post["hora"]) && is_string($post["hora"]) ? trim($post["hora"]) : "";

    if (!validaHora($hora, "")) {
        $errores["hora"][] = "La hora no es válida (formato hh:mm:ss)";
    }
    $datos["hora"] = $hora;

    // ------------------------------------------------------------ ESTADO
    $datos["estado"] = null;

    if (!isset($post["estado"]) || !is_string($post["estado"]) ||
        !preg_match('/^[0-9]+$/', $post["estado"])) {
        $errores["estado"][] = "Debe seleccionarse un estado válido";
    } else {
        $estado = (int)$post["estado"];

        if (!validaRango($estado, $estadosVal, 2)) {
            $errores["estado"][] = "El estado seleccionado no es válido";
        } else {
            $datos["estado"] = $estado;
        }
    }

    // ---------------------------------------------------------- ESTUDIOS
    $estudios = [];
    $hayInvalidos = false;

    if (isset($post["estudios"])) {
        if (is_array($post["estudios"])) {
            foreach ($post["estudios"] as $codigo) {
                if (is_string($codigo) && preg_match('/^[0-9]+$/', $codigo)) {
                    $codigo = (int)$codigo;

                    if (validaRango($codigo, $estudiosVal, 2)) {
                        if (!in_array($codigo, $estudios, true)) {
                            $estudios[] = $codigo;
                        }
                    } else {
                        $hayInvalidos = true;
                    }
                } else {
                    $hayInvalidos = true;
                }
            }
        } else {
            $hayInvalidos = true;
        }
    }

    if ($hayInvalidos) {
        $errores["estudios"][] = "Se ha marcado una opción de estudios que no es válida";
    } elseif (empty($estudios)) {
        $errores["estudios"][] = "Debe marcarse al menos un estudio";
    }

    //si se marca 'Sin estudios', no se mantienen los demás estudios
    if (in_array(0, $estudios, true)) {
        $estudios = [0];
    }

    sort($estudios);
    $datos["estudios"] = $estudios;

    // --------------------------------------------------------- HERMANOS
    $hermanos = isset($post["hermanos"]) && is_string($post["hermanos"]) ? trim($post["hermanos"]) : "";

    if (!preg_match('/^[0-9]+$/', $hermanos)) {
        $hermanos = 0;
        $errores["hermanos"][] = "El número de hermanos debe ser un entero entre 0 y 20";
    } else {
        $hermanos = (int)$hermanos;

        if (!validaEntero($hermanos, 0, 20, 0)) {
            $errores["hermanos"][] = "El número de hermanos debe ser un entero entre 0 y 20";
        }
    }
    $datos["hermanos"] = $hermanos;

    // ----------------------------------------------------------- SUELDO
    //permitimos introducir la coma o el punto como separador decimal
    $sueldo = isset($post["sueldo"]) && is_string($post["sueldo"]) ? trim($post["sueldo"]) : "";
    $sueldo = str_replace(",", ".", $sueldo);

    if (filter_var($sueldo, FILTER_VALIDATE_FLOAT) === false) {
        $sueldo = 1100.0;
        $errores["sueldo"][] = "El sueldo debe ser un número real entre 1000 y 150000 €";
    } else {
        $sueldo = (float)$sueldo;

        if (!validaReal($sueldo, 1000, 150000, 1100)) {
            $errores["sueldo"][] = "El sueldo debe ser un número real entre 1000 y 150000 €";
        }
    }
    $datos["sueldo"] = $sueldo;

    return $datos;
}

/**
 * Función que comprueba si una persona tenía 18 años cuando se sacó el carnet.
 *
 * @param string $nacimiento Fecha de nacimiento
 * @param string $carnet Fecha en la que se sacó el carnet
 * @return bool Devuelve true si tenía 18 años o más
 */
function esMayorDeEdad(string $nacimiento, string $carnet): bool
{
    $fechaNacimiento = DateTime::createFromFormat("!d/m/Y", $nacimiento);
    $fechaCarnet = DateTime::createFromFormat("!d/m/Y", $carnet);

    //restamos 18 años a la fecha del carnet y la comparamos con la de nacimiento
    $fechaCarnet->sub(new DateInterval("P18Y"));

    return $fechaNacimiento <= $fechaCarnet;
}

/**
 * Función que escapa los caracteres especiales para poder mostrar un texto en HTML.
 *
 * @param string $texto Texto que queremos mostrar
 * @return string Texto escapado
 */
function escapar(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, "UTF-8");
}
