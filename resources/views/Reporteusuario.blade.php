<title>Reporte de Usuarios</title>
@extends('index2')
@section('contenido')
<h1>Reporte de usuarios</h1>
<br>
<table class="table table-hover table-responsive">
<thead class="thead-dark">

		<th scope='col'>Nombre</th>
		<th scope='col'>Sexo</th>
		<th scope='col'>Telefono</th>
		<th scope='col'>Calle</th>
		<th scope='col'>Colonia</th>
		<th scope='col'>Municipio</th>
		<th scope='col'>CP</th>
		<th scope='col'>Estado</th>
		<th scope='col'>Operaciones</th></tr>
</thead>
@foreach($consulta as $c)

<td>{{$c->nombre}} {{$c->app_usu}} {{$c->apm_usu}}</td>
<td>{{$c->sex_usu}}</td>
<td>{{$c->tel_usu}}</td>
<td>{{$c->calle_usu}} {{$c->ncalle_usu}}</td>
<td>{{$c->colonia_usu}}</td>
<td>{{$c->municipio_usu}}</td>
<td>{{$c->cp_usu}}</td>
<td>{{$c->estado_usu}}</td>
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
	<a class="btn btn-danger btn-sm" href="{{URL::action('Usuariocontroller@Borrausuario',['Clave_usuario'=>$c->Clave_usuario])}}" role="button">Aceptar</a>
	</div>
	</div>
	</div>
	</div>
		@endif
		<a class="btn btn-success btn-sm" href="{{URL::action('Usuariocontroller@Modificarusuario',['Clave_usuario'=>$c->Clave_usuario])}}" role="button">Editar</a>
		@else
		<a class="btn btn-warning btn-sm" href="{{URL::action('Usuariocontroller@Restaurausuario',['Clave_usuario'=>$c->Clave_usuario])}}" role="button">Restaurar</a>
	@endif
	</td></tr>
@endforeach
</table>
@stop
