<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Inicio de sesión</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input" checked>
                                    <label for="remember" class="form-check-label">Recuérdame</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            <a href="{{ route('password.request') }}" class="btn btn-link">¿Olvidaste tu contraseña?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>