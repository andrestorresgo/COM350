<?php
session_start();
include 'config.php';
include 'accountType.php';

if (!isset($_SESSION['correo']) || $_SESSION['accountType'] != 'admin') {
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="registrarAulas.php">Registrar Aula</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aulasLibres.php">Aulas Libres</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container mt-5">
    <h2>Aulas</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Aulas</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include 'config.php';
        
        $query = "SELECT * FROM Aulas";
        $result = $pdo->query($query);
        
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['aula']."</td>
                    <td>".$row['estado']."</td>
                </tr>";
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