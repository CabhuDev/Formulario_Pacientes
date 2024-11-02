<?php
// Nombre: [Tu Nombre y Apellidos]
// Archivo: a.php

/**
 * Función para cargar los datos de un archivo CSV en un array pasado por referencia.
 *
 * @param array &$dataArray Array donde se cargarán los datos del CSV.
 * @param string $filename Nombre del archivo CSV a cargar.
 * @return bool Retorna true si se pudo abrir y cargar el archivo, false en caso contrario.
 */
function cargarCSV(array &$dataArray, string $filename): bool {
    // Intentar abrir el archivo en modo lectura
    if (($handle = fopen($filename, 'r')) !== false) {
        // Leer cada línea del archivo CSV
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Añadir la línea leída al array pasado por referencia
            $dataArray[] = $data;
        }
        // Cerrar el archivo
        fclose($handle);
        return true;
    } else {
        // Retornar false si no se pudo abrir el archivo
        return false;
    }
}

// Inicializar el array de datos y cargar los archivos CSV
$arrayDatos = [];

if (cargarCSV($arrayDatos, 'datos1.csv')) {
    echo "Datos cargados correctamente desde datos1.csv:\n";
    var_dump($arrayDatos);
} else {
    die("No se pudo cargar el archivo datos1.csv");
}

// Intentar cargar datos2.csv de forma adicional
if (cargarCSV($arrayDatos, 'datos2.csv')) {
    echo "\nDatos cargados correctamente desde datos2.csv:\n";
    var_dump($arrayDatos);
} else {
    die("No se pudo cargar el archivo datos2.csv");
}
?>
