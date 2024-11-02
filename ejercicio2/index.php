<pre style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ccc;">
Alumno: <strong>Pablo Cabello Hurtado</strong> 
TAREA 01 - Filtro por fecha mayor  a una dada.
</pre>

<?php
// Autor: Pablo Cabello Hurtado

include_once 'a.php'; // Incluir el archivo a.php para usar la función de carga de datos desde CSV
include_once 'b.php'; // Incluir el archivo b.php para usar la función de carga y filtrado de datos

$key ='Servicio';
$value = 'Psicopedagogía';

$date =new DateTime('2025-01-01');
$operador = '<';

$arrayCompleto = devuelveArrayDatos("C:/XAMPP/htdocs/dwes01/ejercicio2/datos1.csv","C:/XAMPP/htdocs/dwes01/ejercicio2/datos2.csv");

// Obtener las claves del array para los encabezados de la tabla
$headers = array_keys($arrayCompleto[0]);

filtroArrayKeyValue($arrayCompleto,$key,$value);
$arrayFiltrado = filtrarPorFecha($arrayCompleto,$date,$operador);

// Generar la tabla HTML para mostrar los datos


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 01</title>
    <style>
        h1{
            font-size: xx-large;
            font-family: Arial, Helvetica, sans-serif;
        }
        .table_container{
            display: flex;
            height: 100vh; /* O cualquier altura */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<h1>Datos de Citas</h1>
<body>
    <div class="table_container">
        <div class="left">
            <table>
                <tr>
                <?php
                    // Generar los encabezados de la tabla dinámicamente
                    foreach ($headers as $header) {
                        echo "<th>$header</th>";
                    }
                ?>
                </tr>
                <tr>
                <?php
                    // Recorrer los datos y generar las filas de la tabla
                    foreach ($arrayFiltrado as $fila) {
                        echo "<tr>";
                        echo "<td>$fila[ID_Cliente]</td>";
                        echo "<td>$fila[Nombre]</td>";
                        echo "<td>$fila[Fecha_Cita]</td>";
                        echo "<td>$fila[Servicio]</td>";
                        echo "</tr>";
                    }
                ?>
                </tr>
                
            </table>
        </div>
    </div>
</body>
</html>