<title>Alta de donaciones</title>
@extends('index2')
@section('contenido')
{{Form::open (['route' => 'Guardadonacion','files' => 'true'])}}
{{Form::token()}}
<div class="container">
	<div class="card">
		<h5 class="card-header">Alta de donaciones</h5>
		<div class="card-body">
			<div class="form-group">
				{{Form::label('Clave_donacion', 'Clave de donacion')}}
				@if ($errors ->first('Clave_donacion'))
					<p><i>{{$errors->first('Clave_donacion')}}</i></p>
				@endif
				{{Form::text('Clave_donacion',$idsigue,['readonly','class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('cantidad', 'Cantidad')}}
				@if ($errors ->first('cantidad'))
					<p><i>{{$errors->first('cantidad')}}</i></p>
				@endif
				{{Form::text('cantidad', old('cantidad'), ['class' => 'form-control', 'id' => 'Cantidad', 'onblur' => 'valCantidad()'])}}
                <small class="form-text text-muted">Introduzca su Cantidad.</small>
        <p id="errorCantidad"></p> <!-- Posición del Mensaje de Error -->
            </div>
			<div class="form-group">
				{{Form::label('fecha', 'Fecha de donacion')}}
				@if ($errors ->first('fecha'))
					<p><i>{{$errors->first('fecha')}}</i></p>
				@endif
				{{Form::date('fecha',old('fecha'),['class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('usuario', 'Usuario donador')}}
				<select name = 'Clave_usuario' class="form-control">
				@foreach($usuarios as $con)
				@if($con->activo == 'Si')
					<option value= '{{$con->Clave_usuario}}'> {{$con->nombre}} </option>
				@endif
				@endforeach
				</select>
			</div>
			<div class="form-group">
				{{Form::label('estado', 'Estado de la donacion')}}
				@if ($errors ->first('estado'))
					<p><i>{{$errors->first('estado')}}</i></p>
				@endif
				{{Form::text('estado', old('estado'), ['class' => 'form-control', 'id' => 'Estado', 'onblur' => 'valEstado()'])}}
                <small class="form-text text-muted">Introduzca su Estado.</small>
        <p id="errorEstado"></p> <!-- Posición del Mensaje de Error -->
            </div>

				{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
		</div>
	</div>
</div>


<script type="text/javascript">
    $('input[name="estado"]').on('click', function (e) 
        {
            if ('Activo'== $(this).val())
            {
                $('#Est').show();
                $('#Est1').show();
            }else{
                $('#Est').hide();
                $('#Est1').hide();
            }
        });
    

</script>

<script>
 
	const $input6 = document.querySelector("Estado");
	const patron6 = /[a-zA-Z. áéíóú]+/;

	$input6.addEventListener("keydown", event =>
    {
        if (patron6.test(event.key))
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

	function valEstado()
    {
        var tam = document.getElementById("Estado").value;
        if(tam.length>=5 && tam.length<=25)
        {
            document.getElementById("errorEstado").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Estado").style.border = "3px solid #16ee08";
        }
        else{
            document.getElementById("errorEstado").innerHTML = "Error: La longitud de caracteres debe ser de entre 5 a 25.";
            document.getElementById("Estado").style.border = "1px solid #FF0000";
        }
    }
	</script>
	<script>
        
			const $cantidad = document.querySelector("#Cantidad");
			const patroncan = /[0-5]+/;

			$cantidad.addEventListener("keydown", event =>
            {
                if (patroncan.test(event.key))
                {
                    document.getElementById('Cantidad').style.border = "3px solid #00cc00";
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
			function Cantidad()
            {
                var tam = document.getElementById("Cantidad").value;
                if(tam.length>=2 && tam.length<=5)
                {
                    document.getElementById("errorCantidad").innerHTML = "";
                    document.getElementById("errorCantidad").innerHTML = "Validación Exitosa!";
                    document.getElementById("Cantidad").style.border = "3px solid #FF0000";
                }
                else{
                    document.getElementById("Cantidad").innerHTML = "Error: La longitud de caracteres debe ser de 10 a 15 caracteres";
                    document.getElementById("Cantidad").style.border = "3px solid #FF0000";
                }
            }
			</script>
@stop
