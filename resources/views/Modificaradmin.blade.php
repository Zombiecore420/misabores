<title>Modificacion de administradores</title>
@extends('index2')
@section('contenido')
{{Form::open (['route' => 'Guardaedicionadmin','files' => 'true'])}}
{{Form::token()}}
<div class="container">
	<div class="card">
		<h5 class="card-header">Modificacion de administradores</h5>
		<div class="card-body">
	<div class="form-group">
		{{Form::label('idu', 'Clave de admin')}}
		@if ($errors ->first('idu'))
			<small class="form-text"><i>{{$errors->first('idu')}}</i></small>
		@endif
		{{Form::text('idu',$usu->idu,['readonly','class' => 'form-control'])}}
	</div>
	<div>
		<img src="{{asset('public/archivos/'.$usu->archivo)}}" height=150 width=150>
	</div>
	<div class="form-group">
		{{Form::label('archivo', 'Foto')}}
		@if ($errors ->first('archivo'))
			<p><i>{{$errors->first('archivo')}}</i></p>
		@endif
		{{Form::file('archivo',['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('nombre', 'Nombre del administrador')}}
		@if ($errors ->first('nombre'))
			<small class="form-text"><i>{{$errors->first('nombre')}}</i></small>
		@endif
		
		{{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'id' => 'nombre', 'onblur' => 'valnombre()'])}}
        <p id="errornombre"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('apellido', 'Apellido ')}}
		@if ($errors ->first('apellido'))
			<p><i>{{$errors->first('apellido')}}</i></p>
		@endif
		{{Form::text('apellido', old('apellido'), ['class' => 'form-control', 'id' => 'Apellido', 'onblur' => 'valApellido()'])}}
        <p id="errorApellido"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('tipo', 'Tipo de admin')}}
		@if ($errors ->first('tipo'))
			<p><i>{{$errors->first('tipo')}}</i></p>
		@endif
		{{Form::select('tipo', array('Admin' => 'Admin',
										    'User' => 'User',
												),null,['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('correo', 'correo')}}
		@if ($errors ->first('correo'))
			<p><i>{{$errors->first('correo')}}</i></p>
		@endif
		{{Form::email('correo', old('correo'), ['class' => 'form-control', 'id' => 'Mail', 'onblur' => 'valMail()'])}}
        <p id="errorMail"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('password', 'password')}}
		@if ($errors ->first('password'))
			<p><i>{{$errors->first('password')}}</i></p>
		@endif

		{{Form::text('password', old('password'), ['class' => 'form-control', 'id' => 'Password', 'onblur' => 'valPassword()'])}}
    	<p id="errorPassword"></p>
	</div>


{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
		</div>
	</div>
</div>
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
@stop
