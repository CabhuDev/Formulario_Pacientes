<pre style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ccc;font-family: Arial, Helvetica, sans-serif">
Alumno: <strong>Pablo Cabello Hurtado</strong> 
TAREA 01 - Filtro de BD de pacientes.
</pre>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        h1{
            font-size: xx-large;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        label{
            font-weight: bold;
        }
        form {
            width: 100%;
            padding: 10px;
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2
        }
        button {
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
        padding-right: 10%;
        padding-left: 10%;
        border-radius: 30px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Filtrado de pacientes</h1>
    <p>Utiliza este formulario para filtrar datos de los pacientes del centro. <br>
    <br><strong>1. Id de paciente:</strong> Permite introducir el identificador numérico único del paciente. Solo se aceptan valores numéricos.
    <br><strong>2. Nombre Completo:</strong> Campo de texto libre para introducir el nombre completo del paciente.
    <br><strong>3. Especialidad:</strong> Selector desplegable para escoger una de las especialidades del centro, como Psicoterapia, Desarrollo Personal, Psicopedagogía, o Logopedia.
    <br><strong>4. Modalidad de Sesión:</strong> Campos de selección múltiple (checkboxes) que permiten indicar si la sesión es presencial y/o online.
    <br><strong>5. Diagnósticos del paciente:</strong> Campos de selección múltiple (checkboxes) para seleccionar uno o más diagnósticos asignados al paciente, como Depresión, Ansiedad, etc.
    <br><strong>6. Disponibilidad del paciente:</strong> Permite especificar la disponibilidad del paciente (mañana, tarde o fines de semana) usando checkboxes.
    <br><strong>7. ¿Nueva cita programada?:</strong> Checkbox para indicar si el paciente tiene una nueva cita programada. Se puede seleccionar "Sí" o "No".
    <br><strong>8. Idioma en el que se imparte la sesión:</strong> Campos de selección múltiple (checkboxes) para especificar el idioma de la sesión, como Castellano, Inglés, Francés o Catalán.
    <br><strong>9. Citas disponibles (Fecha):</strong> Permite seleccionar la fecha en la que se desea buscar disponibilidad para una cita.
    </p>
    <br>

    <form action="datos.php" method="POST">
        <!-- Campo para DATO NUMÉRICO TIPO TEXTO -->
        <label for="numero">Id de paciente:</label>
        <input type="text" id="numero" name="id">
        <br><br>

        <!-- Campo para nombre -->
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        

        <!-- Campo para tipo de especialidad -->
        <label for="especialidad">Seleccione una Especialidad:</label>
        <select id="especialidad" name="seleccion_especialidad" >
            <option value="">Seleccione una Especialidad</option>
            <option value="Psicopedagogía">Psicopedagogía</option>
            <option value="Psicoterapia">Psicoterapia</option>
            <option value="Desarrollo Personal">Desarrollo Personal</option>
            <option value="Logopedia">Logopedia</option>

        </select>
        <br><br>

        <!-- Campo para modalidad de sesión -->
        <label for="modalidad_sesion">Modalidad de Sesión:</label><br>        
        <input type="checkbox" id="modalidad_sesion" name="modalidad_sesion[]" value="Presencial"> Presencial
        <input type="checkbox" id="modalidad_sesion" name="modalidad_sesion[]" value="Online"> Online
        <br><br>

        <!-- Campo para selección de patologías -->
        <label for="diagnostico">Diagnósticos del paciente:</label><br>        
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Depresión"> Depresión
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Ansiedad"> Ansiedad
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Trastorno de estrés postraumático"> Trastorno de estrés postraumático
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Trastorno de aprendizaje"> Trastorno de aprendizaje
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Problemas de pronunciación"> Problemas de pronunciación
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Estrés"> Estrés
        <input type="checkbox" id="diagnostico" name="diagnostico[]" value="Problemas de habla"> Problemas de habla


        <br><br>

        <!-- Campo para disponibilidad horaria -->
        <label for="disponibilidad_horaria">Disponibilidad del paciente:</label><br>        
        <input type="checkbox" id="disponibilidad_horaria" name="disponibilidad_horaria[]" value="Mañana"> Mañana
        <input type="checkbox" id="disponibilidad_horaria" name="disponibilidad_horaria[]" value="Tarde"> Tarde
        <input type="checkbox" id="disponibilidad_horaria" name="disponibilidad_horaria[]" value="Fines de semana"> Fines de semana
        <br><br>

        <!-- Campo para confirmación cita programada -->
        <label for="nueva_cita">¿Nueva cita programada?:</label><br>   
        <input type="checkbox" id="nueva_cita" name="nueva_cita" value="si"> Sí
        <input type="checkbox" id="nueva_cita" name="nueva_cita" value="no"> No
        <br><br>

        <!-- Campo para idioma de la sesión -->
        <label for="idioma_terapia">Idioma en el que se imparte la sesión:</label><br>        
        <input type="checkbox" id="idioma_terapia" name="idioma_terapia[]" value="Castellano"> Castellano
        <input type="checkbox" id="idioma_terapia" name="idioma_terapia[]" value="Inglés"> Inglés
        <input type="checkbox" id="idioma_terapia" name="idioma_terapia[]" value="Francés"> Francés
        <input type="checkbox" id="idioma_terapia" name="idioma_terapia[]" value="Catalán"> Catalán
        <br><br>


        <!-- Campo para selección de fecha -->
        <label for="fecha">Citas disponibles:</label>
        <input type="date" id="fecha" name="fecha_cita">
        <br><br>


    
    <button type="submit">Buscar</button>
</form>

</body>
</html>