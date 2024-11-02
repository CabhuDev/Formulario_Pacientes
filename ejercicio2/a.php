<?php
// Autor: Pablo Cabello Hurtado

/**
 * En el archivo a.php realizarás una función destinada a cargar los archivos CSV (situados en dwes01/ejercicio2). 
 * Dicha función recibirá por parámetro un array indexado pasado por referencia y también el nombre del archivo CSV a cargar. 
 * La función deberá añadir al array pasado por referencia los datos cargados del archivo CSV. 
 * Esta función retornará true si se pudo abrir el archivo CSV y cargar su contenido al array 
 * pasado por referencia, o false en caso contrario. 
 * Es necesario que los datos del archivo CSV se carguen usando fgetcsv.
 */


/**
 * Función para cargar los datos de un archivo CSV en un array pasado por referencia.
 *
 * @param array &$arrayDatos Array donde se cargarán los datos del CSV.
 * @param array &$cabecera Array donde se cargarán la cabecera(primera fila del CSV).
 * @param string $archivoCargado Nombre del archivo CSV a cargar.
 * @return bool Devuelve true si se pudo abrir y cargar el archivo, false en caso contrario.
 */

function cargarDatos(array &$arrayDatos, string $archivoCargado, array $cabecera=[] ){
    // Intentar abrir el handle en modo lectura
    $handle = fopen($archivoCargado,'r');
    if ($handle!== false) {
        // Leer cada línea del archivo CSV
        while (($filaLeida = fgetcsv($handle))!== false){
            if (empty($cabecera)) {
                #Si la cabecera está vacía, entonces añade al array los primeros datos del CSV
                $cabecera = $filaLeida; 
                continue;
            }
            // Añadir la línea leída al array pasado por referencia
            $arrayDatos[] = array_combine($cabecera,$filaLeida);
        }        
        // Cerrar el handle    
        fclose($handle);
        return $arrayDatos;
    }
    else{
        return false;
        // Retornar false si no se pudo abrir el archivo
        die ("No se pudo cargar el archivo: $archivoCargado");
        
    }
    
}

//*PRUEBAS*/
/*$archivoCarga1 = "C:/XAMPP/htdocs/dwes01/ejercicio2/datos1.csv";

$arrayDatos=[];
var_dump (cargarDatos($arrayDatos,$archivoCarga1));
//*PRUEBAS*/
?>