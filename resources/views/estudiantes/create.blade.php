@extends('plantilla')
@extends('materialize')
@section('contenido')


	<form action="{{route('estudiantes.store')}}" method="POST">
		{{ csrf_field() }}
		<table border=1>
			<tr>
				<td>nombre</td>
				<td><input type="text" name="nombre" /></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td colspan=2>
					<div class="row">
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">cloud</i>
						</button>
					</div>
				</td>
			</tr>
		</table>
	</form>
	<script type="text/javascript">
		var a = prompt("Enter your first coordenate");
		document.write(typeof(a));
		document.write("<br/>");
		a = parseFloat(a);
		document.write(a);
		alert(a);
		document.write(typeof(a));
	</script>
	<a class="waves-effect waves-light btn">button</a>
	<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
	<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>

@stop
