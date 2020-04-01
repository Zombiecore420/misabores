<title>Modificacion de usuarios</title>
@extends('index2')
@section('contenido')
{{Form::open (['route' => 'Guardaedicionusuario'])}}
{{Form::token()}}
<div class="container">
	<div class="card">
		<h5 class="card-header">Modificacion de usuarios</h5>
		<div class="card-body">
	<div class="form-group">
		{{Form::label('Clave_usuario', 'Clave de usuario')}}
		@if ($errors ->first('Clave_usuario'))
			<small class="form-text"><i>{{$errors->first('Clave_usuario')}}</i></small>
		@endif
		{{Form::text('Clave_usuario',$consulta->Clave_usuario,['readonly','class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('nombre', 'Nombre de usuario')}}
		@if ($errors ->first('nombre'))
			<small class="form-text"><i>{{$errors->first('nombre')}}</i></small>
		@endif
		
		{{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'id' => 'Nombre', 'onblur' => 'valNombre()'])}}
        <small class="form-text text-muted">Introduzca su Nombre.</small>
        <p id="errorNombre"></p> <!-- Posición del Mensaje de Error -->
		
	</div>
	<div class="form-group">
		{{Form::label('app_usu', 'Apellido paterno')}}
		@if ($errors ->first('app_usu'))
			<p><i>{{$errors->first('app_usu')}}</i></p>
		@endif
		{{Form::text('app_usu', old('app_usu'), ['class' => 'form-control', 'id' => 'App_usu', 'onblur' => 'valApp_usu()'])}}
        <small class="form-text text-muted">Introduzca su primer apellido.</small>
        <p id="errorApp_usu"></p> <!-- Posición del Mensaje de Error -->
		
	</div> 
	<div class="form-group">
		{{Form::label('apm_usu', 'Apellido materno')}}
		@if ($errors ->first('apm_usu'))
			<p><i>{{$errors->first('apm_usu')}}</i></p>
		@endif
		{{Form::text('apm_usu', old('apm_usu'), ['class' => 'form-control', 'id' => 'Apm_usu', 'onblur' => 'valApm_usu()'])}}
        <small class="form-text text-muted">Introduzca su segundo apellido.</small>
        <p id="errorApm_usu"></p> <!-- Posición del Mensaje de Error -->
    </div>
	<div class="form-group">
		{{Form::label('sex_usu', 'Sexo')}}
		@if ($errors ->first('sex_usu'))
			<p><i>{{$errors->first('sex_usu')}}</i></p>
		@endif
		{{Form::radio('sex_usu', 'M'),old('sex_usu')}}Masculino
		{{Form::radio('sex_usu', 'F'),old('sex_usu')}}Femenino
	</div>
	<div class="form-group">
		{{Form::label('tel_usu', 'Telefono')}}
		@if ($errors ->first('tel_usu'))
			<p><i>{{$errors->first('tel_usu')}}</i></p>
		@endif
		{{Form::text('tel_usu',old('tel_usu'),['class' => 'form-control','id' => 'Tel_usu', 'onblur' =>'valTel_usu()'])}}
        <small class="form-text text-muted">Introduzca su telefono.</small>
        <p id="errorTel_usu"></p> <!-- Posición del Mensaje de Error -->
    </div>

	<div class="form-group">
		{{Form::label('calle_usu', 'Calle')}}
		@if ($errors ->first('calle_usu'))
			<small class="form-text"><i>{{$errors->first('calle_usu')}}</i></small>
		@endif
		{{Form::text('calle_usu', old('calle_usu'), ['class' => 'form-control', 'id' => 'Calle_usu', 'onblur' => 'valCalle_usu()'])}}
        <small class="form-text text-muted">Introduzca su calle.</small>
        <p id="errorCalle_usu"></p> <!-- Posición del Mensaje de Error -->
    </div>
	<div class="form-group">
		{{Form::label('ncalle_usu', 'Numero de calle')}}
		@if ($errors ->first('ncalle_usu'))
			<small class="form-text"><i>{{$errors->first('ncalle_usu')}}</i></small>
		@endif
		{{Form::text('ncalle_usu', old('ncalle_usu'), ['class' => 'form-control', 'id' => 'Ncalle_usu', 'onblur' => 'valNcalle_usu()'])}}
        <small class="form-text text-muted">Introduzca su Numero de calle.</small>
        <p id="errorNcalle_usu"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('colonia_usu', 'Nombre de la colonia')}}
		@if ($errors ->first('colonia_usu'))
			<small class="form-text"><i>{{$errors->first('colonia_usu')}}</i></small>
		@endif
		{{Form::text('colonia_usu', old('colonia_usu'), ['class' => 'form-control', 'id' => 'Colonia_usu', 'onblur' => 'valColonia_usu()'])}}
        <small class="form-text text-muted">Introduzca su Nombre de colonia.</small>
        <p id="errorColonia_usu"></p> <!-- Posición del Mensaje de Error -->
	</div>

	<div class="form-group">
		{{Form::label('municipio_usu', 'Municipio')}}
		@if ($errors ->first('municipio_usu'))
			<p><i>{{$errors->first('municipio_usu')}}</i></p>
		@endif
		{{Form::text('municipio_usu', old('municipio_usu'), ['class' => 'form-control', 'id' => 'Municipio_usu', 'onblur' => 'valMunicipio_usu()'])}}
        <small class="form-text text-muted">Introduzca su municipio.</small>
        <p id="errorMunicipio_usu"></p> <!-- Posición del Mensaje de Error -->
    </div>

	<div class="form-group">
		{{Form::label('cp_usu', 'Codigo postal')}}
		@if ($errors ->first('cp_usu'))
			<p><i>{{$errors->first('cp_usu')}}</i></p>
		@endif
        {{Form::text('cp_usu', old('cp_usu'), ['class' => 'form-control', 'id' => 'Cp_usu', 'onblur' => 'valCp_usu()'])}}

		<small class="form-text text-muted">Introduzca su código postal.</small>
        <p id="errorCp_usu"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('estado_usu', 'Estado')}}
		@if ($errors ->first('estado_usu'))
			<p><i>{{$errors->first('estado_usu')}}</i></p>
		@endif
		{{Form::text('estado_usu',old('estado_usu'),['class' => 'form-control','id' => 'Estado_usu', 'onblur' => 'valEstado_usu()'])}}
        <small class="form-text text-muted">Introduzca su Estado .</small>
        <p id="errorEstado_usu"></p> <!-- Posición del Mensaje de Error -->
    </div>

    <tr><td colspan =2 align = 'rigth' onclick="
    return confirm('¿Desea Enviar el registro?')">
{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
		</div>
	</div>
</div>




<script>
    const $input = document.querySelector("#Nombre");
    const patron = /[a-zA-Z. áéíóú]+/;
	
    $input.addEventListener("keydown", event =>
    {
        if (patron.test(event.key))
        {
            document.getElementById('Nombre').style.border = "3px solid #00cc00";
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
            // ---------------------------------------------------------------

            function valNombre()
    {
        var tam = document.getElementById("Nombre").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorNombre").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Nombre").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorNombre").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 15.";
            document.getElementById("Nombre").style.border = "1px solid #FF0000";
        }
    } 
//Validacion colonia
const $input7 = document.querySelector("#Colonia_usu");
    const patron7 = /[a-zA-Z. áéíóú]+/;
	
    $input7.addEventListener("keydown", event =>
    {
        if (patron7.test(event.key))
        {
            document.getElementById('Colonia_usu').style.border = "3px solid #00cc00";
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
            // ---------------------------------------------------------------

            function valColonia_usu()
    {
        var tam = document.getElementById("Colonia_usu").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorColonia_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Colonia_usu").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorColonia_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Colonia_usu").style.border = "1px solid #FF0000";
        }
    }

    const $input8 = document.querySelector("#Municipio_usu");
    const patron8 = /[a-zA-Z. áéíóú]+/;
	
    $input8.addEventListener("keydown", event =>
    {
        if (patron8.test(event.key))
        {
            document.getElementById('Municipio_usu').style.border = "3px solid #00cc00";
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
            // ---------------------------------------------------------------

            function valMunicipio_usu()
    {
        var tam = document.getElementById("Municipio_usu").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorMunicipio_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Municipio_usu").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorMunicipio_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Municipio_usu").style.border = "1px solid #FF0000";
        }
    }
    const $input9 = document.querySelector("#Estado_usu");
    const patron9 = /[a-zA-Z. áéíóú]+/;
	
    $input9.addEventListener("keydown", event =>
    {
        if (patron9.test(event.key))
        {
            document.getElementById('Estado_usu').style.border = "3px solid #00cc00";
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
            // ---------------------------------------------------------------

            function valEstado_usu()
    {
        var tam = document.getElementById("Estado_usu").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorEstado_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Estado_usu").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorEstado_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Estado_usu").style.border = "1px solid #FF0000";
        }
    }
//Validacion APP
    const $input1 = document.querySelector("#App_usu");
    const patron1 = /[a-zA-Z. áéíóú]+/;

    $input1.addEventListener("keydown", event =>
            {
                if (patron1.test(event.key))
                {
                    document.getElementById('App_usu').style.border = "3px solid #00cc00";
                }
                else{
                    if (event.keyCode==8)
                    {
                        // console.log("backspace");
                    }
                    else{
                        event.preventDefault();
                        // var tcla = event.keyCode;
                        // console.log(tcla);
                    }
                }
            });

            function valApp_usu()
    {
        var tam = document.getElementById("App_usu").value;
        if(tam.length>=5 && tam.length<=15)
        {
            document.getElementById("errorApp_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("App_usu").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorApp_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 15.";
            document.getElementById("App_usu").style.border = "1px solid #FF0000";
        }
    }
//validacion APM
const $input2 = document.querySelector("#Apm_usu");
const patron2 = /[a-zA-Z. áéíóú]+/;

$input2.addEventListener("keydown", event =>
            {
                if (patron2.test(event.key))
                {
                    document.getElementById('Apm_usu').style.border = "3px solid #00cc00";
                }
                else{
                    if (event.keyCode==8)
                    {
                        // console.log("backspace");
                    }
                    else{
                        event.preventDefault();
                        // var tcla = event.keyCode;
                        // console.log(tcla);
                    }
                }
            });
            function valApm_usu()
    {
        var tam = document.getElementById("Apm_usu").value;
        if(tam.length>=5 && tam.length<=15)
        {
            document.getElementById("errorApm_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Apm_usu").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorApm_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 15.";
            document.getElementById("Apm_usu").style.border = "1px solid #FF0000";
        }
    }   
//Validacion tel 

const $input3 = document.querySelector("#Tel_usu");
const patron3 = /[0-9+]+/;
$input3.addEventListener("keydown", event =>
            {
                if (patron3.test(event.key))
                {
                    document.getElementById('Tel_usu').style.border = "3px solid #00cc00";
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
            function valTel_usu()
    {
        var tam = document.getElementById("Tel_usu").value;
        if(tam.length>=7 && tam.length<=10)
    

        {
            document.getElementById("errorTel_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Tel_usu").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorTel_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 7 y 10 numeros.";
            document.getElementById("Tel_usu").style.border = "2px solid #FF0000";
        }
    }

//validacion Ncalle
    const $input4 = document.querySelector("#Ncalle_usu");
    const patron4 = /[0-4]+/;
    $input4.addEventListener("keydown", event =>
            {
                if (patron4.test(event.key))
                {
                    document.getElementById('Ncalle_usu').style.border = "3px solid #00cc00";
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
            function valNcalle_usu()
    {
        var tam = document.getElementById("Ncalle_usu").value;
        if(tam.length>=2 && tam.length<=3)
        {
            document.getElementById("errorNcalle_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Ncalle_usu").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorNcalle_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 2 a 3.";
            document.getElementById("Ncalle_usu").style.border = "1px solid #FF0000";
        }
    }

    const $input5 = document.querySelector("#Cp_usu");
    const patron5 = /[0-9]+/;
            $input5.addEventListener("keydown", event =>
            {
                if (patron5.test(event.key))
                {
                    document.getElementById('Cp_usu').style.border = "3px solid #00cc00";
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

    function valCp_usu()
    {
        var tam = document.getElementById("Cp_usu").value;
        if(tam.length<=5  && tam.length>=5)
        {
            document.getElementById("errorCp_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Cp_usu").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorCp_usu").innerHTML = "Error: La longitud de caracteres debe ser de 5.";
            document.getElementById("Cp_usu").style.border = "1px solid #FF0000";
        }
    }
    //Validacion calle
    const $input6 = document.querySelector("#Calle_usu");
    const patron6 = /[a-zA-Z. áéíóú]+/;
	
    $input6.addEventListener("keydown", event =>
    {
        if (patron6.test(event.key))
        {
            document.getElementById('Calle_usu').style.border = "3px solid #00cc00";
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
            // ---------------------------------------------------------------

            function valCalle_usu()
    {
        var tam = document.getElementById("Calle_usu").value;
        if(tam.length>=5 && tam.length<=15)
        {
            document.getElementById("errorCalle_usu").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Calle_usu").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorCalle_usu").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 15.";
            document.getElementById("Calle_usu").style.border = "1px solid #FF0000";
        }
    }

    
</script>

        </script>

</script>

	
@stop
