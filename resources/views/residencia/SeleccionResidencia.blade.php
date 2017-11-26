@section('contenido')
<html>
<head>
	<title>Seleccionar residencia</title>
</head>
<body>
	<form action="{{url('Residencia')}}" method="POST">
		<div class="form-group">
			<label for="">Residencia</label>
				<div class="input-field col s6">
					<select name="codigo" id="codigo" class="form-control">
			   			<option value="">Elige la residencia</option>
			   			@foreach($residencia as $res)
				   			<option value="{{$res->codigo}}">{{$res->codigo}}</option>
			    		@endforeach
			    		<!--<input type="submit" name="codigo">!-->
					</select>
				</div>
		</div>
	</form>
	</br>

	<div class="row">
		<div class="input-field col s6">
			<a href="{{url('Residencia')}}">
				<button class="btn waves-effect waves-light" type="submit" name=& Request.Form("codigo")>	Seleccione
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