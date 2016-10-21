<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
    #map-canvas {
        height: 100%;
        
    margin: 0px;
        padding: 0px;
}
	
#panel {
  
	left: 75%;
	border: 2px solid #888;
	padding: 5px;
	background-color: #300030;
	opacity:0.9;
  
	}

    </style>
	<script type="text/javascript" scr="js/jquery1.js"> </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&sensor=true"></script>
	
<?php

$con=mysqli_connect("localhost","root","","dumap");
$a='34';

echo "<script>

var yyn,yyad,yyweb,yylt,yyln,yypr,yyms,yymd,yybs,yypi,yyci,yyt,yye;

</script>";


$lat=array();

$read=mysqli_query($con,"select * from clg where id='$a'");

while($row=mysqli_fetch_array($read)){
$tmpn=$row['Name'];
$tmpt=$row['Telephone'];
$tmpe=$row['Email'];
$tmpad=$row['Address'];
$tmpweb=$row['Website'];
$tmplt=$row['Latitude'];
$tmpln=$row['Longitude'];
$tmppr=$row['Principal'];
$tmpms=$row['metrostn'];
$tmpmd=$row['metrod'];
$tmpbs=$row['bussp'];
$tmpci=$row['cing'];
}

echo"<script>
var ad;
ad=\"$tmpn\";</script>
";
echo"<script>
yyn=\"$tmpn\";
yyt=\"$tmpt\";
yye=\"$tmpe\";
yyad=\"$tmpad\";
yyweb=\"$tmpweb\";
yylt=$tmplt;
yyln=$tmpln;
yypr=\"$tmppr\";
yyms=\"$tmpms\";
yymd=$tmpmd;
yybs=\"$tmpbs\";
yyci=\"$tmpci\";
</script>
";
?>	
<?php

$con=mysqli_connect("localhost","root","touch","shape");
$a='34';

echo "<script>

var c1lt,c1ln,c2lt,c2ln,c3lt,c3ln,c4lt,c4ln,c5lt,c5ln;

</script>";

$read=mysqli_query($con,"select * from poly where id='$a'");

while($row=mysqli_fetch_array($read)){
$tmp1=$row['cor1lt'];
$tmp2=$row['cor1ln'];
$tmp3=$row['cor2lt'];
$tmp4=$row['cor2ln'];
$tmp5=$row['cor3lt'];
$tmp6=$row['cor3ln'];
$tmp7=$row['cor4lt'];
$tmp8=$row['cor4ln'];
$tmp9=$row['cor5lt'];
$tmp10=$row['cor5ln'];
}

echo"<script>
var ad;
ad=\"$tmpn\";</script>
";
echo"<script>
c1lt=\"$tmp1\";
c1ln=\"$tmp2\";
c2lt=\"$tmp3\";
c2ln=\"$tmp4\";
c3lt=\"$tmp5\";
c3ln=\"$tmp6\";
c4lt=\"$tmp7\";
c4ln=\"$tmp8\";
c5lt=\"$tmp9\";
c5ln=\"$tmp10\";
</script>
";
?>

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
  building = [
new google.maps.LatLng(c1lt,c1ln),
new google.maps.LatLng(c2lt,c2ln),
new google.maps.LatLng(c3lt,c3ln),
new google.maps.LatLng(c4lt,c4ln),
new google.maps.LatLng(c5lt,c5ln)
];
 
 var polygon = new google.maps.Polygon({
  paths: building,
  strokeColor: '#300030',
  strokeWeight: 2,
  fillColor: '#300030',
  fillOpacity: 0.5
});    
 
polygon.setMap(map);
directionsDisplay.setMap(map);
codeAddress();


}


function calcRoute() {
if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var coords = new google.maps.LatLng(latitude, longitude);



	var end = yyn;
  var request = {
      origin: coords,
      destination: yyn,
      travelMode: google.maps.TravelMode.TRANSIT
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });

});
}
}

function codeAddress() {	
  var address = ad;//document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
var popupContent = "Hello";
var infowindow = new google.maps.InfoWindow({
      content: popupContent,
	maxWidth: 500
	
  });
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
	 
      });
if (results[0].geometry.viewport) 
          map.fitBounds(results[0].geometry.viewport);
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}



 google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>


<body style="background-color:#421c52;">
<div id="map-canvas"></div>
<div id="panel">
<h1 style="text-align: center;">INFO</h1>
<img src="" style="display: block;margin-left: auto; margin-right: auto"/>
Principal : 
Address: 
Telephone: 
Email: 
Metro Station: 
Distance(in kms):  
Bus Stop: 
<input id="clickMe" type="button" value="Get Directions to This College" onclick="calcRoute();" />
</div>
</body>

</html>
