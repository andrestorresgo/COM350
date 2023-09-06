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
        <a class="nav-link" href="aulas.php">Volver</a>
    </nav>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Registrate</h4>
          </div>
          <div class="card-body">
            <form id="registerForm" action="createAulas.php" method="POST">
              <div class="form-group">
                <label for="aula">Aula</label>
                <input type="text" class="form-control" id="aula" name="aula" placeholder="Ingresa tu aula">
              </div>
              <div class="form-group">
              <label for="estado">Estado</label>
              <select class="form-control" id="estado" name="estado">
                <option value="libre">Libre</option>
                <option value="ocupada">Ocupada</option>
              </select>
            </div>
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
</body>
</html>