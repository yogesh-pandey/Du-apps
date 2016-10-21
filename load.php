<html>
  <head>
    <title>Simple Map</title>
    <!--Mobile View-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!--Title For Side Panel-->
    <title>Displaying text directions with <code>setPanel()</code></title>
     <!--uery For AutoComplete-->
<link rel="stylesheet" href="./map.css" />


  <!-- Maps Api And Cluster Libraries-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&ensor=true"></script>

<!--Database Fetching Phps-->
<?php include ('./clg_details-spa.php');?>
<?php include ('./ply_sql_fetch.php');?>
<?php $tmpp=$_POST['college']; 
echo 
"<script>

 var clggg=\"$tmpp\";

 </script>";
  ?>
<!-- Style Sheet of Maps And Side Panel-->

<!-- Main Maps Function-->
<script type="text/javascript">
 var infowindow = new google.maps.InfoWindow();
var rendererOptions = {
  draggable: true,
};

var icon = 'localhost/logo_du.png';
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var geocoder;
var k;
var map;  
function initialize() {
   valk();
    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
geocoder = new google.maps.Geocoder();

var mapOptions = {
    zoom: 17,
    center: new google.maps.LatLng(arrlt[k],arrln[k])
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

function valk() {
   for (k=0;arrn[k]!=clggg;k++){}
}

function setp(){
  

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


function calcRoute() {

if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var coords = new google.maps.LatLng(latitude, longitude);



  var end = clggg;
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
  
  var pos = new google.maps.LatLng(arrlt[k],arrln[k]);
var marker = new google.maps.Marker({
          
          position: pos,
          map: map,
          icon: icon
    
      });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(arrn[k]);
    infowindow.open(map,marker);
  });

}   


 google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
</head>
<body>
<div id="directions-panel">
<?php include 'division.php';
?>
 </div>
 <div id="map-canvas"></div>
  
</body>
</html>
