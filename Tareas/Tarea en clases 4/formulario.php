<!DOCTYPE html>
<html>
<head>
    <title>Insertar Alumno</title>
</head>
<body>
    <form onsubmit="return insertarAlumno()">
        <input type="text" id="nombre" placeholder="Nombre" required><br>
        <input type="text" id="apellido" placeholder="Apellido" required><br>
        <input type="number" id="cu" placeholder="CU" required><br>
        <input type="submit" value="Guardar">
    </form>

    <script src="crud.js"></script>
</body>
</html>