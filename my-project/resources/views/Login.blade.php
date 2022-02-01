
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
  <title>Chollo Severo Login</title>
</head>

    <body class="test">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 text-white ">
      <div class="container caja">
        <div class="card login-card login bg-dark shadow-sm">
            <div class="col-md-12">
              <div class="card-body logeador">
                <div class="brand-wrapper">
                  <img src="{{URL::asset('media/logoChollo.png')}}"  alt="logo" class="logo">
                </div>
                <span class="text-uppercase font-weight-bold display-4 mb-1">Chollo Login</span>
                <p class="login-card-description Acceso  font-weight-bold">Accede a tu cuenta</p>
                <form action="{{ route('usuario.acceder') }}" method="post">
                    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control inputs campo" placeholder="ejemplo@ejemplo.com"  autofocus>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" class="form-control inputs campo" placeholder="Contraseña">
                    <input type="checkbox" onclick="mostrar()">
                    <label for="mostrar" id="mostrar">Mostrar contraseña</label>
                  </div>
                  <p class="error">  </p>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4 boton font-weight-bold" type="submit" value="Login">
                </form>
                <p class="login-card-footer-text clase">¿No tienes cuenta? <a href="{{ route('NuevaCuenta') }}" class="text-reset color">Regístrate aquí</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
</body>



</html>