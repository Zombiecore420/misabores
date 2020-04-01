<title>Reporte de Comentarios</title>
@extends('index2')
@section('contenido') 
<h1>Reporte de comentarios</h1>
<br>
<table class="table table-hover table-responsive">
<thead class="thead-dark">
		<tr><th scope='col'>Clave</th>
		<th scope='col'>Estrellas</th>
		<th scope='col'>Aprobado</th>
		<th scope='col'>Comentario</th>
		<th scope='col'>Operaciones</th>
		
 
</thead>
@foreach($consulta as $c)
<tr><th>{{$c->Clave_comentario}}</th>
<td>{{$c->estrella}}</td>
<td>{{$c->aprobado}}</td>
<td>{{$c->comentario}}</td>
<td>

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
	Borrar
	</button>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" arialabelledby="
	exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	<h4>Seguro que quieres eliminar este registro?</h4>
	<p>Al aceptar desactivaras este registro</p>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Cancelar</button>
	<a class="btn btn-danger btn-sm" href="{{URL::action('Comentariocontroller@Borracomentario',['Clave_comentario'=>$c->Clave_comentario])}}" role="button">Aceptar</a>
	</div>
	</div>
	</div>
	</div>
	
		<a class="btn btn-success btn-sm" href="{{URL::action('Comentariocontroller@Modificarcomentario',['Clave_comentario'=>$c->Clave_comentario])}}" role="button">Editar</a>
	
		<a class="btn btn-warning btn-sm" href="{{URL::action('Comentariocontroller@Restauracomentario',['Clave_comentario'=>$c->Clave_comentario])}}" role="button">Restaurar</a>
	
	</td></tr>
@endforeach
</table>

<script>

</script>
@stop
