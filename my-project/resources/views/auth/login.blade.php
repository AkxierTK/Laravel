{{-- @extends('layouts.app') --}}


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
        <div class="card login-card loginL bg-dark shadow-sm">
            <div class="col-md-12">
              <div class="card-body logeador">
                <div class="brand-wrapper">
                  <img src="{{URL::asset('media/logoChollo.png')}}"  alt="logo" class="logo">
                </div>
                <span class="text-uppercase font-weight-bold display-4 mb-1">Chollo Login</span>
                <p class="login-card-description Acceso  font-weight-bold">Accede a tu cuenta</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                  <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                    <input id="email" name="email" type="email" class="form-control inputs campo @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                  <div class="form-group mb-2">
                    <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                    <input id="password" name="password" type="password" class="form-control inputs campo @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <p class="error">  </p>
                  <div class="form-group mb-2 mr-1">
                  <input name="login" id="login" class="btn btn-block login-btn mb-4 boton font-weight-bold" type="submit" value="Login">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                  <label class="form-check-label" for="remember">
                      Recuerdame
                  </label>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      He olvidado mi contraseña
                  </a>
                  </div>
                  <div class="form-group mb-4">
                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('register') }}">
                    Crear Cuenta
                </a>
                  </div>
                </form>
            @endif
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
</body>

</html>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
