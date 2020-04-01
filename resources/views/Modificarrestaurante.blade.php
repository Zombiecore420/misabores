<title>Modificacion de Restaurantes</title>
@extends('index2')
@section('contenido')
{{Form::open (['route' => 'Guardarestaurante','files' => 'true'])}}
{{Form::token()}}
<div class="container"> 
	<div class="card">
		<h5 class="card-header">Modificacion de Restaurantes</h5>
		<div class="card-body">
	<div class="form-group">
		{{Form::label('Clave_restaurante', 'Clave de Restaurante')}}
		@if ($errors ->first('Clave_restaurante'))
			<small class="form-text"><i>{{$errors->first('Clave_restaurante')}}</i></small>
		@endif
		{{Form::text('Clave_restaurante',$consulta->Clave_restaurante,['readonly','class' => 'form-control'])}}
	</div>
	<div>
		
	<div class="form-group">
		{{Form::label('nombre', 'Nombre del restaurante')}}
		@if ($errors ->first('nombre'))
			<small class="form-text"><i>{{$errors->first('nombre')}}</i></small>
		@endif
		{{Form::text('nombre', old('nombre'), ['class' => 'form-control', 'id' => 'nombre', 'onblur' => 'valnombre()'])}}
        <small class="form-text text-muted">Introduzca el nombre del restaurante.</small>
        <p id="errornombre"></p> <!-- Posición del Mensaje de Error -->
	</div>
	
	<div class="form-group">
		{{Form::label('tel', 'Telefono')}}
		@if ($errors ->first('tel'))
			<p><i>{{$errors->first('tel')}}</i></p>
		@endif
		{{Form::text('tel',old('tel'),['class' => 'form-control','id' => 'tel', 'onblur' =>'valtel()'])}}
        <small class="form-text text-muted">Introduzca el telefono del restaurante.</small>
        <p id="errortel"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('calle', 'Calle')}}
		@if ($errors ->first('calle'))
			<small class="form-text"><i>{{$errors->first('calle')}}</i></small>
		@endif
		{{Form::text('calle', old('calle'), ['class' => 'form-control', 'id' => 'calle', 'onblur' => 'valcalle()'])}}
        <small class="form-text text-muted">Introduzca la calle del restaurante.</small>
        <p id="errorcalle"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('Ncalle', 'Numero de calle')}}
		@if ($errors ->first('Ncalle'))
			<small class="form-text"><i>{{$errors->first('Ncalle')}}</i></small>
		@endif
		{{Form::text('Ncalle', old('Ncalle'), ['class' => 'form-control', 'id' => 'Ncalle', 'onblur' => 'valNcalle()'])}}
        <small class="form-text text-muted">Introduzca el numero de calle.</small>
        <p id="errorNcalle"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('colonia', 'Nombre de la colonia')}}
		@if ($errors ->first('colonia'))
			<small class="form-text"><i>{{$errors->first('colonia')}}</i></small>
		@endif
		{{Form::text('colonia', old('colonia'), ['class' => 'form-control', 'id' => 'colonia', 'onblur' => 'valcolonia()'])}}
        <small class="form-text text-muted">Introduzca la colonia.</small>
        <p id="errorcolonia"></p> <!-- Posición del Mensaje de Error -->
	</div>

	<div class="form-group">
		{{Form::label('municipo', 'Municipio')}}
		@if ($errors ->first('municipo'))
			<p><i>{{$errors->first('municipo')}}</i></p>
		@endif
		{{Form::text('municipio', old('municipio'), ['class' => 'form-control', 'id' => 'municipio', 'onblur' => 'valmunicipio()'])}}
        <small class="form-text text-muted">Introduzca el municipio</small>
        <p id="errormunicipio"></p> <!-- Posición del Mensaje de Error -->
	</div>

	<div class="form-group">
		{{Form::label('cp', 'Codigo postal')}}
		@if ($errors ->first('cp'))
			<p><i>{{$errors->first('cp')}}</i></p>
		@endif
		{{Form::text('cp',old('cp'),['class' => 'form-control','id' => 'cp', 'onblur' => 'valcp()'])}}
        <small class="form-text text-muted">Introduzca el código postal.</small>
        <p id="errorcp"></p> <!-- Posición del Mensaje de Error -->
	</div>
	<div class="form-group">
		{{Form::label('correo', 'Correo electronico')}}
		@if ($errors ->first('correo'))
			<p><i>{{$errors->first('correo')}}</i></p>
		@endif
        {{Form::text('correo', old('correo'), ['class' => ' form-control', 'id' => 'Mail', 'onblur' => 'valMail()'])}}
		<small class="form-text text-muted">Introduzca el correo electronico.</small>
        <p id="errorMail"></p>
	</div>
	<div class="form-group">
		{{Form::label('estado', 'Estado')}}
		@if ($errors ->first('estado'))
			<p><i>{{$errors->first('estado')}}</i></p>
		@endif
		{{Form::text('estado',old('estado'),['class' => 'form-control','id' => 'estado', 'onblur' => 'valestado()'])}}
        <small class="form-text text-muted">Introduzca el estado.</small>
        <p id="errorestado"></p> <!-- Posición del Mensaje de Error -->
	</div>


{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
		</div>
	</div>
</div>


<script>
    const $input = document.querySelector("#nombre");
	const $input2 = document.querySelector("#calle");
	const $input3 = document.querySelector("#colonia");
	const $input4 = document.querySelector("#municipio");
	const $input5 = document.querySelector("#estado");
	
	
    const patron = /[a-zA-Z. áéíóú]+/;
	const patron2 = /[a-zA-Z. áéíóú]+/;
	const patron3 = /[a-zA-Z. áéíóú]+/;
	const patron4 = /[a-zA-Z. áéíóú]+/;
	const patron5 = /[a-zA-Z. áéíóú]+/;
	
	
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
            document.getElementById('calle').style.border = "3px solid #00cc00";
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
            document.getElementById('colonia').style.border = "3px solid #00cc00";
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
            document.getElementById('municipio').style.border = "3px solid #00cc00";
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
	$input5.addEventListener("keydown", event =>
    {
        if (patron5.test(event.key))
        {
            document.getElementById('estado').style.border = "3px solid #00cc00";
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
            document.getElementById("nombre").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errornombre").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("nombre").style.border = "1px solid #FF0000";
        }
    }

	function valestado()
    {
        var tam = document.getElementById("estado").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorestado").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("estado").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorestado").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("estado").style.border = "1px solid #FF0000";
        }
    }
	
	function valcolonia()
    {
        var tam = document.getElementById("colonia").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorcolonia").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("colonia").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorcolonia").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("colonia").style.border = "1px solid #FF0000";
        }
    }
	
	function valmunicipio()
    {
        var tam = document.getElementById("municipio").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errormunicipio").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("municipio").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errormunicipio").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("municipio").style.border = "1px solid #FF0000";
        }
    }
	
	function valcalle()
    {
        var tam = document.getElementById("calle").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorcalle").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("calle").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorcalle").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("calle").style.border = "1px solid #FF0000";
        }
    }

     // ----------------VALIDACION DE CORREO 
    const $input9 = document.querySelector("#Mail");
    const patron9 = /[a-zA-Z.-_@ áéíóú]+/;
  
    $input9.addEventListener("keydown", event =>
    {
        if (patron9.test(event.key))
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
    function valMail()
            {
                var tam = document.getElementById("Mail").value;
                if(tam.length>=8 && tam.length<=25)
                {
                    document.getElementById("errorMail").innerHTML = "";
                    document.getElementById("Mail").style.border = "3px solid #00cc00";
                }
                else{
                    document.getElementById("errorMail").innerHTML = "Error: La longitud de caracteres debe ser de 8 a 25 ";
                    document.getElementById("Mail").style.border = "1px solid #FF0000";
                }
            }


</script>
<br>

<!--askdmaksmdaksdas-->

	<script>
           const $telefono = document.querySelector("#tel");
			const $Ncalle = document.querySelector("#Ncalle");
			const $cp = document.querySelector("#cp");


			
            // const patron = /[a-zA-Z]+/;
            const patrontel = /[0-9+]+/;
			const patroncal = /[0-9+]+/;
			const patroncp = /[0-9+]+/;
			

			$telefono.addEventListener("keydown", event =>
            {
                if (patrontel.test(event.key))
                {
                    document.getElementById('tel').style.border = "3px solid #00cc00";
                }
                else{
                    if (event.keyCode==2)
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

			$Ncalle.addEventListener("keydown", event =>
            {
                if (patroncal.test(event.key))
                {
                    document.getElementById('Ncalle').style.border = "3px solid #00cc00";
                }
                else{
                    if (event.keyCode==2)
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
			$cp.addEventListener("keydown", event =>
            {
                if (patroncp.test(event.key))
                {
                    document.getElementById('cp').style.border = "3px solid #00cc00";
                }
                else{
                    if (event.keyCode==5)
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
           
			function valtel()
            {
                var tam = document.getElementById("tel").value;
                if(tam.length>=7 && tam.length<=10)
                {
                    document.getElementById("errortel").innerHTML = "";
                    document.getElementById("tel").style.border = "3px solid #00cc00";
                }
                else{
                    document.getElementById("errortel").innerHTML = "Error: La longitud de caracteres debe ser de 7 a 10 ";
                    document.getElementById("tel").style.border = "1px solid #FF0000";
                }
            }
			function valNcalle()
            {
                var tam = document.getElementById("Ncalle").value;
                if(tam.length>=2 && tam.length<=3)
                {
                    document.getElementById("errorNcalle").innerHTML = "";
                    document.getElementById("Ncalle").style.border = "3px solid #00cc00";
                }
                else{
                    document.getElementById("errorNcalle").innerHTML = "Error: La longitud de caracteres debe ser de 2 a 3";
                    document.getElementById("Ncalle").style.border = "1px solid #FF0000";
                }
            }
			
			function valcp()
            {
                var tam = document.getElementById("cp").value;
                if(tam.length<=5 && tam.length>=5)
                {
                    document.getElementById("errorcp").innerHTML = "";
                   
                    document.getElementById("cp").style.border = "3px solid #00cc00";
                }
                else{
                    document.getElementById("errorcp").innerHTML = "Error: La longitud de caracteres debe ser de 5";
                    document.getElementById("cp").style.border = "1px solid #FF0000";
                }
            }
        </script>
		
		
</script>
@stop
