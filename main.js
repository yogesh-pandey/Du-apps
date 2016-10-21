var infowindow = new google.maps.InfoWindow();
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
    zoom: 7,
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
google.maps.event.addListener(marker, 'click', (function(marker, k) {
        return function() {
          infowindow.setContent(arrn[k]);
          infowindow.open(map, marker);
        }
      })(marker, k));

  markers.push(marker);




}
 markerCluster = new MarkerClusterer(map, markers);
  
  
}

 google.maps.event.addDomListener(window, 'load', initialize);
  
