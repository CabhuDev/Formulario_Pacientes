# Introducción a la Programación de Aplicaciones Web en Entorno Servidor en PHP

Este proyecto forma parte de la tarea "Introducción a la Programación de Aplicaciones Web en Entorno Servidor en PHP" perteneciente al módulo de Desarrollo Web en Entorno Servidor (DWES) del ciclo formativo de DAW. La tarea está compuesta por varias secciones y ejercicios que nos permiten trabajar y desarrollar destrezas en PHP y otras tecnologías web. A continuación, se detalla la estructura y funcionalidad de cada uno de los archivos desarrollados para cumplir con los objetivos del proyecto.

## Estructura del Proyecto

- **DWES01/**
  - **ejercicio2/**
    - `index.php`: Archivo principal del proyecto donde se muestran los datos filtrados mediante una tabla HTML.
    - `a.php`: Contiene una función para cargar datos desde archivos CSV en un array pasado por referencia.
    - `b.php`: Contiene una función para filtrar y procesar los datos cargados desde los CSV.
    - `datos1.csv` y `datos2.csv`: Archivos CSV que contienen datos de ejemplo que son utilizados en los ejercicios.
  - **ejercicio3/**
    - `index.php`: Formulario para buscar datos dentro de un conjunto de datos.
    - `datos.php`: Muestra los datos filtrados en base a la información recibida del formulario.

## Archivos y Funcionalidades

### `a.php`
Este archivo contiene una función llamada `cargarDatos(array &$arrayDatos, string $archivoCargado)` cuyo objetivo es cargar los datos de un archivo CSV en un array. La función recibe un array indexado pasado por referencia, de manera que los datos se van acumulando en dicho array. La función retorna `true` si se pudo abrir el archivo y cargar su contenido al array o `false` en caso contrario. Se utiliza `fgetcsv` para realizar la lectura de los archivos CSV.

### `b.php`
Este archivo contiene una función `devuelveArrayDatos(string $archivoCarga1, string $archivoCarga2)` que llama a la función de `a.php` para cargar datos de los archivos CSV proporcionados. Además, tiene funciones de filtrado, como `filtroArrayKeyValue` y `filtroArrayDate`, que permiten procesar el array resultante en base a las condiciones indicadas. Estos filtros ayudan a manipular los datos, como filtrado por fecha o por claves específicas, devolviendo los resultados solicitados.

### `index.php` (Ejercicio 2)
Este archivo actúa como la interfaz principal para visualizar los datos filtrados. Utiliza la función de `b.php` para obtener los datos y mostrarlos en una tabla HTML correctamente formateada. Además, se asegura que los encabezados y filas de la tabla se generen de manera dinámica, tomando como referencia el array resultante.

### `index.php` y `datos.php` (Ejercicio 3)
El archivo `index.php` en la carpeta del Ejercicio 3 contiene un formulario HTML para buscar datos dentro del conjunto de datos, el cual incluye:
- Un campo de texto para ingresar un dato numérico.
- Cuatro selectores múltiples (checkbox o `select multiple`) para que el usuario pueda seleccionar uno o más elementos.
- Otros campos adicionales, como selección de departamento, especialidad, y descripción de la consulta.

El archivo `datos.php` recibe los datos mediante el método POST, realiza la validación y muestra los datos filtrados en una tabla HTML. También maneja la lógica para mostrar el formulario nuevamente si los datos proporcionados son incorrectos o están incompletos.

## Tecnologías Utilizadas
- **PHP**: Para el desarrollo del backend y la manipulación de datos.
- **HTML/CSS**: Para crear el formulario y presentar los resultados de una manera organizada y clara.
- **XAMPP**: Utilizado como entorno de desarrollo para integrar Apache, PHP y MySQL.
- **CSV**: Los archivos CSV se utilizan como base de datos para manejar la información de ejemplo que es procesada por el código PHP.

## Instrucciones de Instalación y Ejecución
1. Instalar **XAMPP** o cualquier otro entorno que incluya Apache y PHP.
2. Colocar la carpeta del proyecto `DWES01` en el directorio `htdocs` de XAMPP (`C:/xampp/htdocs`).
3. Asegúrate de que todos los archivos tengan codificación **UTF-8** y usa **rutas relativas** para incluir o referenciar otros archivos.
4. Accede al archivo `index.php` desde tu navegador utilizando la URL `http://localhost/DWES01/ejercicio2/index.php` para visualizar los datos.

## Consideraciones y Evaluación
- **Codificación**: Todos los archivos están codificados en **UTF-8**.
- **Validaciones**: El script `datos.php` valida cada uno de los campos recibidos y muestra errores detallados si los valores no cumplen con las expectativas.
- **Filtrado y Procesamiento de Datos**: Los archivos CSV se procesan y filtran según los criterios ingresados por el usuario en el formulario, mostrando una o más filas que cumplan con las condiciones.

## Autor
- Pablo Cabello Hurtado

