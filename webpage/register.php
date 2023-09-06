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
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Registrate</h4>
          </div>
          <div class="card-body">
            <form id="registerForm" action="create.php" method="POST">
              <div class="form-group">
                <label for="ci">CI</label>
                <input type="text" class="form-control" id="ci" name="ci" placeholder="Ingresa tu CI">
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos"placeholder="Ingresa tus apellidos">
              </div>
              <div class="form-group">
                <label for="sexo">Sexo</label>
                <select class="form-control" id="sexo" name="sexo">
                  <option value="male">Masculino</option>
                  <option value="female">Femenino</option>
                  <option value="none">No especificar</option>
                </select>
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingresa tu celular">
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo">
              </div>
              <div class="form-group">
                <label for="pasword">Contraseña</label>
                <input type="password" class="form-control" id="pasword" name="pasword" placeholder="Ingresa tu contraseña">
              </div>
              <div class="form-group">
              <label for="accountType">Tipo de cuenta</label>
              <select class="form-control" id="accountType" name="accountType">
                <option value="user">Usuario</option>
                <option value="admin">Admin</option>
              </select>
            </div>
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </form>
            <div class="mt-3 text-center">
              <p>Ya tienes una cuenta? <a href="login.php">Login</a></p>
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