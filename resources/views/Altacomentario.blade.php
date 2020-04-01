<title>Comentarios</title>
@extends('index2')
@section('contenido')
{{Form::open (['route' => 'Guardacomentario','files' => 'true'])}}
{{Form::token()}}
<div class="container">
	<div class="card">
		<h5 class="card-header">Comentarios</h5>
		<div class="card-body">
			<div class="form-group">
				{{Form::label('Clave_comentario', 'ID comentario')}}
				@if ($errors ->first('Clave_comentario'))
					<p><i>{{$errors->first('Clave_comentario')}}</i></p>
				@endif
				{{Form::text('Clave_comentario',$idsigue,['readonly','class' => 'form-control'])}}
			</div>
			<div class="form-group">
				{{Form::label('estrella', 'Estrellas')}}
				@if ($errors ->first('estrella'))
					<p><i>{{$errors->first('estrella')}}</i></p>
				@endif
				{{Form::text('estrella', old('estrella'), ['class' => 'form-control', 'id' => 'Estrella', 'onblur' => 'valEstrella()'])}}
				<small class="form-text text-muted">Introduzca la cantidad de estrellas.</small>
       			<p id="errorEstrella"></p> <!-- Posición del Mensaje de Error -->
			</div>
		
			<div class="form-group">
				{{Form::label('aprobado', 'Aprobado')}}
				@if ($errors ->first('aprobado'))
					<p><i>{{$errors->first('aprobado')}}</i></p>
				@endif
				{{Form::text('aprobado', old('aprobado'), ['class' => 'form-control', 'id' => 'Aprobado', 'onblur' => 'valAprobado()'])}}
				<small class="form-text text-muted">Introduzca el estado.</small>
       					 <p id="errorAprobado"></p> <!-- Posición del Mensaje de Error -->
			</div>
			
			<div class="form-group">
			{{Form::label('comentario','Comentario')}}
				{{Form::textarea('comentario', '')}}
				@if ($errors ->first('comentario'))
					<p><i>{{$errors->first('comentario')}}</i></p>
                    {{Form::text('comentario', old('comentario'), ['class' => 'form-control', 'id' => 'comentario', 'onblur' => 'valcomentario()'])}}
				<small class="form-text text-muted">Introduzca el comentario.</small>
       					 <p id="errorcomentario"></p> <!-- Posición del Mensaje de Error -->
					<p></p>
				@endif
			</div>
			
				{{Form::submit('Guardar',['class' => 'btn btn-success'])}}
		</div>
	</div>

</div>


<script>
const $input13 = document.querySelector("#Estrella");
    const patron13 = /[0-5]+/;
    $input13.addEventListener("keydown", event =>
            {
                if (patron13.test(event.key))
                {
                    document.getElementById('Estrella').style.border = "3px solid #00cc00";
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
            function valEstrella()
    {
        var tam = document.getElementById("Estrella").value;
        if(tam.length<=1 && tam.length>=1  )
        {
            document.getElementById("errorEstrella").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Estrella").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorEstrella").innerHTML = "Error: La longitud de caracteres debe ser de un numero";
            document.getElementById("Estrella").style.border = "1px solid #FF0000";
        }
    }
</script>

<script>
const $input4 = document.querySelector("#Aprobado");
    const patron4 = /[a-zA-Z. áéíóú]+/;
    $input4.addEventListener("keydown", event =>
            {
                if (patron4.test(event.key))
                {
                    document.getElementById('Aprobado').style.border = "3px solid #00cc00";
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
            function valAprobado()
    {
        var tam = document.getElementById("Aprobado").value;
        if(tam.length>=1 && tam.length<=2  )
        {
            document.getElementById("errorAprobado").innerHTML = "";
            // document.getElementById("errorNombre").innerHTML = "Validación Exitosa!";
            document.getElementById("Aprobado").style.border = "3px solid #00cc00";
        }
        else{
            document.getElementById("errorAprobado").innerHTML = "Error: La longitud de caracteres debe ser de 2 caracteres";
            document.getElementById("Aprobado").style.border = "1px solid #FF0000";
        }
    }

    const $input5 = document.querySelector("#comentario");
    const patron5 = /[a-zA-Z. áéíóú]+/;
    $input5.addEventListener("keydown", event =>
            {
                if (patron5.test(event.key))
                {
                    document.getElementById('comentario').style.border = "3px solid #00cc00";
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
            
</script>








@stop
