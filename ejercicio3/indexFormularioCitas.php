<pre style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ccc;">
Alumno: <strong>Pablo Cabello Hurtado</strong> 
TAREA 01 - Filtro por fecha mayor  a una dada.
</pre>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de citas</h1>
    <p>Utiliza este formulario para buscar datos dentro del conjunto de datos. 
        Debes ingresar un número en el campo de texto y seleccionar uno o más elementos usando los selectores proporcionados.</p>
    <form action="datos.php" method="POST">
        <!-- Campo para DATO NUMÉRICO TIPO TEXTO -->
        <label for="numero">Ingrese un id de paciente:</label>
        <input type="text" id="numero" name="numero" required>
        <br><br>

        <!-- Campo para nombre -->
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        
        <!-- Telefono -->
        <label for="telefono">Teléfono de contacto:</label>
        <input type="tel" id="telefono" name="telefono" >
        <br><br>

        <!-- Campo para cita con el departamento -->
        <label for="departamento">Seleccione un Departamento:</label>
        <select id="departamento" name="departamento_cita" required>
            <option value="">Selecciona departamento</option>
            <option value="Adulto">Adulto</option>
            <option value="Jóvenes y Adolescente">Jóvenes y Adolescente</option>
            <option value="Infantil">Infantil</option>
        </select>
        <br><br>

        <!-- Campo para tipo de especialidad -->
        <label for="especialidad">Seleccione una Especialidad:</label>
        <select id="especialidad" name="seleccion_especialidad" >
            <option value="">Seleccione una Especialidad</option>
            <option value="Psicoterapia">Psicopedagogía</option>
            <option value="Psicoterapia">Psicoterapia</option>
            <option value="Desarrollo Personal">Desarrollo Personal</option>
        </select>
        <br><br>
    
        <!-- Campo para selección de fecha -->
        <label for="fecha">Citas disponibles:</label>
        <input type="date" id="fecha" name="fecha_cita">
        <br><br>

        <!-- Campo Detalle de la consulta -->
        <label for="descripcion">Descripción de la consulta:</label>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea>
        <br><br>
    
    <button type="submit">Buscar</button>
</form>

</body>
</html>