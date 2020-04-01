<title>Reporte de Restaurantes</title>
@extends('index2')
@section('contenido')
<h1>Reporte de Restaurantes</h1>
<br> 
<table class="table table-hover table-responsive">
<thead class="thead-dark">
		
		<th scope='col'>Nombre</th>
		<th scope='col'>Telefono</th>
		<th scope='col'>Calle</th>
		<th scope='col'>Colonia</th>
		<th scope='col'>Municipio</th>
		<th scope='col'>CP</th>
		<th scope='col'>Correo</th>
		<th scope='col'>Estado</th>
		<th scope='col'>Operacion</th>
</thead>
@foreach($consulta as $c)
	
<td>{{$c->nombre}}</td>
<td>{{$c->tel}}</td>
<td>{{$c->calle}} {{$c->Ncalle}}</td>
<td>{{$c->colonia}}</td>
<td>{{$c->municipo}}</td>
<td>{{$c->cp}}</td>
<td>{{$c->correo}}</td>
<td>{{$c->estado}}</td>
<td>


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
	<a class="btn btn-danger btn-sm" href="{{URL::action('Restaurantecontroller@Borrarestaurante',['Clave_restaurante'=>$c->Clave_restaurante])}}" role="button">Aceptar</a>
	</div>
	</div>
	</div>
	</div>
		<a class="btn btn-success btn-sm" href="{{URL::action('Restaurantecontroller@Modificarrestaurante',['Clave_restaurante'=>$c->Clave_restaurante])}}" role="button">Editar</a>
		@else
		<a class="btn btn-warning btn-sm" href="{{URL::action('Restaurantecontroller@Restaurarestaurante',['Clave_restaurante'=>$c->Clave_restaurante])}}" role="button">Restaurar</a>
		@endif
	</td></tr>
@endforeach
</table>
@stop
