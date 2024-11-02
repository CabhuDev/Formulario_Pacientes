<?php
// Autor: Pablo Cabello Hurtado

/**
 * En el archivo b.php, por otra parte, realizarás una función que tendrá uno o más parámetros, 
 * que use la función creada en a.php y que retorne un array usando return. 
 * Esta función cargará los dos archivos CSV de forma consecutiva usando la función creada en a.php, 
 * acumulando de forma adecuada el contenido de los archivos CSV en un único array bidimensional. 
 * Después, usará la información de los parámetros para filtrar las filas en función de alguna columna 
 * (condición mayor que, menor que, igual a, valores dentro de un conjunto, etc.). 
 * Las condiciones de filtrado son de tu elección, es decir, tu eliges como y que filtros se implementan.
 */

include_once 'a.php'; // Incluir el archivo a.php para usar la función de carga de datos desde CSV



/**
 * Función para cargar los datos de dos archivos CSV y acumularlos en un array.
 *
 * @param string $archivoCarga1 Ruta del primer archivo CSV a cargar.
 * @param string $archivoCarga2 Ruta del segundo archivo CSV a cargar.
 * @return array Retorna un array con los datos acumulados de los dos archivos.
 */

function devuelveArrayDatos(string $archivoCarga1,string $archivoCarga2){
    //Inicialización del Array
    $arrayDatos=[];
    // Cargar datos desde el primer archivo CSV
    cargarDatos($arrayDatos,$archivoCarga1);
    // Cargar datos desde el segundo archivo CSV
    cargarDatos($arrayDatos,$archivoCarga2);
    
    //var_dump($arrayDatos);
    return $arrayDatos;
}


/**
 * Función para filtrar un array por una clave y un valor especificado.
 *
 * @param array $arrayDatos Array con los datos a filtrar.
 * @param string $key Clave por la cual se filtrará el array.
 * @param string $value Valor que se utilizará para filtrar.
 * @return array Muestra los resultados filtrados.

 */

function filtroArrayKeyValue (array $arrayDatos,String $key, String $value ): array{
    // Filtrar los datos usando la clave y valor proporcionados
    $filtroKeyValue = array_filter($arrayDatos,function($arrayDatos) use ($key,$value){
        return $arrayDatos[$key]==$value;
    });
    // Mostrar los resultados filtrados
    return $filtroKeyValue;
}



/**
 * Función para filtrar un array por una fecha mayor o menor a una dada.
 *
 * @param array $arrayDatos Array con los datos a filtrar.
 * @param DateTime $date Fecha que se utilizará como base para el filtro.
 * @param string $operador Operador de comparación ('>' para mayor que, '<' para menor que).
 * @return array Muestra los resultados filtrados.
 */

function filtrarPorFecha (array $arrayDatos, DateTime $date, String $operador): array {
    // Filtrar los datos usando la fecha y el operador proporcionados
    $filtroDate = array_filter($arrayDatos,function($rr) use ($date,$operador){
        // Convertir la fecha de la fila al formato DateTime
        $dateFormatted = DateTime::createFromFormat('Y-m-d',$rr['Fecha_Cita']);

        // Verificar si la fecha de la fila es válida
        if (!$dateFormatted) {
            return false; // Retorna false si la fecha no se puede convertir
        }

        // Comparar la fecha según el operador proporcionado
        if ($operador ===">") {
            return $dateFormatted > $date;
        } elseif($operador ==="<") {
            return $dateFormatted < $date;
        };
        
    });
    // Mostrar los resultados filtrados
    return $filtroDate;
};


//** PRUEBAS */
// Llamada a la función para cargar datos de dos archivos CSV
//$rr = devuelveArrayDatos("C:/XAMPP/htdocs/dwes01/ejercicio2/datos1.csv","C:/XAMPP/htdocs/dwes01/ejercicio2/datos2.csv");

//$key ='Servicio';
//$value = 'Psicopedagogía';

//filtroArrayKeyValue($rr,$key,$value)

//$date =new DateTime('2025-01-01');
//$operador = '<';

//var_dump($filtroKeyValue);
//** PRUEBAS */


?>