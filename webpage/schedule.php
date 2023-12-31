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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Docente</th>
                    <th scope="col">Dia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';

                $query = "SELECT horarios.*, aulas.aula AS nombre_aula
                FROM horarios
                INNER JOIN aulas ON horarios.id_aula = aulas.id";
                $result = $pdo->query($query);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  echo "<tr>";
        echo "<td>" . $row["hora_entrada"] . " - " . $row["hora_salida"] . "</td>";
        echo "<td>" . $row["id_materia"] . "</td>";
        echo "<td>" . $row["nombre_aula"] . "</td>"; // Display classroom name from the JOIN
        echo "<td>" . $row["id_docente"] . "</td>";
        echo "<td>" . $row["dia_de_semana"] . "</td>";
        echo "</tr>";
              }
                ?>
            </tbody>
        </table>
    </div>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>