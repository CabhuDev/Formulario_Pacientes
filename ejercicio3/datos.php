<?php
// Autor: Pablo Cabello Hurtado

/**
 * Creación de array de BD que contiene los datos de los pacientes
 * 
 * @var array $pacientes Array asociativo que almacena la información de cada paciente, incluyendo:
 * - id_paciente: Identificación del paciente
 * - nombre: Nombre completo del paciente
 * - fecha_cita: Fecha de la cita del paciente
 * - especialidad: Especialidad médica asignada
 * - nueva_cita_programada: Si tiene una nueva cita programada
 * - diagnostico: Diagnósticos asignados al paciente
 * - disponibilidad_horaria: Disponibilidad horaria del paciente
 * - idioma_terapia: Idiomas en los que se puede brindar la terapia
 * - modalidad_sesion: Modalidades disponibles para la sesión (presencial/online)
 */
$pacientes=[
    ["id_paciente" => '1', "nombre" => "Juan Pérez", "fecha_cita" => "2024-10-31", "especialidad" => "Psicoterapia","nueva_cita_programada"=>"si","diagnostico" => ["Depresión", "Ansiedad"],"disponibilidad_horaria" => ["Mañana"],"idioma_terapia" => ["Catalán","Francés"],"modalidad_sesion"=>["Presencial"]],
    ["id_paciente" => '2', "nombre" => "Ana Gómez", "fecha_cita" => "2024-10-31", "especialidad" => "Desarrollo Personal","nueva_cita_programada"=>"si","diagnostico" => ["Ansiedad", "Trastorno de estrés postraumático"],"disponibilidad_horaria" => ["Mañana", "Tarde"],"idioma_terapia" => ["Catalán"],"modalidad_sesion"=>["Presencial","Online"]],
    ["id_paciente" => '3', "nombre" => "Fernando Martínez","fecha_cita" => "2024-10-31", "especialidad" => "Psicoterapia","nueva_cita_programada"=>"no","diagnostico" => ["Trastorno de estrés postraumático", "Depresión","Ansiedad"],"disponibilidad_horaria" => ["Mañana","Fines de semana"],"idioma_terapia" => ["Castellano"],"modalidad_sesion"=>["Online"]],
    ["id_paciente" => '4', "nombre" => "Marta Sánchez", "fecha_cita" => "2024-10-31", "especialidad" => "Psicopedagogía","nueva_cita_programada"=>"si","diagnostico" => ["Trastorno de aprendizaje", "Ansiedad"],"disponibilidad_horaria" => ["Mañana", "Tarde","Fines de semana"],"idioma_terapia" => ["Inglés"],"modalidad_sesion"=>["Presencial"]],
    ["id_paciente" => '5', "nombre" => "Carlos Díaz", "fecha_cita" => "2024-10-31", "especialidad" => "Desarrollo Personal","nueva_cita_programada"=>"no","diagnostico" => ["Trastorno de estrés postraumático", "Trastorno de aprendizaje"],"disponibilidad_horaria" => ["Fines de semana"],"idioma_terapia" => ["Castellano","Inglés","Francés"],"modalidad_sesion"=>["Presencial","Online"]],
    ["id_paciente" => '6', "nombre" => "Lucia Fernández", "fecha_cita" => "2024-11-05", "especialidad" => "Logopedia", "nueva_cita_programada" => "si", "diagnostico" => ["Problemas de habla"], "disponibilidad_horaria" => ["Tarde"], "idioma_terapia" => ["Castellano"], "modalidad_sesion" => ["Online"]],
    ["id_paciente" => '7', "nombre" => "Fernando González", "fecha_cita" => "2024-11-07", "especialidad" => "Desarrollo Personal", "nueva_cita_programada" => "no", "diagnostico" => ["Ansiedad"], "disponibilidad_horaria" => ["Mañana", "Fines de semana"], "idioma_terapia" => ["Inglés"], "modalidad_sesion" => ["Presencial"]],
    ["id_paciente" => '8', "nombre" => "Rosa Martín", "fecha_cita" => "2024-11-10", "especialidad" => "Psicoterapia", "nueva_cita_programada" => "si", "diagnostico" => ["Depresión"], "disponibilidad_horaria" => ["Tarde"], "idioma_terapia" => ["Francés"], "modalidad_sesion" => ["Online"]],
    ["id_paciente" => '9', "nombre" => "Javier López", "fecha_cita" => "2024-11-12", "especialidad" => "Psicopedagogía", "nueva_cita_programada" => "no", "diagnostico" => ["Trastorno de aprendizaje"], "disponibilidad_horaria" => ["Mañana", "Tarde"], "idioma_terapia" => ["Catalán"], "modalidad_sesion" => ["Presencial"]],
    ["id_paciente" => '10', "nombre" => "Laura Gil", "fecha_cita" => "2024-11-15", "especialidad" => "Psicoterapia", "nueva_cita_programada" => "si", "diagnostico" => ["Ansiedad"], "disponibilidad_horaria" => ["Fines de semana"], "idioma_terapia" => ["Inglés"], "modalidad_sesion" => ["Online"]],
    ["id_paciente" => '11', "nombre" => "Juan Torres", "fecha_cita" => "2024-11-18", "especialidad" => "Logopedia", "nueva_cita_programada" => "no", "diagnostico" => ["Problemas de pronunciación","Problemas de habla"], "disponibilidad_horaria" => ["Mañana"], "idioma_terapia" => ["Castellano"], "modalidad_sesion" => ["Presencial"]],
    ["id_paciente" => '12', "nombre" => "Elena Ruiz", "fecha_cita" => "2024-11-20", "especialidad" => "Psicoterapia", "nueva_cita_programada" => "si", "diagnostico" => ["Depresión", "Estrés"], "disponibilidad_horaria" => ["Tarde"], "idioma_terapia" => ["Francés"], "modalidad_sesion" => ["Online"]],
    ["id_paciente" => '13', "nombre" => "Isabel Moreno", "fecha_cita" => "2024-11-22", "especialidad" => "Desarrollo Personal", "nueva_cita_programada" => "no", "diagnostico" => ["Estrés","Depresión"], "disponibilidad_horaria" => ["Fines de semana"], "idioma_terapia" => ["Inglés"], "modalidad_sesion" => ["Presencial"]],
    ["id_paciente" => '14', "nombre" => "Fernando Hernández", "fecha_cita" => "2024-11-25", "especialidad" => "Psicoterapia", "nueva_cita_programada" => "si", "diagnostico" => ["Ansiedad"], "disponibilidad_horaria" => ["Mañana"], "idioma_terapia" => ["Catalán"], "modalidad_sesion" => ["Online"]],
    ["id_paciente" => '15', "nombre" => "Laura Vázquez", "fecha_cita" => "2024-11-28", "especialidad" => "Logopedia", "nueva_cita_programada" => "no", "diagnostico" => ["Dificultades de lenguaje"], "disponibilidad_horaria" => ["Tarde"], "idioma_terapia" => ["Inglés"], "modalidad_sesion" => ["Presencial"]],
    ["id_paciente" => '16', "nombre" => "Andrés Iglesias", "fecha_cita" => "2024-12-01", "especialidad" => "Desarrollo Personal", "nueva_cita_programada" => "si", "diagnostico" => ["Estrés"], "disponibilidad_horaria" => ["Mañana", "Tarde"], "idioma_terapia" => ["Castellano"], "modalidad_sesion" => ["Online"]]
];

// Comprobamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['id']) 
        && empty($_POST['nombre']) 
        && empty($_POST['seleccion_especialidad']) 
        && empty($_POST['fecha_cita'])
        && empty($_POST['nueva_cita'])
        && empty($_POST['diagnostico'])
        && empty($_POST['modalidad_sesion'])
        && empty($_POST['disponibilidad_horaria'])
        && empty($_POST['idioma_terapia '])) {
        // El formulario fue enviado, pero todos los campos están vacíos
        echo "<h1>Por favor, rellene al menos un campo del formulario.</h1>";
        include 'index.php';

    } else {
        // Si todos los campos no están vacíos --> Procesar los datos
            
        // Inicializamos un array para errores
        $errores = [];

        /**
         * Recoger los datos enviados desde el formulario
         * 
         * @param string|null $idPaciente ID del paciente
         * @param string|null $nombre Nombre del paciente
         * @param string|null $especialidad Especialidad seleccionada
         * @param string|null $fechaCita Fecha de la cita seleccionada
         * @param string|null $nuevaCita Si hay una nueva cita programada
         * @param array $diagnostico Diagnósticos seleccionados
         * @param array $modalidadSesion Modalidades de sesión seleccionadas
         * @param array $disponibilidadHoraria Disponibilidad horaria seleccionada
         * @param array $idiomaSesion Idiomas seleccionados para la sesión
         */
        $idPaciente = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : null;
        $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : null;
        $especialidad = isset($_POST['seleccion_especialidad']) ? htmlspecialchars($_POST['seleccion_especialidad']) : null;
        $fechaCita = isset($_POST['fecha_cita']) ? htmlspecialchars($_POST['fecha_cita']) : null;
        $nuevaCita = isset($_POST['nueva_cita']) ? htmlspecialchars($_POST['nueva_cita']) : null;
        $diagnostico = isset($_POST['diagnostico']) ? $_POST['diagnostico'] : [];
        $modalidadSesion = isset($_POST['modalidad_sesion']) ? $_POST['modalidad_sesion'] : [];
        $disponibilidadHoraria = isset($_POST['disponibilidad_horaria']) ? $_POST['disponibilidad_horaria'] : [];
        $idiomaSesion = isset($_POST['idioma_terapia']) ? $_POST['idioma_terapia'] : [];


        // Validación de los datos recibidos
        if (!is_numeric($idPaciente)&&!empty($idPaciente)) {
            $errores[] = "El ID de paciente debe ser un número.";
        }
        if (!is_string($nombre)) {
            $errores[] = "Debes introducir el nombre correcto.";
        }


        // Si hay errores, los mostramos y detenemos la ejecución
        if (!empty($errores)) {
            echo "<h1>Errores en el Formulario</h1>";
            foreach ($errores as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
            echo "<a href='index.php'>Volver al formulario</a>";
            //exit;
        } else{

            /**
             * Filtrar los datos según los criterios proporcionados
             * 
             * @param array $filtro Datos del paciente actual del array de pacientes
             * @return bool Devuelve verdadero si el paciente cumple con los criterios proporcionados
             */
            $resultado = array_filter($pacientes,function($filtro)use($idPaciente,$nombre,$fechaCita,$especialidad,$diagnostico,$nuevaCita,$modalidadSesion,$disponibilidadHoraria,$idiomaSesion) {  
                #Evaluamos si el campo esta vacío, en caso de estarlo, pasa al siguiente campo. Si el campo esta relleno lo almacena en una variable para usarlo como filtro.      
                // Verificar si el ID del paciente coincide o si no se ingresó un ID (es decir, no se filtra por este campo)    
                $coincideId = empty($idPaciente) || $filtro['id_paciente']==$idPaciente ;
                // Verificar si el nombre coincide o si no se ingresó un nombre (búsqueda insensible a mayúsculas). 
                //El nombre no tiene que estar completo, se revisa que las letras introducidas estan contenidas y se devuelven los nombres que han dado coincidencia.
                $coincideNombre = empty($nombre)||stripos(strtolower($filtro['nombre']), strtolower($nombre)) !== false;  
                // Verificar si la fecha de la cita coincide o si no se ingresó una fecha 
                $coincideFecha = empty($fechaCita)||$filtro['fecha_cita'] == $fechaCita;
                // Verificar si la especialidad coincide o si no se ingresó una especialidad
                $coincideEspecialidad = empty($especialidad)||$filtro['especialidad']== $especialidad;
                // Verificar si el diagnóstico coincide o si no se ingresó un diagnóstico. Compara los dos arrays y almacena la intersección entre ellos(elementos comunes)
                $coincideDiagnostico = empty($diagnostico) || array_intersect($filtro['diagnostico'], $diagnostico);
                // Verificar si el idioma de la terapia coincide o si no se ingresó un idioma
                $coincideIdioma = empty($idiomaSesion) || array_intersect($filtro['idioma_terapia'], $idiomaSesion);
                // Verificar si la disponibilidad horaria coincide o si no se ingresó información sobre disponibilidad
                $coincideDisponibilidadHoraria = empty($disponibilidadHoraria) || array_intersect($filtro['disponibilidad_horaria'], $disponibilidadHoraria);
                // Verificar si la modalidad de sesión coincide o si no se ingresó información sobre modalidad
                $coincideModalidadSesion=empty($modalidadSesion)||array_intersect($filtro['modalidad_sesion'], $modalidadSesion);
                
                // Verificar si la nueva cita programada coincide o si no se ingresó información sobre la nueva cita
                $coincideNuevaCita = empty($nuevaCita)||$filtro['nueva_cita_programada'] == $nuevaCita;


                // Retornar verdadero solo si todos los criterios coinciden
                return $coincideId && $coincideNombre && $coincideFecha && $coincideEspecialidad && $coincideDiagnostico && $coincideIdioma && $coincideDisponibilidadHoraria && $coincideModalidadSesion && $coincideNuevaCita ;
            });

                // Mostrar resultados
                if (!empty($resultado)) {

                    echo "<h1 style='font-family: Arial, Helvetica, sans-serif; text-align: center;'>Resultados de la Búsqueda</h1>";
                    echo "<table border='2' cellpadding='10' style='width: 100%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;'>";
                    echo "<tr style='background-color: #f2f2f2;'><th>ID</th><th>Nombre</th><th>Fecha Cita</th><th>Especialidad</th><th>Nueva Cita Programada</th><th>Diagnóstico</th><th>Modalidad de Sesión</th><th>Disponibilidad Horaria</th><th>Idioma</th></tr>";
                    foreach ($resultado as $paciente) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($paciente['id_paciente']) . "</td>";
                        echo "<td>" . htmlspecialchars($paciente['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($paciente['fecha_cita']) . "</td>";
                        echo "<td>" . htmlspecialchars($paciente['especialidad']) . "</td>";
                        echo "<td>" . htmlspecialchars($paciente['nueva_cita_programada']) . "</td>";
                        //Toma un array, que contiene los diagnósticos del paciente y une sus elementos en una sola cadena de texto, separados por una coma y un espacio (, ).
                        echo "<td>" . htmlspecialchars(implode(', ', $paciente['diagnostico'])) . "</td>";
                        echo "<td>" . htmlspecialchars(implode(', ', $paciente['modalidad_sesion'])) . "</td>";
                        echo "<td>" . htmlspecialchars(implode(', ', $paciente['disponibilidad_horaria'])) . "</td>";
                        echo "<td>" . htmlspecialchars(implode(', ', $paciente['idioma_terapia'])) . "</td>";
        
                    }
                    echo "</table>";
            

            } else {
                echo "<h1 style='font-family: Arial, Helvetica, sans-serif; text-align: left;'>No se encontraron resultados que coincidan con los criterios de búsqueda.</h1>";
            }
        }
    }
    
} else {
    // Si no se han enviado datos, incluir el archivo del formulario
    include 'index.php';
}

?>

