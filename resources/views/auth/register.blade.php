<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head> 
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card1">
          <div class="card-header">Registro</div>
          <div class="card-body">
            <div class="container-fluid">
            <form action="{{ Route::get('register')->uri() }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Nombre completo">
                </div>
                <div class="form-group">
                  <label for="email">Correo electrónico</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <label for="password-confirm">Confirmar contraseña</label>
                  <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirmar contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
