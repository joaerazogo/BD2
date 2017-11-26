@section('contenido')
<html>
<head>
	<title>Seleccionar residencia</title>
</head>
<body>
	<form action="{{url('Persona')}}" method="POST">
		<div class="form-group">
			<label for="">Persona</label>
				<div class="input-field col s6">
					<select name="_id" id="_id" class="form-control">
			   			<option value="">Elige la Persona</option>
			   			@foreach($persona as $per)
				   			<option value="{{$per->_id}}">{{$per->_id}}</option>
			    		@endforeach
					</select>
				</div>
		</div>
	</form>
	</br>
	<div class="row">
		<div class="input-field col s6">
			<a href="{{url('Persona')}}">
				<button class="btn waves-effect waves-light" type="submit" name="codigo">Seleccione
					<i class="material-icons right">send</i>
				</button>
			</a>
		</div>
		</br>
		<div class="input-field col s6">
			<a href="{{url('/')}}">
				<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
					<i class="material-icons right">forward_5</i>
				</button>
			</a>
		</div>
	</div>
</body>
</html>