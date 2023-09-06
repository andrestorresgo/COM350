<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center mb-4">Horario</h1>
        


        <?php
        include 'config.php';
        
        $sql_subjects = "SELECT DISTINCT id_materia FROM horarios";
        $result_subjects = $pdo->query($sql_subjects);

        while ($subject_row = $result_subjects->fetch(PDO::FETCH_ASSOC)) {
            $subject_id = $subject_row["id_materia"];
        
            // Fetch schedule data for the current subject with a JOIN
            $sql = "SELECT horarios.*, aulas.aula AS classroom_name
                    FROM horarios
                    INNER JOIN aulas ON horarios.id_aula = aulas.id
                    WHERE horarios.id_materia = $subject_id";
            $result = $pdo->query($sql);
        
            echo "<div class='container mt-5'>";
            echo "<h1 class='text-center mb-4'>Horario para Grupo $subject_id</h1>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Hora</th>";
            echo "<th scope='col'>Materia</th>";
            echo "<th scope='col'>Aula</th>";
            echo "<th scope='col'>Docente</th>";
            echo "<th scope='col'>Dia</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
    
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["hora_entrada"] . " - " . $row["hora_salida"] . "</td>";
                echo "<td>" . $row["id_materia"] . "</td>";
                echo "<td>" . $row["classroom_name"] . "</td>"; // Display classroom name from the JOIN
                echo "<td>" . $row["id_docente"] . "</td>";
                echo "<td>" . $row["dia_de_semana"] . "</td>";
                echo "</tr>";
            }
    
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>