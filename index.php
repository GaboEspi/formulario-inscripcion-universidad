<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Incripción Universidad</title>
</head>
<body>
    <header>
        <h1>Universidad | <span>Formulario de inscripción</span></h1>
    </header>    
    <div class="contenido">
        <fieldset>
            <legend>Datos personales</legend>
        <form action="inscribir.php" method="post">            
            <label for="nombres">Nombres</label><br>
            <input type="text" name="nombres" required><br>

            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos" required><br>

            <label for="tipo_documento">Tipo de documento</label><br>
            <select name="tipo_documento" id="" required>
                <option value="">--Selecione--</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Ceduda de ciudadania">Ceduda de ciudadania</option>
                <option value="Cedula de extranjeria">Cedula de extranjeria</option>
            </select><br>

            <label for="documento">Documento de identidad</label><br>
            <input type="number" name="documento" placeholder="xxxxxxxxxx" required><br>

            <label for="correo">E-mail</label><br>
            <input type="email" name="correo" placeholder="example@correo.com" required><br>

            <label for="fecha">Fecha de nacimiento</label><br>
            <input type="date" name="fecha" required><br>

            <label for="pais">Nacionalidad</label><br>
            <input type="text" name="pais" placeholder="Pais de nacimiento" required><br>

            <label for="residencia">Lugar de residencia</label><br>
            <input type="text" name="residencia" placeholder="" required><br>

            <label for="estudios">Nivel de estudios</label><br>
            <select name="estudios" required>
                <option value="">--Selecione--</option>
                <option value="bachiller">Bachiller</option>
                <option value="tecnico">Técnico</option>
                <option value="profesional">Profesional</option>
            </select><br>

            <label for="carrera">Carrera</label><br>
            <select name="carrera" required>
                <option value="">--Seleccione--</option>
                <option value="Ing. Sistemas">Ing. Sistemas</option>
                <option value="Ing. Ambiental">Ing. Ambiental</option>
                <option value="Administracion de Empresas">Administración de empresas</option>
                <option value="Sociales">Sociales</option>
                <option value="Biologia">Biologia</option>
            </select><br>
            <input type="submit" value="Inscribir">
        </form>
        </fieldset>
    </div>
</body>
</html>