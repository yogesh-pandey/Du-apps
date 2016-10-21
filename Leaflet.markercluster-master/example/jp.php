<html>
<head>
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.2/leaflet.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.2/leaflet.ie.css" /><![endif]-->
	<script src="http://cdn.leafletjs.com/leaflet-0.6.2/leaflet.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="mobile.css" />

	<link rel="stylesheet" href="MarkerCluster.css" />
	<link rel="stylesheet" href="MarkerCluster.Default.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="MarkerCluster.Default.ie.css" /><![endif]-->
	<script src="leaflet.markercluster-src.js"></script>
<style type="text/css">
#map { height: 680px; }
</style>
</head>

<script src="http://cdn.leafletjs.com/leaflet-0.6.2/leaflet.js"></script>	

<body>
<div id="map"></div>

<?php
$con=mysqli_connect("localhost","root","","mydata");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$a=55;

?>

<script>
var yyp,yylt,yyln;
var yydt,i;
var arr=[];
var arrdt=[];
var arrlt=[];
var arrln=[];
<?php 
$read=mysqli_query($con,"select percentage from district_data");
$rlt=mysqli_query($con,"select latitude from district_data");
$rln=mysqli_query($con,"select longitude from district_data");
$rdt=mysqli_query($con,"select District from district_data");
while($rread=mysqli_fetch_array($read))
{
$rrdt=mysqli_fetch_array($rdt);
$rrlt=mysqli_fetch_array($rlt);
$rrln=mysqli_fetch_array($rln);

$tmpp=$rread['percentage'];
$tmplt=$rrlt['latitude'];
$tmpln=$rrln['longitude'];
$tmpdt=$rrdt['District'];
?>
yyp=<?php echo $tmpp;?>;
yylt=<?php echo $tmplt;?>;
yyln=<?php echo $tmpln;?>;
yydt="<?php echo $tmpdt;?>";

arrdt.push(yydt);
arr.push(yyp);
arrlt.push(yylt);
arrln.push(yyln);

<?php
}
?> 






var cloudmadeUrl = 'http://{s}.tile.cloudmade.com/5d205a745590448bbb2598e28fd70844/997/256/{z}/{x}/{y}.png',
			cloudmadeAttribution = 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2011 CloudMade, Points &copy 2012 LINZ',
			cloudmade = L.tileLayer(cloudmadeUrl, {maxZoom: 18, attribution: cloudmadeAttribution}),
			latlng = L.latLng(21.6, 79);
var map = L.map('map', {center: latlng, zoom: 5, layers: [cloudmade]});





var tt="hello";
document.write(tt);

</script>

<?php
mysqli_close($con);
?>
<b>hello
</body>
</html>
