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
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Login</h4>
            </div>
            <div class="card-body">
              <form id="loginForm" action="autenticar.php" method="POST">
                <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo">
                </div>
                <div class="form-group">
                  <label for="pasword">Contraseña</label>
                  <input type="password" class="form-control" id="pasword" name="pasword" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
              </form>
              <div class="mt-3 text-center">
                <p>No tienes una cuenta? <a href="register.php">Regístrate</a></p>
              </div>
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