<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="{{ asset('public/img/Doge.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crear cuenta</title>
    <!-- iconnos:css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/vendor.bundle.base.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style1.css') }}"> <!-- End layout styles -->

</head>
{{Form::open (['route' => 'Guardaadmin','files' => 'true'])}}
{{Form::token()}}
<body>

	<div class="container-scroller">
	    <div class="container-fluid page-body-wrapper full-page-wrapper">
	      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
	        <div class="row flex-grow">
	          <div class="col-lg-6 d-flex align-items-center justify-content-center">
	            <div class="auth-form-transparent text-left p-3">
	              <div class="brand-logo">
									<a href="{{ asset('index2') }}"><img src="{{ asset('public/img/restaurante.jpg') }}" alt="logo" class="rounded-circle" height="150" ></a>

	              </div>
	              <h4>Bienvenido</h4>
	              <form class="pt-3">
	                <div class="form-group">
	                  <label>Nombre de admin</label>
										@if ($errors ->first('nombre'))
											<p><i>{{$errors->first('nombre')}}</i></p>
										@endif
	                  <div class="input-group">
	                    <div class="input-group-prepend bg-transparent">
	                      <span class="input-group-text bg-transparent border-right-0">
	                        <i class="mdi text-primary icon-user"></i>
	                      </span>
	                    </div>
										
											{{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'id' => 'nombre', 'onblur' => 'valnombre()'])}}
                      <p id="errornombre"></p> <!-- Posición del Mensaje de Error -->
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label>Apellido</label>
										@if ($errors ->first('apellido'))
											<p><i>{{$errors->first('apellido')}}</i></p>
										@endif
	                  <div class="input-group">
	                    <div class="input-group-prepend bg-transparent">
	                      <span class="input-group-text bg-transparent border-right-0">
	                        <i class="mdi mdi-account-outline text-primary  icon-book-open"></i>
	                      </span>
	                    </div>
										
											{{Form::text('apellido', old('apellido'), ['class' => 'form-control', 'id' => 'Apellido', 'onblur' => 'valApellido()'])}}
                      <p id="errorApellido"></p> <!-- Posición del Mensaje de Error -->
                    </div>
	                </div>
									<div class="form-group">
	                  <label>Tipo</label>
										{{Form::select('tipo', array('Admin' => 'Admin',
																	   						 'User' => 'User'),
																								 null,['class' => 'form-control'])}}
	                </div>
	                <div class="form-group">
	                  <label>Correo</label>
										@if ($errors ->first('correo'))
											<p><i>{{$errors->first('correo')}}</i></p>
										@endif
	                  <div class="input-group">
	                    <div class="input-group-prepend bg-transparent">
	                      <span class="input-group-text bg-transparent border-right-0">
													<i class="mdi mdi-account-outline text-primary  icon-briefcase"></i>
	                      </span>
	                    </div>
											{{Form::email('correo', old('correo'), ['class' => 'form-control', 'id' => 'Mail', 'onblur' => 'valMail()'])}}
                  
                      <p id="errorMail"></p> <!-- Posición del Mensaje de Error -->
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label>Contraseña</label>
										@if ($errors ->first('password'))
											<p><i>{{$errors->first('password')}}</i></p>
										@endif
	                  <div class="input-group">
	                    <div class="input-group-prepend bg-transparent">
	                      <span class="input-group-text bg-transparent border-right-0">
	                        <i class="mdi mdi-lock-outline text-primary icon-key"></i>
	                      </span>
	                    </div>
											{{Form::password('password', old('password'), ['class' => 'form-control', 'id' => 'Password', 'onblur' => 'valPassword()'])}}
                      <p id="errorPassword"></p>
	                  </div>
	                </div>
	                <div class="mb-4">
	                  <div class="form-check">
	                    <label class="form-check-label text-muted">
	                      <input type="checkbox" class="form-check-input" required>
	                      Acepto los terminos y condiciones.
	                    </label>
	                  </div>
	                </div>
                    
										<div class="mb-2 d-flex">
											{{Form::submit('Crear',['class' => 'btn btn-success'])}}
		                </button>
		                <button type="button" class="btn btn-google auth-form-btn flex-grow ml-5" OnClick="location.href='{{ asset('index') }}'">
		                  <i class="mdi mdi-google mr-2"></i>
		                  Volver
		                </button>
		                </div>

	                <div class="text-center mt-4 font-weight-light">
	                  Tienes una cuenta? <a href="{{ asset('login') }}" class="text-primary">Iniciar sesion</a>
	                </div>
	              </form>
	            </div>
	          </div>
	          
	            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  Todos los derechos reservados.</p>
	          </div>
	        </div>
	      </div>
	      <!-- content-wrapper ends -->
	    </div>
	    <!-- page-body-wrapper ends -->
	  </div>
	
<script src="{{ asset('public/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('public/js/off-canvas.js') }}"></script>
<script src="{{ asset('public/js/misc.js') }}"></script>
<!-- endinject -->
</body>


<script>
    const $input = document.querySelector("#nombre");
	const $input2 = document.querySelector("#Apellido");
	const $input3 = document.querySelector("#Mail");
	const $input4 = document.querySelector("#Password");
	
	
    const patron = /[a-zA-Z. áéíóú]+/;
	const patron2 = /[a-zA-Z. áéíóú]+/;
	const patron3 = /[a-zA-Z. áéíóú]+/;
	const patron4 = /[a-zA-Z.]+/;
	
	
    //const patron = /[0-9]+/;

    $input.addEventListener("keydown", event =>
    {
        if (patron.test(event.key))
        {
            document.getElementById('nombre').style.border = "3px solid #00cc00";
        }
        else{
            if (event.keyCode==8)
            {
                //console.log("backspace");
            }
            else{
                event.preventDefault();
                //var tcla = event.keyCode;
                //console.log(tcla);
            }
        }
    });
	$input2.addEventListener("keydown", event =>
    {
        if (patron2.test(event.key))
        {
            document.getElementById('Apellido').style.border = "3px solid #00cc00";
        }
        else{
            if (event.keyCode==8)
            {
                //console.log("backspace");
            }
            else{
                event.preventDefault();
                //var tcla = event.keyCode;
                //console.log(tcla);
            }
        }
    });
	$input3.addEventListener("keydown", event =>
    {
        if (patron3.test(event.key))
        {
            document.getElementById('Mail').style.border = "3px solid #00cc00";
        }
        else{
            if (event.keyCode==8)
            {
                //console.log("backspace");
            }
            else{
                event.preventDefault();
                //var tcla = event.keyCode;
                //console.log(tcla);
            }
        }
    });
	$input4.addEventListener("keydown", event =>
    {
        if (patron4.test(event.key))
        {
            document.getElementById('Password').style.border = "3px solid #00cc00";
        }
        else{
            if (event.keyCode==8)
            {
                //console.log("backspace");
            }
            else{
                event.preventDefault();
                //var tcla = event.keyCode;
                //console.log(tcla);
            }
        }
    });
	
    //-----------------------------------------------------------------------------
    function valnombre()
    {
        var tam = document.getElementById("nombre").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errornombre").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("nombre").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errornombre").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("nombre").style.border = "1px solid #FF0000";
        }
    }

	function valApellido()
    {
        var tam = document.getElementById("Apellido").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorApellido").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Apellido").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorApellido").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Apellido").style.border = "1px solid #FF0000";
        }
    }

	
	function valMail()
    {
        var tam = document.getElementById("Mail").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorMail").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Mail").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorMail").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Mail").style.border = "1px solid #FF0000";
        }
    }
	
	function valPassword()
    {
        var tam = document.getElementById("Password").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorPassword").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Password").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorPassword").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Password").style.border = "1px solid #FF0000";
        }
    }
</script>
</script>
</html>
