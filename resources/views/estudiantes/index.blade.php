@extends('plantilla')
@extends('materialize')
@section('contenido')

	<table border=1>
		<tr>
			<th>_id</th>
			<th>nombre</th>
			<th>email</th>
		</tr>

	@foreach($estudiantes as $e)
		<tr>
			<td>{{$e->_id}}</td>
			<td>{{$e->nombre}}</td>
			<td>{{$e->email}}</td>
		</tr>
	@endforeach

	</table>
	<a href="{{route('estudiantes.create')}}">
		<div class="row">
			<button class="btn waves-effect waves-light" type="submit" name="action">Nuevo
				<i class="material-icons right">cloud</i>
			</button>
		</div>
	</a>
@stop
