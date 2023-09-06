<?php
session_start();

include 'config.php';
include 'accountType.php';


//echo $_SESSION['correo'];

if (!isset($_SESSION['correo'])) {
    header("location:login.php");
    echo $_SESSION['correo'];    
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <a class="navbar-brand" href="accountType.php">

        Bienvenido, 

        <?php
        include 'config.php';
        
        if (isset($_SESSION["correo"])) {
            $correo = $_SESSION["correo"];
            $query = "SELECT nombre FROM persona WHERE correo = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$correo]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                echo $user["nombre"];
            }
        }
        ?>!
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="schedule.php">Horario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mapa.html">Mapa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grupos.php">Grupos</a>
            </li>
            <?php
            if ($_SESSION["accountType"] == "admin") {
                echo "<li class='nav-item'>
                        <a class='nav-link' href='aulas.php'>Aulas</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='admin.php'>Panel de Administrador</a>
                      </li>";
            }
            ?>
          </ul>
        </div>
          <a class="nav-link" href="cerrarsession.php">Cerrar Sesion</a>
      </nav>

      


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
