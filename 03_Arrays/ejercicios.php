<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <!-- Ejercicio 1
        Desarrollo Servidor => Alejandra
        Desarrollo Cliente => José Miguel
        Interfaces => José Miguel
        Despliegues => Jaime
        Empresas => Andrea
        Inglés => Virginia

        Mostrarlo todo en una tabla   -->

    <!--  Ejercicio 2

        Francisco => 3
        Daniel => 5
        Aurora => 10
        Luis => 7
        Samuel => 9
        
        Mostrarlo en una tabla con 3 columnas   alumno/tabla/notas(suspenso-aprobado)   -->
        <?php
        $alumnos = [
            "Francisco" => "3",
            "Daniel" => "5",
            "Aurora" => "10",
            "Luis" => "7",
            "Samuel" => "9",
        ];
        $calificacion = "";
        if($nota>=5){
            $calificacion = "Aprobado";
        }else{
            $calificacion = "Suspenso";
        }
        ?>
        <table>
        <caption>Alumnos</caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($alumnos as $alumno => $nota){
                echo "<tr>";
                echo "<td>$alumno</td>";
                echo "<td>$nota</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>


</body>
</html>