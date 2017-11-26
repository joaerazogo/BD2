@extends('materialize')
@section('contenido')
<html>
	<head>
		<title>CENSO DE COLOMBIA 2017</title>
	</head>
  <style>
    body {
      background-color: #DDF5F7;
    }
  </style>
	<body>
    <center>
        <div class="card-panel blue darken-2">
            <h3>Bienvenido al censo de Colombia</h3>
        </div>
    </center>
		<center>
        <h3>Información de la residencia</h3>
    </center>
    <div class = "row">
        <div class = "col s4 l5 #DDF5F7">
          <div>
            <h3>¿Desea insertar una residencia?</h3>
            <a href="{{route('residencia.create')}}" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Crear Residencia</a>
            <br></br>
          </div>
        </div>

        <div class = "col s4 #DDF5F7">
          <div>
            <h3>Consultar la residencia</h3>
            <a href="{{route('residencia.index')}}" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Consultar</a>
          </div>
        </div>
		</div>
		<div class = "row">
			<div class = "col s4 #DDF5F7">
				<div>
					<h3>Consultar la residencia por los parámetros latitud, longitud, distancia mínima y distancia máxima</h3>
					<a href="{{url('ConsultarResidencia')}}" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Consultar Residencia</a>
				</div>
			</div>
		</div>
		<center>
        <h3>Información de la persona</h3>
    </center>

		<div class = "row">
        <div class = "col s6 #DDF5F7">
          <h3>¿Desea insertar una persona?</h3>
          <div>
            <a href="{{route('persona.create')}}" class="waves-effect waves-light btn"><i class="material-icons left">contacts</i>Insertar Persona</a>
          </div>
        </div>

        <div class = "col s6 #DDF5F7">
          <div>
            <h3>Consultar persona</h3>
            <a href="{{route('persona.index')}}" class="waves-effect waves-light btn"><i class="material-icons left">contacts</i>Insertar Persona</a>
            <br></br>
          </div>
        </div>

    </div>
	</body>
<html>
