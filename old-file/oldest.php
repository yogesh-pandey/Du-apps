<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px

}
#panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }

#panelZ {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: 250px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&sensor=false"></script>
	


<script>

var icon = 'localhost/logo_du.png';
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var geocoder;

var map;
function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
geocoder = new google.maps.Geocoder();

var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(28.6100,77.2300)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
directionsDisplay.setMap(map);
codeAddress();


}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
 
}


function codeAddress() {
	
  geocoder.geocode( { 'adress': 'Maharaja Agrasen College'}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
	  icon: icon
      });
if (results[0].geometry.viewport) 
          map.fitBounds(results[0].geometry.viewport);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}



 google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>

  <body>
    <div id="panelz" >
    <b>Start: </b>
    <select id="start" onchange="calcRoute();">
      <option value="Maharaja Agrasen College">MAC</option>
      <option value="Keshav Mahavidyalaya">KV</option>
      <option value="joplin, mo">Joplin, MO</option>
      <option value="oklahoma city, ok">Oklahoma City</option>
      <option value="amarillo, tx">Amarillo</option>
      <option value="gallup, nm">Gallup, NM</option>
      <option value="flagstaff, az">Flagstaff, AZ</option>
      <option value="winona, az">Winona</option>
      <option value="kingman, az">Kingman</option>
      <option value="barstow, ca">Barstow</option>
      <option value="san bernardino, ca">San Bernardino</option>
      <option value="los angeles, ca">Los Angeles</option>
    </select>
    <b>End: </b>
    <select id="end" onchange="calcRoute();">
      <option value="Maharaja Agrasen College">MAC</option>
      <option value="Keshav Mahavidyalaya">KV</option>
      <option value="joplin, mo">Joplin, MO</option>
      <option value="oklahoma city, ok">Oklahoma City</option>
      <option value="amarillo, tx">Amarillo</option>
      <option value="gallup, nm">Gallup, NM</option>
      <option value="flagstaff, az">Flagstaff, AZ</option>
      <option value="winona, az">Winona</option>
      <option value="kingman, az">Kingman</option>
      <option value="barstow, ca">Barstow</option>
      <option value="san bernardino, ca">San Bernardino</option>
      <option value="los angeles, ca">Los Angeles</option>
    </select>
    </div>
    <div id="map-canvas"></div>
  </body>


</html>
