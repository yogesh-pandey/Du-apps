<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <style>
      html, body, #map-canvas {

        height: 100%;
        margin: 0px;
        padding: 0px

}
#panel {
        position: absolute;
        top: 92%;
        left: 47%;
        margin-left: -200px;
        z-index: 1000;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
	border-radius: 5px;
	box-shadow: 10px 10px 5px #888888;
      }
	
    </style>
     <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&sensor=true"></script>
    <script type="text/javascript" src="js/data.json"></script>
    <script type="text/javascript" src="js/markerclusterer.js"></script>

 <?php 
include 'clg_details-spa.php';
?>

<?php
include 'ply_sql_fetch.php';
?>


<script type="text/javascript">
var rendererOptions = {
  draggable: true,
};
var markerCluster;
var k;
var markers=[];
var icon = 'localhost/logo_du.png';
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var geocoder;

var map;
function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
geocoder = new google.maps.Geocoder();

var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(28.6100,77.2300)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
 

codeAddress();
setp();
directionsDisplay.setMap(map);
directionsDisplay.setPanel(document.getElementById('directions-panel'));
  google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });


}



function setp(){
  
for( k=0;k<=arri.length;k++) {
 var building = [
new google.maps.LatLng(arr1lt[k],arr1ln[k]),
new google.maps.LatLng(arr2lt[k],arr2ln[k]),
new google.maps.LatLng(arr3lt[k],arr3ln[k]),
new google.maps.LatLng(arr4lt[k],arr4ln[k]),
new google.maps.LatLng(arr5lt[k],arr5ln[k]),
new google.maps.LatLng(arr6lt[k],arr6ln[k]),
new google.maps.LatLng(arr7lt[k],arr7ln[k]),
new google.maps.LatLng(arr8lt[k],arr8ln[k]),
new google.maps.LatLng(arr9lt[k],arr9ln[k]),
new google.maps.LatLng(arr10lt[k],arr10ln[k])
];

 
 var polygon = new google.maps.Polygon({
  paths: building,
  strokeColor: '#300030',
  srokeOpacity: 1,
  strokeWeight: 2,
  fillColor: '#b5a2bb',
  fillOpacity: 0.5
  
});    
polygon.setMap(map); 
}
}

function calcRoute() {
  var i = 0, l = markers.length;
for (i; i<l; i++) {
    markers[i].setMap(null)
}
markers = [];
markerCluster.clearMarkers();
if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var coords = new google.maps.LatLng(latitude, longitude);



  var end = 'Maharaja Agrasen College';
  var request = {
      origin: coords,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });

});
}
}
function computeTotalDistance(result) {
  var total = 0;
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
    total += myroute.legs[i].distance.value;
  }
  total = total / 1000.0;
  document.getElementById('total').innerHTML = total + ' km';
}

function codeAddress() {
  for( k=0;k<arrn.length;k++){
  var pos = new google.maps.LatLng(arrlt[k],arrln[k]);
var marker = new google.maps.Marker({
          
          'position': pos,
    'icon': icon
      });
  markers.push(marker);
google.maps.event.addListener(marker, 'click', function() {
  info();
});

}
 markerCluster = new MarkerClusterer(map, markers);
  
  
}

 google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>

  <body>
<?php    

echo      '   <div id="directions-panel">
           

           <h1 style="text-align: center;">INFO</h1>
<img src="" style="display: block;margin-left: auto; margin-right: auto"/>
<br>Principal :'.$rr1.' 
<br>Address: '.$rr2.'
<br>Telephone: '.$rr6.'
<br>Email: '.$tmpe.'
<br>Metro Station: '.$rr4.'
<br>Distance(in kms):  '.$tmpmd.'
<br>Bus Stop: '.$rr5.'
<br><input type="button" id="poly" name="Get Shape" value="Take Me There" onclick="calcRoute();"></input>
      <label for="autocomplete">SELECT A College: </label>
<input id="autocomplete">
<script>
var tags=[];
for(k=0;k<arrn.length;k++){ 
tags.push(arrn[k]);
}

$( "#autocomplete" ).autocomplete({
source: function( request, response ) {
var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
response( $.grep( tags, function( item ){
return matcher.test( item );
}) );
}
});
</script>
</div>'



?>


    
         
    <div id="map-canvas"></div>

  </body>


</html>
