<title>Reporte de donaciones</title>
@extends('index2')
@section('contenido')
<h1>Reporte de donaciones</h1>
<br>
<table class="table table-hover table-responsive">
<thead class="thead-dark">
		<tr><th scope='col'>Clave</th>
		<th scope='col'>Cantidad</th>
		<th scope='col'>Fecha de donacion</th>
		<th scope='col'>Donante</th>
		<th scope='col'>Estado</th>
		<th scope='col'>Operaciones</th></tr>

</thead>
@foreach($consulta as $c)
<tr><th>{{$c->Clave_donacion}}</th>
<td>{{$c->cantidad}}</td>
<td>{{$c->fecha}}</td>
<td>{{$c->nombre}}</td>
<td>{{$c->estado}}</td>

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
	<a class="btn btn-danger btn-sm" href="{{URL::action('Donacioncontroller@Borradonacion',['Clave_donacion'=>$c->Clave_donacion])}}" role="button">Aceptar</a>
	</div>
	</div>
	</div>
	</div>
		@endif
		<a class="btn btn-success btn-sm" href="{{URL::action('Donacioncontroller@Modificardonacion',['Clave_donacion'=>$c->Clave_donacion])}}" role="button">Editar</a>
		@else
		<a class="btn btn-warning btn-sm" href="{{URL::action('Donacioncontroller@Restauradonacion',['Clave_donacion'=>$c->Clave_donacion])}}" role="button">Restaurar</a>
	@endif
	</td></tr>
@endforeach
</table>
@stop
