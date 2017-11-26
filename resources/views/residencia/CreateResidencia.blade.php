@extends('materialize')
@section('contenido')
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>
	    <div class = "card-panel teal lighten-2">
	    	<h3>Bienvenido al censo de Colombia, por favor ingrese los datos</h3></div>
			<form action="{{route('residencia.store')}}" method="POST" onsubmit="coordenate(this)">
				<center>
					<h3>Información de la residencia</h3>
				</center>
				{{ csrf_field() }}
				
				<div class="row">
			    	<form class="col s12">
			      		<div class="row">
			        		<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
			          			<input id="direccion" type="text" name="direccion" class="validate">
			          			<label for="Dirección">Dirección</label>
			        		</div>
						</div>
						
						<div class="row">
				        	<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
				          		<input id="Barrio" type="text" name="barrio" class="validate">
				          		<label for="Barrio">Barrio</label>
				        	</div>
			      		</div>

			      		<div class="row">
			        		<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
				          		<input id="Municipio" type="text" name="municipio" class="validate">
				        	  	<label for="Municipio">Municipio</label>
			      			</div>
			      		</div>

						<div class="row">
			        		<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
			          			<input id="Estrato" type="number" name="estrato" class="validate">
			          			<label for="Estrato">Estrato</label>
			        		</div>
			      		</div>

	          			<div class="row">
	  		      			<div class="input-field col s6">
	  							<i class="material-icons prefix">home</i>
	  		          			<input id="Tipo" type="text" name="tipo" class="validate">
	  		          			<label for="Tipo">Tipo</label>
	  		      			</div>
	          			</div>

						<div class="row">
	  		      			<div class="input-field col s6">
		  						<i class="material-icons prefix">home</i>
		  		          		<input id="Codigo" type="number" name="codigo" class="validate">
	  		          			<label for="Código">Código</label>
	  		      			</div>
	  		      		</div>

	  		      		<h5>Laitude:</h5>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
								<input id="latitude" type="number" step="0.0000001" name="latitude">
							</div>
						</div>

						<h5>Longitude:</h5>

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
								<input id="longitude" type="number" step="0.0000001" name="longitude">
							</div>
						</div>

						<div class="row">
		        			<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
			          			<input id="numero_residentes" type="number" name="numero_residentes" class="validate">
			          			<label for="Id residente">Id Residente</label>
		      				</div>
						</div>

		        		<div class="row">
		        			<div class="input-field col s6">
								<i class="material-icons prefix">home</i>
		          				<input id="hab" type="number" name="hab" class="validate">
		          				<label for="Número de Habitantes">Número de Habitantes</label>
		      				</div>
						</div>	  		
					
						<div class="row">
		          			<button class="btn waves-effect waves-light" type="submit" name="action">		Registar residencia
		            			<i class="material-icons right">cloud</i>
		          			</button>
		        		</div>
					</form>
				</div>
	    	</form>
		</div>
		
		<p>Click the button to get your coordinates.</p>
		<div class="row">
			<div class="input-field col s6">
					<button class="btn waves-effect waves-light" onclick="getLocation()">Obtener ubicación
						<i class="material-icons right">send</i>
					</button>
				<p id="demo"></p>
			</div>

			<div class="input-field col s6">
				<a href="{{url('/')}}">
					<button class="btn waves-effect waves-light" type="submit" name="action">Regresar al inicio
						<i class="material-icons right">forward_5</i>
					</button>
				</a>
			</div>

		</div>

	    <script>
	        var x = document.getElementById("demo");
	        function getLocation() {
	            if (navigator.geolocation) {
	                navigator.geolocation.getCurrentPosition(showPosition);
	            } else {
	                x.innerHTML = "Geolocation is not supported by this browser.";
	            }
	        }
	        function showPosition(position) {
	            x.innerHTML = "Latitude: " + position.coords.latitude +
	            "<br>Longitude: " + position.coords.longitude;
	            var latitude = position.coords.latitude;
	            var longitude = position.coords.longitude;
							longitude = parseFloat(longitude);
		 				 	latitude = parseFloat(latitude);
							document.getElementById("longitude").value = longitude;
		 				 	document.getElementById("latitude").value = latitude;
	        }
					document.getElementById("longitude").value = longitude;
					document.getElementById("latitude").value = latitude;
	    </script>
	    
	</body>
<html>
