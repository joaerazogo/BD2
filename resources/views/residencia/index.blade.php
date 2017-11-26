@extends('materialize')
@section('contenido')

<!DOCTYPE html>
<html>
<head>
	<title>Datos de la residencia</title>
</head>
<body>
		<table class="centered">
    <tr>
			<th>_id</th>
			<th>direccion</th>
			<th>barrio</th>
      		<th>municipio</th>
			<th>estrato</th>
			<th>tipo</th>
      		<th>codigo</th>
			<th>coordenadas-Longitude</th>
		    <th>coordenadas-Latitude</th>
			<th>numero_residentes</th>
      		<th>hab</th>
	</tr>


  @foreach($residencia as $r)
      <tr>
        <td>{{$r->_id}}</td>
        <td>{{$r->direccion}}</td>
        <td>{{$r->barrio}}</td>
        <td>{{$r->municipio}}</td>
        <td>{{$r->estrato}}</td>
        <td>{{$r->tipo}}</td>
        <td>{{$r->codigo}}</td>
        <td>{{$r->coordinates[0]}}</td>
        <td>{{$r->coordinates[1]}}</td>
		<td>{{$r->type}}</td>
        <td>{{$r->numero_residentes}}</td>
		<td>{{$r->hab[0]}}</td>
      </tr>
  @endforeach


	</table>

	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		        <script type="text/javascript">
			            
		                if (navigator.geolocation) {
		                navigator.geolocation.getCurrentPosition(function (p) {
		                    var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
		                    var mapOptions = {
		                        center: LatLng,
		                        zoom: 13,
                        	mapTypeId: google.maps.MapTypeId.ROADMAP
                    	};
                    	var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                    	var marker = new google.maps.Marker({
                        	position: LatLng,
                        	map: map,
                        	title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />	Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.		longitude
	                    });
                    	google.maps.event.addListener(marker, "click", function (e) {
                        	var infoWindow = new google.maps.InfoWindow();
                        	infoWindow.setContent(marker.title);
                        	infoWindow.open(map, marker);
                		});
            		});
            		} else {
                		alert('Geo Location feature is not supported in this browser.');
            		}
	        		
				</script>
	<div id="dvMap" style="width: 800px; height: 800px"></div>

	<div class="row">
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
