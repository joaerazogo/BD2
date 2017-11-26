@extends('materialize')
@section('contenido')
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
    	<center>
      		<div class = "card-panel teal lighten-2"><h3>Bienvenido al censo de Colombia</h3></div>
    	</center>

		<form action="{{url('Resultados')}}" method="POST">
			{{ csrf_field() }}
      		<center>
				<h3>Por favor ingrese los datos para realizar la consulta</h3>
			</center>

			<div class="row">
	      		
	      		<div class="row">
	        		<div class="input-field col s6">
						<i class="material-icons prefix">home</i>
	          			<input id="latitude" type="number" name="latitude" step="0.00000001" class="validate">
	          			<label for="Latitude">Latitude</label>
		        	</div>
				</div>
				
				<div class="row">
		        	<div class="input-field col s6">
						<i class="material-icons prefix">home</i>
		          		<input id="longitude" type="number" name="longitude" step="0.00000001" class="validate">
		          		<label for="Longitude">Longitude</label>
		        	</div>
	      		</div>

	      		<div class="row">
	        		<div class="input-field col s6">
						<i class="material-icons prefix">home</i>
	          			<input id="Distancia_mimina" type="number" name="distancia_mimina" step="0.00000001" class="validate">
	          			<label for="Distancia mínima">Distancia Mínima</label>
	      			</div>
	      		</div>

	        	<div class="row">
		        	<div class="input-field col s6">
						<i class="material-icons prefix">home</i>
		          		<input id="Distancia_maxima" type="number" name="distancia_maxima" step="0.00000001" class="validate">
		          		<label for="Distancia máxima">Distancia Máxima</label>
		      		</div>
		     	</div>

			 	<div class="row">
					<div class="input-field col l6">
	          			<button class="btn waves-effect waves-light" type="submit" name="action">Consultar
	            		<i class="material-icons right">send</i>
	          			</button>
					</div>
				</div>
      		</div>
    	</form>

		<form action="{{url('/')}}">
			<div class="col s6 offset-s6">
				<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
					<i class="material-icons right">forward_5</i>
				</button>
			</div>
		</form>

	</body>
<html>
