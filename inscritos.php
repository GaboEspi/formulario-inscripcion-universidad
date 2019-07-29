<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inscritos.css">
    <title>Inscripción</title>
</head>
<body>
    <header>
        <h1>Universidad | <span>Listado inscritos</span></h1>
    </header>
    <div class="contenido">
        <table>
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Documento</th>
                <th>E-mail</th>
                <th>País</th>
                <th>Estudios</th>
                <th>Carrera inscribir</th>                
            </thead>
            <tbody>
                <?php
                    require_once("conexion.php");
                    $sql = "SELECT * FROM inscritos";
                    $cont = false;
                    if($resultados = $conexion->query($sql)){
                        while($registro = $resultados->fetch_assoc()){
                            echo ($cont)?"<tr>":"<tr class='color'>";
                            echo"<td> ".$registro['nombres']."</td>
                                <td> ".$registro['apellidos']."</td>
                                <td> ".$registro['documento']."</td>
                                <td> ".$registro['correo']."</td>
                                <td> ".$registro['pais']."</td>
                                <td> ".$registro['estudios']."</td>
                                <td> ".$registro['carrera']."</td>
                            </tr>";
                            $cont = ($cont) ? false : true;
                        }
                    }
                ?>
                
            </tbody>
        </table>        
    </div>
</body>
</html>