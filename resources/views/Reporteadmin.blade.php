<title>Reporte de administradores</title>
@extends('index2')
@section('contenido')
<h1>Reporte de administradores</h1>
<br>
<table class="table table-hover table-responsive">
<thead class="thead-dark">
		<tr><th scope='col'>Clave</th>
		<th scope='col'>Foto</th>
		<th scope='col'>Nombre del usuario</th>
		<th scope='col'>Tipo</th>
		<th scope='col'>Correo</th>
		<th scope='col'>Password</th>
		<th scope='col'>Operaciones</th></tr>

</thead>
@foreach($consulta as $c)
<tr><th>{{$c->idu}}</th>
<td><img src="{{asset('public/archivos/'.$c->archivo)}}" height=50 width=50></td>
<td>{{$c->nombre}} {{$c->apellido}}</td>
<td>{{$c->tipo}}</td>
<td>{{$c->correo}}</td>
<td>{{$c->password}}</td>

<td>
@if($c->activo == 'Si')

	@if(Session::get('sesiontipo')=="Admin")
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
	<a class="btn btn-danger btn-sm" href="{{URL::action('Admincontroller@Borraadmin',['idu'=>$c->idu])}}" role="button">Aceptar</a>
	</div>
	</div>
	</div>
	</div>
		@endif
		<a class="btn btn-success btn-sm" href="{{URL::action('Admincontroller@Modificaradmin',['idu'=>$c->idu])}}" role="button">Editar</a>
		@else
		<a class="btn btn-warning btn-sm" href="{{URL::action('Admincontroller@Restauraadmin',['idu'=>$c->idu])}}" role="button">Restaurar</a>
	@endif
	</td></tr>
@endforeach
</table>
@stop
