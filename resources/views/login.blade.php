<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="{{ asset('public/img/Doge.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <title>Iniciar Sesión</title>
    <!-- iconnos:css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public//simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/vendor.bundle.base.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style1.css') }}"> <!-- End layout styles -->

</head>
{{Form::open (['route' => 'valida'])}}
{{Form::token()}}
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-1">
              <div class="brand-logo">
              <a href="{{ asset('login') }}"><img src="{{ asset('public/img/fondo.png') }}" alt="logo" class="rounded-circle" height="190" ></a>

              </div>
              <h4>¡Bienvenido!</h4>
              <h6 class="font-weight-light">Ingresa tus datos para continuar</h6>

                @if (Session::has('error'))
                    <div>{{ Session::get('error') }}</div>
                @endif
                <div class="form-group">
                  <label for="exampleInputEmail">Nombre de usuario</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="icon-user"></i>
                      </span>
                    </div>

                    <input type="text" name="correo"class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Correo electronico" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class=" icon-lock"></i>
                      </span>
                    </div>

                    {{Form::password('password',['class' => 'form-control','placeholder' => 'Ingresa tu contraseña','required' =>'required'])}}
                  </div>
                </div>
                @if($errors->first('correo'))
                 {{ $errors->first('correo') }}
                @endif
                <br>
                @if($errors->first('password'))
                 {{ $errors->first('password') }}
                @endif

                {{Form::submit('Iniciar sesión',['class' => 'btn btn-block btn-info btn-lg font-weight-medium auth-form-btn'])}}
                <div class="mb-2 d-flex">
                    <br>
                </div>
                <div class="mb-2 d-flex">
                </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  ¿No tienes una cuenta? <a href="{{ asset('Altaadmin') }}" class="text-primary">Crear una nueva</a>
                </div>

            </div>
          </div>
          
            <p class="font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  Todos los derechos reservados Mi sabor es .</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('public/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/js/misc.js') }}"></script>
  <!-- endinject -->
</body>

</html>
